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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name')->index();
            $table->date('birth_date');
            $table->string('address');
            $table->date('join_date');
            $table->string('national_id')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('student_status')->nullable();
            $table->string('birth_at_begin', 50)->nullable();
            $table->tinyInteger('religion');
            $table->tinyInteger('tameen')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('acadmiecyear_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('nationality_id');
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
