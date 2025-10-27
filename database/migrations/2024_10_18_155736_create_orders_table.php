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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('auto_number');
            $table->unsignedBigInteger('laboratory_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->enum('type');   // inventory - out - gard
            $table->enum('isset'); // set - notset
            $table->integer('manual_number')->nullable();
            $table->date('manual_date')->nullable();
            $table->enum->('payed');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->date('date');
            $table->integer('orderable_id');
            $table->string('orderable_type');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
