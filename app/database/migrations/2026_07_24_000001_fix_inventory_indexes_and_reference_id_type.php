<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('inventory_transactions', function (Blueprint $table) {
            $table->bigInteger('reference_id')->nullable()->change();
            $table->index('item_id');
            $table->index('type');
            $table->index(['reference_type', 'reference_id']);
        });

        Schema::table('inventory_orders', function (Blueprint $table) {
            $table->index('type');
            $table->index('status');
            $table->index(['school_id', 'type']);
            $table->index('student_id');
            $table->index('date');
        });

        Schema::table('inventory_items', function (Blueprint $table) {
            $table->index('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('inventory_transactions', function (Blueprint $table) {
            $table->integer('reference_id')->nullable()->change();
            $table->dropIndex(['item_id']);
            $table->dropIndex(['type']);
            $table->dropIndex(['reference_type', 'reference_id']);
        });

        Schema::table('inventory_orders', function (Blueprint $table) {
            $table->dropIndex(['type']);
            $table->dropIndex(['status']);
            $table->dropIndex(['school_id', 'type']);
            $table->dropIndex(['student_id']);
            $table->dropIndex(['date']);
        });

        Schema::table('inventory_items', function (Blueprint $table) {
            $table->dropIndex(['is_active']);
        });
    }
};
