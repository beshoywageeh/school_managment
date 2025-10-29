<x-dropdown-table :buttonText="trans('general.actions')" :items="[
    [
        'type'=>'link',
        'url' => route('Students.destroy', $id),
        'text' => trans('student.graduated'),
        'icon' => '',
        'can'=>'Students-graduated'
    ],
    [
        'type'=>'link',
        'url' => route('Students.show', $id),
        'text' => trans('general.info'),
        'icon' => 'ti-info-alt',
        'can'=>'Students-info'
    ],
    [
        'type'=>'link',
        'url' => route('Students.edit', $id),
        'text' => trans('general.edit'),
        'icon' => 'ti-pencil',
        'can' => 'Students-edit',
    ],
    [
        'type'=>'link',
        'url' => route('fee_invoice.create', $id),
        'text' => trans('general.fee_invoice'),
        'icon' => 'ti-money',
        'can'=>'fee_invoice-create'
    ],[
        'type'=>'link',
        'url' => route('Recipt_Payment.create', $id),
        'text' => trans('general.Recipt_Payment'),
        'icon' => 'fa fa-money',
        'can'=>'Recipt_Payment-create'
    ],
    [
        'type'=>'link',
        'url' => route('except_fee.create', $id),
        'text' => trans('general.except_fee'),
        'icon' => 'fa fa-money',
        'can'=>'except_fee-create'
    ],[
        'type'=>'link',
        'url' => route('payment_parts.create', $id),
        'text' => trans('PaymentParts.title'),
        'icon' => 'fa fa-money',
        'can'=>'payment_parts-create'
    ],
    [
        'type'=>'link',
        'url' => route('exchange_bonds.create', $id),
        'text' => trans('exchange_bonds.title'),
        'icon' => 'fa fa-money',
        'can'=>'exchange_bonds-create'
    ],
]" />
