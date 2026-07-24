<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() !== 'sqlite') {
            $this->dropCheckConstraint('inventory_orders', 'inventory_orders_type_check');
            DB::statement("ALTER TABLE inventory_orders ADD CONSTRAINT inventory_orders_type_check CHECK (type IN ('inventory', 'sales', 'purchases', 'gard'))");
        }

        Schema::table('inventory_orders', function ($table) {
            $table->dropColumn('gard_items');
        });
    }

    public function down(): void
    {
        Schema::table('inventory_orders', function ($table) {
            $table->json('gard_items')->nullable();
        });

        if (DB::getDriverName() !== 'sqlite') {
            $this->dropCheckConstraint('inventory_orders', 'inventory_orders_type_check');
            DB::statement("ALTER TABLE inventory_orders ADD CONSTRAINT inventory_orders_type_check CHECK (type IN ('inventory', 'sales', 'purchases'))");
        }
    }

    private function dropCheckConstraint(string $table, string $constraint): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            $exists = DB::selectOne(
                "SELECT COUNT(*) as cnt FROM information_schema.table_constraints WHERE table_schema = DATABASE() AND table_name = ? AND constraint_name = ? AND constraint_type = 'CHECK'",
                [$table, $constraint]
            );

            if ($exists && $exists->cnt > 0) {
                DB::statement("ALTER TABLE {$table} DROP CHECK {$constraint}");
            }
        } else {
            DB::statement("ALTER TABLE {$table} DROP CONSTRAINT IF EXISTS {$constraint}");
        }
    }
};
