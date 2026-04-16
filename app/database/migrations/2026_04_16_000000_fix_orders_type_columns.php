<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('book_sheets_orders', function (Blueprint $table) {
            $table->string('type')->change();
            $table->boolean('is_payed')->default(false)->after('status');
        });

        Schema::table('clothes_orders', function (Blueprint $table) {
            $table->string('type')->change();
        });
    }

    public function down(): void
    {
        Schema::table('book_sheets_orders', function (Blueprint $table) {
            $table->dropColumn('is_payed');
            $table->enum('type', ['inventory', 'sales', 'gard'])->change();
        });

        Schema::table('clothes_orders', function (Blueprint $table) {
            $table->enum('type', ['inventory', 'sales', 'gard'])->change();
        });
    }
};
