<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $tables = ['fee_invoices', 'payment_parts', 'exchange_bonds', 'student_accounts'];

        foreach ($tables as $table) {
            if (Schema::hasColumn($table, 'payed')) {
                Schema::rename($table, 'payed', 'paid');
            }

            if (Schema::hasColumn($table, 'notpayed')) {
                Schema::rename($table, 'notpayed', 'not_paid');
            }
        }
    }

    public function down(): void
    {
        $tables = ['fee_invoices', 'payment_parts', 'exchange_bonds', 'student_accounts'];

        foreach ($tables as $table) {
            if (Schema::hasColumn($table, 'paid')) {
                Schema::rename($table, 'paid', 'payed');
            }

            if (Schema::hasColumn($table, 'not_paid')) {
                Schema::rename($table, 'not_paid', 'notpayed');
            }
        }
    }
};
