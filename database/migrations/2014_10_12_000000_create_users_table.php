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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('phone')->unique()->nullable();
            $table->string('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('grade_year')->nullable();
            $table->date('date_of_hiring')->nullable();
            $table->string('learning')->nullable();
            $table->tinyInteger('reiligon')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->unique()->nullable();
            $table->boolean('isAdmin')->default('0');
            $table->boolean('login_allow')->default('0');
            $table->string('password')->nullable();
            $table->boolean('insurance')->default('0');
            $table->string('insurance_number')->nullable();
            $table->date('insurance_date')->nullable();
            $table->string('national_id')->nullable();
            $table->boolean('resign')->default('0');
            $table->string('resign_reason')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
