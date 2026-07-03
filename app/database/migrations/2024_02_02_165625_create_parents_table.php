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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            // Fatherinformation
            $table->string('father_name');
            $table->string('father_national_id')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_job')->nullable();
            $table->date('father_birth_date')->nullable();
            $table->string('father_learning')->nullable();
            $table->string('father_birth_location')->nullable();

            // Mother information
            $table->string('mother_name')->nullable();
            $table->string('mother_national_id')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->date('mother_birth_date')->nullable();
            $table->string('slug')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('school_id')->unsigned();
            $table->tinyInteger('mother_status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
