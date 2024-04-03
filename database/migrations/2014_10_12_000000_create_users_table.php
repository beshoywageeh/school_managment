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
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name')->nullable();
            $table->string('forth_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_hiring')->nullable();
            $table->string('learning')->nullable();
            $table->string('reiligon')->nullable();
            $table->boolean('postion')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->unique();
            $table->boolean('isAdmin')->default('0');
            $table->boolean('login_allow')->default('0');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
