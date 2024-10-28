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
        Schema::create('clothes_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clothes_id');
            $table->unsignedBigInteger('order_id');
            $table->string('qty_in')->nullable();
            $table->string('qty_out')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};