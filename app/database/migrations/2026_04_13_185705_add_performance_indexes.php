<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->index(['school_id', 'grade_id', 'classroom_id']);
            $table->index(['school_id', 'acadmiecyear_id']);
            $table->index(['parent_id']);
            $table->index(['national_id']);
        });

        Schema::table('fee_invoices', function (Blueprint $table) {
            $table->index(['student_id', 'status']);
            $table->index(['school_id', 'academic_year_id']);
            $table->index(['grade_id', 'classroom_id']);
        });

        Schema::table('class_rooms', function (Blueprint $table) {
            $table->index(['grade_id', 'school_id']);
        });

        Schema::table('school__fees', function (Blueprint $table) {
            $table->index(['school_id', 'grade_id', 'classroom_id', 'academic_year_id']);
        });

        Schema::table('recipt__payments', function (Blueprint $table) {
            $table->index(['student_id', 'date']);
            $table->index(['school_id', 'academic_year_id']);
        });

        Schema::table('student_accounts', function (Blueprint $table) {
            $table->index(['student_id', 'type']);
            $table->index(['school_id', 'academic_year_id']);
        });

        Schema::table('promotions', function (Blueprint $table) {
            $table->index(['student_id', 'acc_year_from', 'acc_year_to']);
        });

        Schema::table('teacher_grade', function (Blueprint $table) {
            $table->index(['teacher_id', 'grade_id']);
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropIndex(['school_id', 'grade_id', 'classroom_id']);
            $table->dropIndex(['school_id', 'acadmiecyear_id']);
            $table->dropIndex(['parent_id']);
            $table->dropIndex(['national_id']);
        });

        Schema::table('fee_invoices', function (Blueprint $table) {
            $table->dropIndex(['student_id', 'status']);
            $table->dropIndex(['school_id', 'academic_year_id']);
            $table->dropIndex(['grade_id', 'classroom_id']);
        });

        Schema::table('class_rooms', function (Blueprint $table) {
            $table->dropIndex(['grade_id', 'school_id']);
        });

        Schema::table('school__fees', function (Blueprint $table) {
            $table->dropIndex(['school_id', 'grade_id', 'classroom_id', 'academic_year_id']);
        });

        Schema::table('recipt__payments', function (Blueprint $table) {
            $table->dropIndex(['student_id', 'date']);
            $table->dropIndex(['school_id', 'academic_year_id']);
        });

        Schema::table('student_accounts', function (Blueprint $table) {
            $table->dropIndex(['student_id', 'type']);
            $table->dropIndex(['school_id', 'academic_year_id']);
        });

        Schema::table('promotions', function (Blueprint $table) {
            $table->dropIndex(['student_id', 'acc_year_from', 'acc_year_to']);
        });

        Schema::table('teacher_grade', function (Blueprint $table) {
            $table->dropIndex(['teacher_id', 'grade_id']);
        });
    }
};
