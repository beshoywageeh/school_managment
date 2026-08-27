<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() !== 'mysql') {
            return;
        }

        DB::statement("ALTER TABLE inventory_orders MODIFY type ENUM('inventory', 'sales', 'purchases', 'gard') NOT NULL");
    }

    public function down(): void
    {
        if (DB::getDriverName() !== 'mysql') {
            return;
        }

        DB::statement("ALTER TABLE inventory_orders MODIFY type ENUM('inventory', 'sales', 'purchases') NOT NULL");
    }
};
