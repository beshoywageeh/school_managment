{{-- @props(['student'])
<x-dropdown-table :buttonText="trans('general.actions')" :items="[
    [
        'can' => 'Students-info',
        'url' => route('students.show', $student),
        'icon' => 'information-circle',
        'text' => trans('general.buttons.view'),
        'type' => 'link',
        'className' => 'text-blue-600 hover:bg-blue-50',
    ],
    [
        'can' => 'Students-edit',
        'url' => route('students.edit', $student),
        'icon' => 'pencil',
        'text' => trans('general.buttons.edit'),
        'type' => 'link',
        'className' => 'text-green-600 hover:bg-green-50',
    ],
    [
        'can' => 'fee_invoice-create',
        'url' => route('fee_invoice.create', $student),
        'icon' => 'money',
        'text' => trans('general.fee_invoice'),
        'className' => 'text-purple-600 hover:bg-purple-50',
        'type' => 'link',
    ],
    [
        'can' => 'Recipt_Payment-create',
        'url' => route('receipt_payment.create', $student),
        'icon' => 'credit-card',
        'text' => trans('general.Recipt_Payment'),
        'className' => 'text-yellow-600 hover:bg-yellow-50',
        'type' => 'link',
    ],
    [
        'can' => 'payment_parts-create',
        'url' => route('payment_parts.create', $student),
        'icon' => 'credit-card',
        'text' => trans('Sidebar.payment_parts'),
        'className' => 'text-yellow-600 hover:bg-yellow-50',
        'type' => 'link',
    ],
    [
        'can' => 'Students-graduated',
        'url' => route('students.destroy', $student),
        'icon' => 'graduation-cap',
        'text' => trans('student.graduated'),
        'className' => 'text-indigo-600 hover:bg-indigo-50',
        'type' => 'link',
    ],
]" /> --}}
<div class="flex items-center gap-2">
    <a :href="`{{ route('students.edit', '') }}/${ {{ $student }} }`" class="text-sm text-gray-600">
        تعديل
    </a>
</div>
