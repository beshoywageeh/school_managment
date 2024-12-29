<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['table' => 'classes', 'name' => 'classes-list'],
            ['table' => 'classes', 'name' => 'classes-create'],
            ['table' => 'classes', 'name' => 'classes-update'],
            ['table' => 'classes', 'name' => 'classes-delete'],
            ['table' => 'classes', 'name' => 'classes-addstudent'],
            ['table' => 'classes', 'name' => 'classes-tammen'],
            ['table' => 'class_rooms', 'name' => 'class_rooms-list'],
            ['table' => 'class_rooms', 'name' => 'class_rooms-create'],
            ['table' => 'class_rooms', 'name' => 'class_rooms-edit'],
            ['table' => 'class_rooms', 'name' => 'class_rooms-info'],
            ['table' => 'class_rooms', 'name' => 'class_rooms-delete'],
            ['table' => 'class_rooms', 'name' => 'class_rooms-tammen'],
            ['table' => 'grade', 'name' => 'grade-list'],
            ['table' => 'grade', 'name' => 'grade-create'],
            ['table' => 'grade', 'name' => 'grade-edit'],
            ['table' => 'grade', 'name' => 'grade-info'],
            ['table' => 'grade', 'name' => 'grade-delete'],
            ['table' => 'academic_year', 'name' => 'academic_year-list'],
            ['table' => 'academic_year', 'name' => 'academic_year-create'],
            ['table' => 'academic_year', 'name' => 'academic_year-edit'],
            ['table' => 'academic_year', 'name' => 'academic_year-info'],
            ['table' => 'academic_year', 'name' => 'academic_year-delete'],
            ['table' => 'academic_year', 'name' => 'academic_year-status'],
            ['table' => 'jobs', 'name' => 'jobs-list'],
            ['table' => 'jobs', 'name' => 'jobs-create'],
            ['table' => 'jobs', 'name' => 'jobs-edit'],
            ['table' => 'jobs', 'name' => 'jobs-info'],
            ['table' => 'jobs', 'name' => 'jobs-delete'],
            ['table' => 'employees', 'name' => 'employees-list'],
            ['table' => 'employees', 'name' => 'employees-create'],
            ['table' => 'employees', 'name' => 'employees-edit'],
            ['table' => 'employees', 'name' => 'employees-info'],
            ['table' => 'employees', 'name' => 'employees-delete'],
            ['table' => 'employees', 'name' => 'employees-import_Excel'],

            ['table' => 'parents', 'name' => 'parents-list'],
            ['table' => 'parents', 'name' => 'parents-create'],
            ['table' => 'parents', 'name' => 'parents-edit'],
            ['table' => 'parents', 'name' => 'parents-info'],
            ['table' => 'parents', 'name' => 'parents-delete'],
            ['table' => 'parents', 'name' => 'Parents-import_Excel'],
            ['table' => 'Students', 'name' => 'Students-list'],
            ['table' => 'Students', 'name' => 'Students-create'],
            ['table' => 'Students', 'name' => 'Students-edit'],
            ['table' => 'Students', 'name' => 'Students-info'],
            ['table' => 'Students', 'name' => 'Students-delete'],
            ['table' => 'Students', 'name' => 'Students-graduated'],
            ['table' => 'Students', 'name' => 'Students-restore'],
            ['table' => 'Students', 'name' => 'graduated-list'],
            ['table' => 'Students', 'name' => 'Students-Import_Excel'],
            ['table' => 'Students', 'name' => 'Students-Export_Excel'],
            ['table' => 'Students', 'name' => 'Students-pdf'],
            ['table' => 'schoolfees', 'name' => 'schoolfees-list'],
            ['table' => 'schoolfees', 'name' => 'schoolfees-create'],
            ['table' => 'schoolfees', 'name' => 'schoolfees-edit'],
            ['table' => 'schoolfees', 'name' => 'schoolfees-info'],
            ['table' => 'schoolfees', 'name' => 'schoolfees-delete'],
            ['table' => 'fee_invoice', 'name' => 'fee_invoice-list'],
            ['table' => 'fee_invoice', 'name' => 'fee_invoice-create'],
            ['table' => 'fee_invoice', 'name' => 'fee_invoice-edit'],
            ['table' => 'fee_invoice', 'name' => 'fee_invoice-info'],
            ['table' => 'fee_invoice', 'name' => 'fee_invoice-delete'],
            ['table' => 'except_fee', 'name' => 'except_fee-list'],
            ['table' => 'except_fee', 'name' => 'except_fee-create'],
            ['table' => 'except_fee', 'name' => 'except_fee-edit'],
            ['table' => 'except_fee', 'name' => 'except_fee-info'],
            ['table' => 'except_fee', 'name' => 'except_fee-delete'],
            ['table' => 'except_fee', 'name' => 'except_fee-print'],
            ['table' => 'payment_parts', 'name' => 'payment_parts-list'],
            ['table' => 'payment_parts', 'name' => 'payment_parts-create'],
            ['table' => 'payment_parts', 'name' => 'payment_parts-edit'],
            ['table' => 'payment_parts', 'name' => 'payment_parts-info'],
            ['table' => 'payment_parts', 'name' => 'payment_parts-delete'],
            ['table' => 'payment_parts', 'name' => 'payment_parts-status'],
            ['table' => 'payment_parts', 'name' => 'payment_parts-pay'],
            ['table' => 'Recipt_Payment', 'name' => 'Recipt_Payment-list'],
            ['table' => 'Recipt_Payment', 'name' => 'Recipt_Payment-create'],
            ['table' => 'Recipt_Payment', 'name' => 'Recipt_Payment-delete'],
            ['table' => 'Recipt_Payment', 'name' => 'Recipt_Payment-info'],
            ['table' => 'Recipt_Payment', 'name' => 'Recipt_Payment-edit'],
            ['table' => 'promotion', 'name' => 'promotion-list'],
            ['table' => 'promotion', 'name' => 'promotion-create'],
            ['table' => 'promotion', 'name' => 'promotion-delete'],
            ['table' => 'store', 'name' => 'stocks-index'],
            ['table' => 'store', 'name' => 'stocks-create'],
            ['table' => 'store', 'name' => 'stocks-update'],
            ['table' => 'store', 'name' => 'stocks-delete'],
            ['table' => 'order_store', 'name' => 'stocks-income_order'],
            ['table' => 'order_store', 'name' => 'stocks-outcome_order'],
            ['table' => 'order_store', 'name' => 'stocks-inventory_order-index'],
            ['table' => 'order_store', 'name' => 'stocks-inventory_order-create'],
            ['table' => 'order_store', 'name' => 'stocks-inventory_edit'],
            ['table' => 'order_store', 'name' => 'stocks-inventory_delete'],
            ['table' => 'order_store', 'name' => 'orders-index'],
            ['table' => 'order_store', 'name' => 'order-delete'],
            ['table' => 'order_store', 'name' => 'order-edit'],
            ['table' => 'order_store', 'name' => 'order_out-index'],
            ['table' => 'order_store', 'name' => 'order_out-delete'],
            ['table' => 'order_store', 'name' => 'order_out-edit'],
            ['table' => 'order_store', 'name' => 'order_out-show'],
            ['table' => 'clothes', 'name' => 'clothes-index'],
            ['table' => 'clothes', 'name' => 'clothes-create'],
            ['table' => 'clothes', 'name' => 'clothes-update'],
            ['table' => 'clothes', 'name' => 'clothes-delete'],
            ['table' => 'clothes-order', 'name' => 'clothes-income_order'],
            ['table' => 'clothes-order', 'name' => 'clothes-income_order-create'],
            ['table' => 'clothes-order', 'name' => 'clothes-income_order-update'],
            ['table' => 'clothes-order', 'name' => 'clothes-income_order_delete'],
            ['table' => 'clothes-order', 'name' => 'clothes-outcome_order'],
            ['table' => 'clothes-order', 'name' => 'clothes-outcome_order-create'],
            ['table' => 'clothes-order', 'name' => 'clothes-outcome_order-update'],
            ['table' => 'clothes-order', 'name' => 'clothes-outcome_order-delete'],
            ['table' => 'clothes-order', 'name' => 'clothes-inventory_order'],
            ['table' => 'clothes-order', 'name' => 'clothes-inventory_order-create'],
            ['table' => 'clothes-order', 'name' => 'clothes-inventory_order-update'],
            ['table' => 'clothes-order', 'name' => 'clothes-inventory_order-delete'],
            ['table' => 'books_sheets', 'name' => 'books_sheets-index'],
            ['table' => 'books_sheets', 'name' => 'books_sheets-create'],
            ['table' => 'books_sheets', 'name' => 'books_sheets-update'],
            ['table' => 'books_sheets', 'name' => 'books_sheets-delete'],
            ['table' => 'books_sheets', 'name' => 'books_sheets-order'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-income_order'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-income_order-create'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-income_order-update'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-order_show'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-income_order_delete'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-outcome_order'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-outcome_order-create'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-outcome_order-update'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-outcome_order-delete'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-outcome_order-pay'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-inventory_order'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-inventory_order-create'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-inventory_order-update'],
            ['table' => 'books_sheets-order', 'name' => 'books_sheets-inventory_order-delete'],
            ['table' => 'labortories', 'name' => 'labortories-index'],
            ['table' => 'labortories', 'name' => 'labortories-create'],
            ['table' => 'labortories', 'name' => 'labortories-update'],
            ['table' => 'labortories', 'name' => 'labortories-delete'],
            ['table' => 'labortories', 'name' => 'labortories-show'],
            ['table' => 'backup', 'name' => 'backup-list'],
            ['table' => 'backup', 'name' => 'backup-create'],
            ['table' => 'backup', 'name' => 'backup-delete'],
            ['table' => 'backup', 'name' => 'backup-download'],
            ['table' => 'role', 'name' => 'role-list'],
            ['table' => 'role', 'name' => 'role-create'],
            ['table' => 'role', 'name' => 'role-edit'],
            ['table' => 'role', 'name' => 'role-delete'],
            ['table' => 'role', 'name' => 'role-info'],
            ['table' => 'settings', 'name' => 'settings-info'],

        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'table' => $permission['table'],
                'name' => $permission['name'],
            ]);
        }

    }
}
