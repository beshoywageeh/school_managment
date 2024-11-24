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
        Schema::create('books_sheets_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('books_sheets_id');
            $table->unsignedBigInteger('order_id');
            $table->string('quantity_in')->nullable();
            $table->string('quantity_out')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_sheets_stocks');
    }
};