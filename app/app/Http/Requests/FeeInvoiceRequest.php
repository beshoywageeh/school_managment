<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeeInvoiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'list_fees' => ['required', 'array', 'min:1'],
            'list_fees.*.student_id' => ['required', 'integer', 'exists:students,id'],
            'list_fees.*.fee' => ['required', 'integer', 'exists:school_fees,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'list_fees.required' => trans('validation.required', ['attribute' => trans('fee_invoices.fees')]),
            'list_fees.array' => trans('validation.array', ['attribute' => trans('fee_invoices.fees')]),
            'list_fees.min' => trans('validation.min.array', ['attribute' => trans('fee_invoices.fees'), 'min' => 1]),
            'list_fees.*.student_id.required' => trans('validation.required', ['attribute' => trans('fee_invoices.student')]),
            'list_fees.*.student_id.exists' => trans('validation.exists', ['attribute' => trans('fee_invoices.student')]),
            'list_fees.*.fee.required' => trans('validation.required', ['attribute' => trans('fee_invoices.fee')]),
            'list_fees.*.fee.exists' => trans('validation.exists', ['attribute' => trans('fee_invoices.fee')]),
        ];
    }
}
