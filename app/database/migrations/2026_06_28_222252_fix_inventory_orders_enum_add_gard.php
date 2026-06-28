<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('ALTER TABLE inventory_orders DROP CONSTRAINT IF EXISTS inventory_orders_type_check');
        DB::statement("ALTER TABLE inventory_orders ADD CONSTRAINT inventory_orders_type_check CHECK (type::text = ANY (ARRAY['inventory', 'sales', 'purchases', 'gard']::text[]))");

        Schema::table('inventory_orders', function ($table) {
            $table->dropColumn('gard_items');
        });
    }

    public function down(): void
    {
        Schema::table('inventory_orders', function ($table) {
            $table->json('gard_items')->nullable();
        });

        DB::statement('ALTER TABLE inventory_orders DROP CONSTRAINT IF EXISTS inventory_orders_type_check');
        DB::statement("ALTER TABLE inventory_orders ADD CONSTRAINT inventory_orders_type_check CHECK (type::text = ANY (ARRAY['inventory', 'sales', 'purchases']::text[]))");
    }
};
