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
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('Cascade')->onUpdate('Cascade');
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
        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('Cascade')->onUpdate('Cascade');
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
        });
        Schema::table('acadmice_years', function (Blueprint $table) {
            $table->dropForeign('updated_by');
            $table->dropForeign('created_by');
        });
        Schema::table('teacher_grade', function (Blueprint $table) {
            $table->dropForeign('teacher_id');
            $table->dropForeign('grade_id');
        });
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign('created_by');
            $table->dropForeign('updated_by');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('job_id');
        });
    }
};
