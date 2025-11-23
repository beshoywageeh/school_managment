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
        Schema::create('student_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('recipt__payments_id')->nullable();
            $table->unsignedBigInteger('fee_invoices_id')->nullable();
            $table->unsignedBigInteger('excpetion_id')->nullable();
            $table->unsignedBigInteger('exchange_bond_id')->nullable();
            $table->unsignedBigInteger('academic_year_id');
            $table->date('date');
            $table->enum('type', ['invoice', 'payment', 'exciption', 'exchange']);
            $table->decimal('debit', 10, 2);
            $table->decimal('credit', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_accounts');
    }
};
