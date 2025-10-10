<?php

return [
    'index' => [
        'title' => 'سجل النشاطات',
        'user' => 'المستخدم',
        'description' => 'الوصف',
        'time' => 'الوقت',
        'type' => 'النوع',
        'date' => 'التاريخ',
    ],
    'parents' => [
        'added' => 'تم إضافة ولي الأمر :name',
        'updated' => 'تم تعديل ولي أمر :name',
        'deleted' => 'تم حذف ولي أمر :name',
        'added_action' => 'اضافة',
        'updated_action' => 'تعديل',
        'deleted_action' => 'حذف',
    ],
    'payment_parts' => [
        'added' => 'تم حفظ فاتورة قسط لطالب :name',
        'updated' => 'تم تعديل قسط لطالب :name',
        'deleted' => 'تم حذف قسط لطالب :name',
        'paid_partially' => 'تم حفظ قسط لطالب :name',
        'paid_fully' => 'تم حفظ قسط لطالب :name',
        'receipt_added' => 'تم إضافة إلفاتورة لطالب :name',
        'account_added' => 'تم إضافة حساب لطالب :name',
        'paid_partially_action' => 'دفع جزء',
    ],
    'book_sheets_order' => [
        'tawreed_added' => 'إضافة أمر توريد رقم :number',
        'tawreed_updated' => 'تعديل أمر توريد رقم :number',
        'sarf_added' => 'إضافة أمر صرف رقم :number',
        'sarf_updated' => 'تعديل أمر صرف رقم :number',
        'gard_added' => 'إضافة للمخزن :stock_name في الجرد رقم :inventory_number',
        'gard_updated' => 'تعديل للمخزن :stock_name في الجرد رقم :inventory_number',
        'price_updated' => 'تعديل سعر صرف كتاب :book_name من قيمة :old_price الى قيمة :new_price',
        'status_updated' => 'تعديل حالة صرف رقم :id',
    ],
    'backup' => [
        'created' => 'نسخه إحتياطية بتاريخ :date',
        'deleted' => 'تم حذف نسخه إحتياطية بتاريخ :date',
        'created_action' => 'نسخه إحتياطية',
        'deleted_action' => 'حذف نسخه إحتياطية',
    ],
    'book_sheet' => [
        'added' => 'تم إضافة كتاب :name',
        'updated' => 'تم تعديل كتاب :name',
        'deleted' => 'تم حذف كتاب :name',
    ],
    'school_fee' => [
        'added' => 'مصروفات دراسية بقيمة :amount',
        'invoice_added' => 'تم اضافة فاتورة جديدة للطالب :name بقيمة :amount',
        'updated' => 'تم تعديل مصروفات دراسية بقيمة :amount',
        'deleted' => 'تم حذف مصروف دراسي بقيمة :amount',
    ],
    'admin_era' => [
        'status_changed_action' => 'تغير الحالة',
        'status_changed_description' => 'قام مسؤول النظام بتغير الحالة',
    ],
    'clothes' => [
        'added' => 'تم إضافة العنصر :name',
        'updated' => 'تم تعديل العنصر :name',
        'deleted' => 'تم حذف منتج :name',
    ],
    'out_order' => [
        'disbursement_added' => 'صرف من :stock_name كمية : :quantity',
        'disbursement_updated' => 'تعديل أمر صرف رقم :number',
        'disbursement_deleted' => 'حذف أمر صرف رقم :number',
        'disbursement_action' => 'صرف',
    ],
    'receipt_payment' => [
        'added' => 'تم اضافة دفعة جديدة للطالب :name بتاريخ :date',
        'updated' => 'تم تعديل دفعة جديدة للطالب :name بتاريخ :date',
    ],
    'laboratory' => [
        'added' => 'تم إضافة معمل :name بالمكان :location',
        'updated' => 'تم تعديل المعمل :name بالمكان :location',
    ],
    'promotion' => [
        'promoted' => 'تم ترقية طالب :name',
        'canceled' => 'تم إلفاء ترقية طالب :name',
    ],
    'gard' => [
        'order_added' => 'إضافة أمر جرد رقم :number',
        'stock_added' => 'إضافة للمخزن :stock_name في الجرد رقم :inventory_number',
        'stock_updated' => 'تعديل للمخزن :stock_name في الجرد رقم :inventory_number',
        'order_deleted' => 'حذف أمر جرد رقم :number',
    ],
    'user' => [
        'added' => 'تم إضافة الموظف :name',
        'updated' => 'تم تعديل الموظف :name',
        'deleted' => 'تم حذف الموظف :name',
        'restored' => 'تم استعادة الموظف :name',
        'restored_action' => 'استعادة',
    ],
    'fee_invoice' => [
        'added' => 'تم اضافة فاتورة مدفوع لطالب :name',
        'updated' => 'تم تعديل فاتورة مدفوع لطالب :name',
        'deleted' => 'تم حذف فاتورة مدفوع لطالب :name',
    ],
    'job' => [
        'added' => 'تم اضافة وظيفة جديدة :name',
        'updated' => 'تم تعديل وظيفة :name',
        'deleted' => 'تم حذف وظيفة :name',
    ],
];
