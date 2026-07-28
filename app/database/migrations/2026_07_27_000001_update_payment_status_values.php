<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('fee_invoices')->where('status', 'unpaid')->update(['status' => 'not_paid']);
        DB::table('payment_parts')->where('status', 'unpaid')->update(['status' => 'not_paid']);
    }

    public function down(): void
    {
        DB::table('fee_invoices')->where('status', 'not_paid')->update(['status' => 'unpaid']);
        DB::table('payment_parts')->where('status', 'not_paid')->update(['status' => 'unpaid']);
    }
};
