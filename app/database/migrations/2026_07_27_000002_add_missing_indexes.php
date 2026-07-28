<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private function addIndexIfNotExists(string $table, $columns): void
    {
        if (! Schema::hasTable($table)) {
            return;
        }

        $indexName = is_array($columns)
            ? $table.'_'.implode('_', $columns).'_index'
            : $table.'_'.$columns.'_index';

        if (Schema::hasIndex($table, $indexName)) {
            return;
        }

        if (is_array($columns)) {
            $allExist = true;
            foreach ($columns as $col) {
                if (! Schema::hasColumn($table, $col)) {
                    $allExist = false;
                    break;
                }
            }
            if (! $allExist) {
                return;
            }
        } elseif (! Schema::hasColumn($table, $columns)) {
            return;
        }

        Schema::table($table, function (Blueprint $table) use ($columns) {
            if (is_array($columns)) {
                $table->index($columns);
            } else {
                $table->index($columns);
            }
        });
    }

    private function dropIndexIfExists(string $table, $columns): void
    {
        if (! Schema::hasTable($table)) {
            return;
        }

        $indexName = is_array($columns)
            ? $table.'_'.implode('_', $columns).'_index'
            : $table.'_'.$columns.'_index';

        if (! Schema::hasIndex($table, $indexName)) {
            return;
        }

        Schema::table($table, function (Blueprint $table) use ($columns) {
            $table->dropIndex($columns);
        });
    }

    public function up(): void
    {
        $this->addIndexIfNotExists('students', 'school_id');
        $this->addIndexIfNotExists('fee_invoices', 'school_id');
        $this->addIndexIfNotExists('recipt__payments', 'school_id');
        $this->addIndexIfNotExists('inventory_orders', ['school_id', 'status']);
        $this->addIndexIfNotExists('inventory_transactions', ['school_id', 'item_id']);
        $this->addIndexIfNotExists('activity_logs', ['school_id', 'created_at']);
    }

    public function down(): void
    {
        $this->dropIndexIfExists('students', 'school_id');
        $this->dropIndexIfExists('fee_invoices', 'school_id');
        $this->dropIndexIfExists('recipt__payments', 'school_id');
        $this->dropIndexIfExists('inventory_orders', ['school_id', 'status']);
        $this->dropIndexIfExists('inventory_transactions', ['school_id', 'item_id']);
        $this->dropIndexIfExists('activity_logs', ['school_id', 'created_at']);
    }
};
