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
        Schema::table('users', function (Blueprint $table) {
            $table->string('sepicality')->nullable();
            $table->date('national_id_expire_date')->nullable();
            $table->date('contract_start_date')->nullable();
            $table->string('notes')->nullable();
            $table->string('ministry_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['sepicality', 'national_id_expire_date', 'contract_start_date', 'notes', 'ministry_code']);
        });
    }
};
