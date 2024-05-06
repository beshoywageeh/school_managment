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
            $table->string('name');
            $table->date('birth_date');
            $table->string('address');
            $table->date('join_date');
            $table->string('national_id');
            $table->enum('gender', ['male', 'female']);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
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