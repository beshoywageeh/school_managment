<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("ALTER TABLE inventory_orders MODIFY COLUMN type ENUM('inventory', 'sales', 'purchases', 'gard') NOT NULL DEFAULT 'purchases'");

        Schema::table('inventory_orders', function ($table) {
            $table->dropColumn('gard_items');
        });
    }

    public function down(): void
    {
        Schema::table('inventory_orders', function ($table) {
            $table->json('gard_items')->nullable();
        });

        DB::statement("ALTER TABLE inventory_orders MODIFY COLUMN type ENUM('inventory', 'sales', 'purchases') NOT NULL DEFAULT 'purchases'");
    }
};
