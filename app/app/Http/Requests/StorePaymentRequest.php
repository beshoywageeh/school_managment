<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('payment_parts-create');
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'parts' => ['required', 'array', 'min:1'],
            'parts.*.fee_id' => ['required', 'integer', 'exists:school_fees,id'],
            'parts.*.pay_at' => ['required', 'date'],
            'parts.*.amount' => ['required', 'numeric', 'min:0.01'],
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => trans('validation.required', ['attribute' => trans('general.student')]),
            'student_id.exists' => trans('validation.exists', ['attribute' => trans('general.student')]),
            'parts.required' => trans('validation.required', ['attribute' => trans('general.parts')]),
            'parts.array' => trans('validation.array', ['attribute' => trans('general.parts')]),
            'parts.min' => trans('validation.min.array', ['attribute' => trans('general.parts'), 'min' => 1]),
            'parts.*.fee_id.required' => trans('validation.required', ['attribute' => trans('general.fee')]),
            'parts.*.fee_id.exists' => trans('validation.exists', ['attribute' => trans('general.fee')]),
            'parts.*.pay_at.required' => trans('validation.required', ['attribute' => trans('general.date')]),
            'parts.*.pay_at.date' => trans('validation.date', ['attribute' => trans('general.date')]),
            'parts.*.amount.required' => trans('validation.required', ['attribute' => trans('general.amount')]),
            'parts.*.amount.numeric' => trans('validation.numeric', ['attribute' => trans('general.amount')]),
            'parts.*.amount.min' => trans('validation.min.numeric', ['attribute' => trans('general.amount'), 'min' => 0.01]),
        ];
    }
}
