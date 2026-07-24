<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExchangeBondRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('exchange_bonds-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:exchange_bonds,id'],
            'amount' => ['required', 'numeric', 'min:0.01'],
            'manual' => ['required', 'string'],
            'note' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('general.exchange_bond')]),
            'amount.required' => trans('validation.required', ['attribute' => trans('general.amount')]),
            'amount.numeric' => trans('validation.numeric', ['attribute' => trans('general.amount')]),
            'amount.min' => trans('validation.min.numeric', ['attribute' => trans('general.amount'), 'min' => 0.01]),
            'manual.required' => trans('validation.required', ['attribute' => trans('general.manual')]),
        ];
    }
}
