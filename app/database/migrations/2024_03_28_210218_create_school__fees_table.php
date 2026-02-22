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
        Schema::create('school__fees', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->required();
            $table->bigInteger('grade_id')->unsigned()->nullable();
            $table->bigInteger('classroom_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('school_id')->unsigned()->nullable();
            $table->bigInteger('academic_year_id')->unsigned()->nullable();
            $table->string('description')->require();
            $table->decimal('amount', 10, 2)->require();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school__fees');
    }
};
