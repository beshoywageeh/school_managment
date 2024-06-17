<x-dropdown-table :buttonText="trans('general.actions')" :items="[
    [
        'url' => route('Students.destroy', $row->id),
        'text' => trans('general.delete'),
        'icon' => 'ti-trash',
        'onclick' => 'confirmation(event)',
        'can'=>'Students-delete'
    ],
    [
        'url' => route('Students.show', $row->id),
        'text' => trans('general.info'),
        'icon' => 'ti-info-alt',
        'target' => '_blank',
        'can'=>'Students-info'
    ],
    [
        'url' => route('Students.edit', $row->id),
        'text' => trans('general.edit'),
        'icon' => 'ti-pencil',
        'can' => 'Students-edit',
    ],
    [
        'url' => route('fee_invoice.create', $row->id),
        'text' => trans('general.fee_invoice'),
        'icon' => 'ti-money',
        'can'=>'fee_invoice-create'
    ],[
        'url' => route('Recipt_Payment.create', $row->id),
        'text' => trans('general.Recipt_Payment'),
        'icon' => 'fa fa-money',
        'can'=>'Recipt_Payment-create'
    ],
    [
        'url' => route('except_fee.create', $row->id),
        'text' => trans('general.except_fee'),
        'icon' => 'fa fa-money',
        'can'=>'except_fee-create'
    ],[
        'url' => route('payment_parts.create', $row->id),
        'text' => trans('PaymentParts.title'),
        'icon' => 'fa fa-money',
        'can'=>'payment_parts-create'
    ],
]" />
