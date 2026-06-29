<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit')->default('piece');
            $table->enum('type', ['stock', 'clothe', 'book']);
            $table
                ->enum('category', ['book', 'sheet'])
                ->nullable()
                ->index();
            $table->decimal('opening_qty', 10, 2)->nullable();
            $table->date('opening_date')->nullable();
            $table->decimal('current_stock', 10, 2)->default(0);
            $table->decimal('min_stock', 10, 2)->default(0);
            $table->decimal('max_stock', 10, 2)->default(0);
            $table->decimal('sell_price', 10, 2)->default(0);
            $table->decimal('cost_price', 10, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->decimal('sales_price_set', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table
                ->foreignId('grade_id')
                ->nullable()
                ->constrained('grades')
                ->nullOnDelete();
            $table
                ->foreignId('classroom_id')
                ->nullable()
                ->constrained('class_rooms')
                ->nullOnDelete();
            $table->foreignId('school_id')->constrained('schools');
            $table
                ->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_items');
    }
};
