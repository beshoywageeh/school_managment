<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptPaymentStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('ReceiptPayment-create');
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'type' => [
                'required',
                'string',
                'in:fee_invoice,payment_parts,clothes,books',
            ],
            'date' => ['date'],
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => trans('validation.required', [
                'attribute' => trans('general.student'),
            ]),
            'student_id.integer' => trans('validation.integer', [
                'attribute' => trans('general.student'),
            ]),
            'student_id.exists' => trans('validation.exists', [
                'attribute' => trans('general.student'),
            ]),
            'type.required' => trans('validation.required', [
                'attribute' => trans('receipt.type'),
            ]),
            'type.in' => trans('validation.in', [
                'attribute' => trans('receipt.type'),
            ]),

            'date.date' => trans('validation.date', [
                'attribute' => trans('general.date'),
            ]),
        ];
    }
}
