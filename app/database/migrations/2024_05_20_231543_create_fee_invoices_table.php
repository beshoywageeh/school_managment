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
        Schema::create('fee_invoices', function (Blueprint $table) {
            $table->id();
            $table->date('invoice_date')->index();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('academic_year_id');
            $table->unsignedBigInteger('school_fee_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid');
            $table->index(['academic_year_id', 'status']);
            $table->index(['grade_id', 'status', 'invoice_date']);
            $table->index([
                'academic_year_id',
                'grade_id',
                'classroom_id',
                'status',
            ]);
            $table->index(['student_id', 'status']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fee_invoices');
    }
};
