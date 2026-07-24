<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExceptionFeeStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('except_fee-create');
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'fee_id' => ['required', 'integer', 'exists:fee_invoices,id'],
            'amount' => ['required', 'numeric', 'min:0.01'],
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => trans('validation.required', ['attribute' => trans('general.student')]),
            'student_id.integer' => trans('validation.integer', ['attribute' => trans('general.student')]),
            'student_id.exists' => trans('validation.exists', ['attribute' => trans('general.student')]),
            'fee_id.required' => trans('validation.required', ['attribute' => trans('general.fee')]),
            'fee_id.integer' => trans('validation.integer', ['attribute' => trans('general.fee')]),
            'fee_id.exists' => trans('validation.exists', ['attribute' => trans('general.fee')]),
            'amount.required' => trans('validation.required', ['attribute' => trans('general.amount')]),
            'amount.numeric' => trans('validation.numeric', ['attribute' => trans('general.amount')]),
            'amount.min' => trans('validation.min.numeric', ['attribute' => trans('general.amount'), 'min' => 0.01]),
        ];
    }
}
