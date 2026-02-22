<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MigrateMysqlToPostgres extends Command
{
    protected $signature = 'db:mysql-to-pg';

    protected $description = 'Migrate all tables from MySQL to PostgreSQL safely';

    // =================== ترتيب الجداول حسب FK ===================
    private function sortTablesByDependencies($tables, $pg)
    {
        $deps = [];
        foreach ($tables as $t) {
            $deps[$t] = [];
        }

        $relations = $pg->select("
            SELECT
              tc.table_name,
              ccu.table_name AS foreign_table_name
            FROM information_schema.table_constraints tc
            JOIN information_schema.constraint_column_usage ccu
              ON tc.constraint_name = ccu.constraint_name
            WHERE tc.constraint_type = 'FOREIGN KEY'
        ");

        foreach ($relations as $rel) {
            $deps[$rel->table_name][] = $rel->foreign_table_name;
        }

        // Topological sort
        $sorted = [];
        $visited = [];

        $visit = function ($table) use (&$visit, &$visited, &$sorted, $deps) {
            if (isset($visited[$table])) {
                return;
            }
            $visited[$table] = true;

            foreach ($deps[$table] ?? [] as $parent) {
                $visit($parent);
            }

            $sorted[] = $table;
        };

        foreach ($tables as $table) {
            $visit($table);
        }

        return array_unique($sorted);
    }

    // =================== Handle migration ===================
    public function handle()
    {
        $mysql = DB::connection('mysql_old');
        $pg = DB::connection('pgsql_new');

        $this->warn('Disabling foreign key checks (PostgreSQL)...');
        $pg->statement('SET session_replication_role = replica');

        try {
            // 1️⃣ get all MySQL tables
            $tablesRaw = $mysql->select('SHOW TABLES');
            $tableKey = 'Tables_in_'.env('MYSQL_OLD_DB');
            $tables = array_map(fn ($t) => $t->$tableKey, $tablesRaw);

            // 2️⃣ sort tables by FK dependencies (PostgreSQL)
            $tables = $this->sortTablesByDependencies($tables, $pg);

            $this->info('Migration order:');
            foreach ($tables as $t) {
                $this->line(" - $t");
            }

            // 3️⃣ migrate data
            foreach ($tables as $tableName) {
                $this->info("Migrating: $tableName");

                if (! Schema::connection('pgsql_new')->hasTable($tableName)) {
                    $this->warn("Table $tableName not found in PostgreSQL — skipped");

                    continue;
                }

                $columns = Schema::connection('pgsql_new')->getColumnListing($tableName);
                if (empty($columns)) {
                    $this->warn("Table $tableName has no columns — skipped");

                    continue;
                }

                // 4️⃣ حاول نحدد primary key أو unique index
                $uniqueColumns = null;
                try {
                    $schemaManager = $pg->getDoctrineSchemaManager();
                    $tableDetails = $schemaManager->listTableDetails($tableName);

                    if ($tableDetails->hasPrimaryKey()) {
                        $uniqueColumns = $tableDetails->getPrimaryKey()->getColumns();
                    } else {
                        $uniqueIndexes = array_filter($tableDetails->getIndexes(), fn ($i) => $i->isUnique());
                        if ($uniqueIndexes) {
                            $uniqueColumns = reset($uniqueIndexes)->getColumns();
                        }
                    }
                } catch (\Throwable $e) {
                    // Doctrine مش مثبت أو خطأ، هنكمل بدون upsert
                    $uniqueColumns = null;
                }

                // 5️⃣ chunk آمن: لو فيه عمود PK نستخدم orderBy، لو مفيش نجيب كل الداتا
                if ($uniqueColumns && in_array($uniqueColumns[0], $columns)) {
                    $mysql->table($tableName)
                        ->orderBy($uniqueColumns[0])
                        ->chunk(500, function ($rows) use ($pg, $tableName, $columns, $uniqueColumns) {
                            $this->insertBatch($pg, $tableName, $columns, $rows, $uniqueColumns);
                        });
                } else {
                    $rows = $mysql->table($tableName)->get();
                    $this->insertBatch($pg, $tableName, $columns, $rows, $uniqueColumns);
                }
            }

            $this->info('✔ Data migration completed successfully');

        } catch (\Throwable $e) {
            $this->error('Migration failed: '.$e->getMessage());
            throw $e;
        } finally {
            $this->warn('Re-enabling foreign key checks...');
            $pg->statement('SET session_replication_role = DEFAULT');
        }
    }

    // =================== Insert or Upsert batch ===================
    private function insertBatch($pg, $tableName, $columns, $rows, $uniqueColumns)
    {
        $batch = [];
        foreach ($rows as $row) {
            $item = [];
            foreach ($columns as $col) {
                if (property_exists($row, $col)) {
                    $item[$col] = $row->$col;
                }
            }
            if (! empty($item)) {
                $batch[] = $item;
            }
        }

        if (! empty($batch)) {
            if ($uniqueColumns) {
                $pg->table($tableName)->upsert($batch, $uniqueColumns);
            } else {
                $pg->table($tableName)->insert($batch);
            }
        }
    }
}
