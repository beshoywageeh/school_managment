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
        Schema::create('book_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('opening_qty', 10, 2);
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('grade_id');
            $table->decimal('sales_price', 10, 2)->default(0);
            $table->boolean('is_book')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_sheets');
    }
};
