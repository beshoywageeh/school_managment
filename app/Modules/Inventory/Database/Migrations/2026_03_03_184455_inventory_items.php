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
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->Enum('type', ['stock', 'clothe', 'book']);
            $table->Enum('unit', ['piece', 'set', 'sheet']);
            $table->Integer('current_stock');
            $table->Integer('min_stock');
            $table->decimal('cost_price', 8, 2);
            $table->decimal('sell_price', 8, 2);
            $table->foreignId('school_id');
            $table->Enum('status', ['active', 'inactive']);
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
        Schema::dropIfExists('inventory_items');
    }
};
