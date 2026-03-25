<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id');
            $table->enum('type', ['in', 'out', 'adjust']);
            $table->integer('quantity');
            $table->integer('balance');
            $table->enum('reference_type', ['order', 'invoice', 'adjustment', 'initial']);
            $table->foreignId('reference_id');
            $table->foreignId('school_id');
            $table->text('notes')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_transactions');
    }
};
