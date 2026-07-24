<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_orders', function (Blueprint $table) {
            $table->id();
            $table->string('auto_number')->index();
            $table->enum('type', ['inventory', 'sales', 'purchases']);
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid');
            $table->json('gard_items')->nullable();
            $table
                ->foreignId('student_id')
                ->nullable()
                ->constrained('students')
                ->nullOnDelete();
            $table->string('manual_number')->nullable();
            $table->date('manual_date')->nullable();
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->text('notes')->nullable();
            $table->date('date');
            $table
                ->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->foreignId('school_id')->constrained('schools');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_orders');
    }
};
