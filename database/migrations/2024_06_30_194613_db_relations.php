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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('work_jobs')->onDelete('Cascade')->onUpdate('Cascade');
        });
        /* Grades Relation */
        Schema::table('grades', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
        });
        /* Parents Relation */
        Schema::table('parents', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade')->nullable();
        });
        /* Class Rooms Relations */
        Schema::table('class_rooms', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
        });
        /* students Relation */
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('classroom_id')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('Cascade')->onUpdate('Cascade');
        });
        /* school fees */
        Schema::table('school__fees', function (Blueprint $table) {
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('classroom_id')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('academic_year_id')->references('id')->on('acadmice_years')->onDelete('Cascade')->onUpdate('Cascade');
        });
        /* acadmice_years */
        Schema::table('acadmice_years', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');

        });
        Schema::table('teacher_grade', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
        });
        Schema::table('work_jobs', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('main_job_id')->references('id')->on('work_jobs')->onDelete('Cascade')->onUpdate('Cascade');
        });
        Schema::table('promotions', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('from_grade')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('to_grade')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('from_class')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('to_class')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
        });
        Schema::table('fee_invoices', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('classroom_id')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('academic_year_id')->references('id')->on('acadmice_years')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('school_fee_id')->references('id')->on('school__fees')->onDelete('Cascade')->onUpdate('Cascade');
        });
        Schema::table('student_accounts', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('classroom_id')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('recipt__payments_id')->references('id')->on('recipt__payments')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('excpetion_id')->references('id')->on('excption_fees')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('fee_invoices_id')->references('id')->on('fee_invoices')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('academic_year_id')->references('id')->on('acadmice_years')->onDelete('Cascade')->onUpdate('Cascade');
        });
        Schema::table('recipt__payments', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('academic_year_id')->references('id')->on('acadmice_years')->onDelete('Cascade')->onUpdate('Cascade');
        });
        Schema::table('excption_fees', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('class_id')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('fee_id')->references('id')->on('fee_invoices')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('academic_year_id')->references('id')->on('acadmice_years')->onDelete('Cascade')->onUpdate('Cascade');
        });
        Schema::table('payment_parts', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('class_id')->references('id')->on('class_rooms')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('academic_year_id')->references('id')->on('fee_invoices')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('school_fees_id')->references('id')->on('school__fees')->onDelete('Cascade')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grades', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::table('class_rooms', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('grade_id');
        });
        Schema::table('parents', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::table('school__fees', function (Blueprint $table) {
            $table->dropForeign('grade_id');
            $table->dropForeign('classroom_id');
            $table->dropForeign('user_id');
            $table->dropForeign('academic_year_id');
        });
        Schema::table('acadmice_years', function (Blueprint $table) {
            $table->dropForeign('updated_by');
            $table->dropForeign('created_by');
        });
        Schema::table('teacher_grade', function (Blueprint $table) {
            $table->dropForeign('teacher_id');
            $table->dropForeign('grade_id');
        });
        Schema::table('work_jobs', function (Blueprint $table) {
            $table->dropForeign('created_by');
            $table->dropForeign('updated_by');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('job_id');
        });
        Schema::table('promotions', function (Blueprint $table) {
            $table->dropForeign('student_id');
            $table->dropForeign('from_grade');
            $table->dropForeign('to_grade');
            $table->dropForeign('from_class');
            $table->dropForeign('to_class');
        });
        Schema::table('fee_invoices', function (Blueprint $table) {
            $table->dropForeign('student_id');
            $table->dropForeign('grade_id');
            $table->dropForeign('classroom_id');
            $table->dropForeign('academic_year_id');
            $table->dropForeign('school_fee_id');
        });
        Schema::table('student_accounts', function (Blueprint $table) {
            $table->dropForeign('student_id');
            $table->dropForeign('grade_id');
            $table->dropForeign('classroom_id');
            $table->dropForeign('recipt__payments_id');
            $table->dropForeign('fee_invoices_id');
            $table->dropForeign('excpetion_id');
            $table->dropForeign('academic_year_id');

        });
        Schema::table('recipt__payments', function (Blueprint $table) {
            $table->dropForeign('student_id');
            $table->dropForeign('academic_year_id');
        });
        Schema::table('excption_fees', function (Blueprint $table) {
            $table->dropForeign('student_id');
            $table->dropForeign('class_id');
            $table->dropForeign('fee_id');
            $table->dropForeign('grade_id');
        });
        Schema::table('payment_parts', function (Blueprint $table) {
            $table->dropForeign('student_id');
            $table->dropForeign('class_id');
            $table->dropForeign('grade_id');
            $table->dropForeign('academic_year_id');
            $table->dropForeign('school_fees_id');
        });
    }
};
