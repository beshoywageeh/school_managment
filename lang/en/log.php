<?php

return [
    'parents' => [
        'added' => 'Added parent :name',
        'updated' => 'Updated parent :name',
        'deleted' => 'Deleted parent :name',
        'added_action' => 'Add',
        'updated_action' => 'Update',
        'deleted_action' => 'Delete',
    ],
    'payment_parts' => [
        'added' => 'Added installment invoice for student :name',
        'updated' => 'Updated installment for student :name',
        'deleted' => 'Deleted installment for student :name',
        'paid_partially' => 'Partially paid installment for student :name',
        'paid_fully' => 'Fully paid installment for student :name',
        'receipt_added' => 'Added receipt for student :name',
        'account_added' => 'Added account for student :name',
        'paid_partially_action' => 'Pay Partially',
        'paid_fully_action' => 'Pay Fully',
    ],
    'book_sheets_order' => [
        'tawreed_added' => 'Added supply order number :number',
        'tawreed_updated' => 'Updated supply order number :number',
        'sarf_added' => 'Added disbursement order number :number',
        'sarf_updated' => 'Updated disbursement order number :number',
        'gard_added' => 'Added to stock :stock_name in inventory number :inventory_number',
        'gard_updated' => 'Updated stock :stock_name in inventory number :inventory_number',
        'price_updated' => 'Updated book price :book_name from :old_price to :new_price',
        'status_updated' => 'Updated disbursement status number :id',
        'deleted' => 'Deleted supply order number :number',
    ],
    'backup' => [
        'created' => 'Backup created on :date',
        'deleted' => 'Backup deleted on :date',
        'created_action' => 'Backup',
        'deleted_action' => 'Delete Backup',
    ],
    'book_sheet' => [
        'added' => 'Added book :name',
        'updated' => 'Updated book :name',
        'deleted' => 'Deleted book :name',
    ],
    'school_fee' => [
        'added' => 'Added school fee with amount: :amount',
        'invoice_added' => 'Added new invoice for student :name with amount: :amount',
        'updated' => 'Updated school fee with amount: :amount',
        'deleted' => 'Deleted school fee with amount: :amount',
    ],
    'admin_era' => [
        'status_changed_action' => 'Change Status',
        'status_changed_description' => 'System administrator changed status',
    ],
    'clothes' => [
        'added' => 'Added item :name',
        'updated' => 'Updated item :name',
    ],
    'out_order' => [
        'disbursement_added' => 'Disbursement from :stock_name quantity: :quantity',
        'disbursement_updated' => 'Updated disbursement order number :number',
        'disbursement_deleted' => 'Deleted disbursement order number :number',
    ],
    'promotion' => [
        'promoted' => 'Promoted student :name',
        'canceled' => 'Canceled promotion for student :name',
        'promoted_action' => 'Promote Student',
    ],
    'fee_invoice' => [
        'added' => 'Added paid invoice for student :name',
        'updated' => 'Updated paid invoice for student :name',
        'deleted' => 'Deleted paid invoice for student :name',
    ],


    'laboratory' => [
        'added' => 'Added laboratory :name at location :location',
        'updated' => 'Updated laboratory :name at location :location',
    ],
    'gard' => [
        'order_added' => 'Added inventory order number :number',
        'stock_added' => 'Added to stock :stock_name in inventory number :inventory_number',
        'stock_updated' => 'Updated stock :stock_name in inventory number :inventory_number',
        'order_deleted' => 'Deleted inventory order number :number',
    ],
    'user' => [
        'added' => 'Added employee :name',
        'updated' => 'Updated employee :name',
        'deleted' => 'Deleted employee :name',
        'restored' => 'Restored employee :name',
    ],
    'job' => [
        'added' => 'Added new job :name',
        'updated' => 'Updated job :name',
        'deleted' => 'Deleted job :name',
    ],
];