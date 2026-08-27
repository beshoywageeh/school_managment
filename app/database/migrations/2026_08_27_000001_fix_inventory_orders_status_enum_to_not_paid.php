<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() !== 'mysql') {
            return;
        }

        DB::table('inventory_orders')
            ->where('status', 'unpaid')
            ->update(['status' => 'not_paid']);

        DB::statement("ALTER TABLE inventory_orders MODIFY status ENUM('paid', 'not_paid') NOT NULL DEFAULT 'not_paid'");
    }

    public function down(): void
    {
        if (DB::getDriverName() !== 'mysql') {
            return;
        }

        DB::table('inventory_orders')
            ->where('status', 'not_paid')
            ->update(['status' => 'unpaid']);

        DB::statement("ALTER TABLE inventory_orders MODIFY status ENUM('paid', 'unpaid') NOT NULL DEFAULT 'unpaid'");
    }
};
