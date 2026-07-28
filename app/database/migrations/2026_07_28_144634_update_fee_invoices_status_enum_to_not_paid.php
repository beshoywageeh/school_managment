<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('fee_invoices', function (Blueprint $table) {
            $table->string('status')->default('not_paid')->change();
        });

        Schema::table('payment_parts', function (Blueprint $table) {
            $table->string('status')->default('not_paid')->change();
        });
    }

    public function down(): void
    {
        Schema::table('fee_invoices', function (Blueprint $table) {
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid')->change();
        });

        Schema::table('payment_parts', function (Blueprint $table) {
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid')->change();
        });
    }
};
