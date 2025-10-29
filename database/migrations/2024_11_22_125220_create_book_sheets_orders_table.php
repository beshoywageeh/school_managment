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
        Schema::create('book_sheets_orders', function (Blueprint $table) {
            $table->id();
            $table->string('auto_number');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('date');
            $table->smallInteger('type');
            $table->boolean('isset_order')->default('1');
            $table->string('manual_number')->nullable();
            $table->date('manual_date')->nullable();
            $table->boolean('is_payed')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_sheets_orders');
    }
};
