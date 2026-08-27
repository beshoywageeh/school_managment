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
            'amount' => ['required_if:type,fee_invoice,payment_parts', 'numeric', 'min:0.01'],
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
            'amount.required' => trans('validation.required', [
                'attribute' => trans('general.amount'),
            ]),
            'amount.numeric' => trans('validation.numeric', [
                'attribute' => trans('general.amount'),
            ]),
            'amount.min' => trans('validation.min.numeric', [
                'attribute' => trans('general.amount'),
                'min' => 0.01,
            ]),

            'date.date' => trans('validation.date', [
                'attribute' => trans('general.date'),
            ]),
        ];
    }
}
