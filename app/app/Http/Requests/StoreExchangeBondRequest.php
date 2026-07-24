<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExchangeBondRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('exchange_bonds-create');
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'amount' => ['required', 'numeric', 'min:0.01'],
            'manual' => ['required', 'string'],
            'note' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => trans('validation.required', ['attribute' => trans('general.student')]),
            'student_id.exists' => trans('validation.exists', ['attribute' => trans('general.student')]),
            'amount.required' => trans('validation.required', ['attribute' => trans('general.amount')]),
            'amount.numeric' => trans('validation.numeric', ['attribute' => trans('general.amount')]),
            'amount.min' => trans('validation.min.numeric', ['attribute' => trans('general.amount'), 'min' => 0.01]),
            'manual.required' => trans('validation.required', ['attribute' => trans('general.manual')]),
        ];
    }
}
