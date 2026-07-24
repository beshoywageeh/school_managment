<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('payment_parts-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:payment_parts,id'],
            'amount' => ['required', 'numeric', 'min:0.01'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('general.payment_part')]),
            'amount.required' => trans('validation.required', ['attribute' => trans('general.amount')]),
            'amount.numeric' => trans('validation.numeric', ['attribute' => trans('general.amount')]),
            'amount.min' => trans('validation.min.numeric', ['attribute' => trans('general.amount'), 'min' => 0.01]),
        ];
    }
}
