<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('inventory_orders', function (Blueprint $table) {
            $table->dropIndex(['auto_number']);
            $table->unique(['school_id', 'type', 'auto_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventory_orders', function (Blueprint $table) {
            $table->dropUnique(['school_id', 'type', 'auto_number']);
            $table->index('auto_number');
        });
    }
};
