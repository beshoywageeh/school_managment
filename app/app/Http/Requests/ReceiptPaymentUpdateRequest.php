<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptPaymentUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('ReceiptPayment-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer'],
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'amount' => ['required', 'numeric', 'min:0.01'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.integer' => trans('validation.integer', ['attribute' => trans('general.id')]),
            'student_id.required' => trans('validation.required', ['attribute' => trans('general.student')]),
            'student_id.integer' => trans('validation.integer', ['attribute' => trans('general.student')]),
            'student_id.exists' => trans('validation.exists', ['attribute' => trans('general.student')]),
            'amount.required' => trans('validation.required', ['attribute' => trans('general.amount')]),
            'amount.numeric' => trans('validation.numeric', ['attribute' => trans('general.amount')]),
            'amount.min' => trans('validation.min.numeric', ['attribute' => trans('general.amount')]),
        ];
    }
}
