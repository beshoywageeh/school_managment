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
        Schema::create('clothes_orders', function (Blueprint $table) {
            $table->id();
            $table->string('auto_number');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->date('date');
            $table->smallInteger('type');
            $table->string('manual_number')->nullable();
            $table->date('manual_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes_orders');
    }
};
