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
        Schema::create('recipt__payments', function (Blueprint $table) {
            $table->id();
            $table->string('manual')->index()->nullable();
            $table->date('date')->index();
            $table->unsignedBigInteger('academic_year_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('school_id');
            $table->decimal('Debit', 10, 2);
            $table->index(['school_id', 'date']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipt__payments');
    }
};
