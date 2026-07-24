<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExceptionFeeUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('except_fee-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:excption_fees,id'],
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'amount' => ['required', 'numeric', 'min:0.01'],
            'acadmic_id' => ['required', 'integer', 'exists:academic_years,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('general.fee')]),
            'student_id.required' => trans('validation.required', ['attribute' => trans('general.student')]),
            'student_id.integer' => trans('validation.integer', ['attribute' => trans('general.student')]),
            'student_id.exists' => trans('validation.exists', ['attribute' => trans('general.student')]),
            'amount.required' => trans('validation.required', ['attribute' => trans('general.amount')]),
            'amount.numeric' => trans('validation.numeric', ['attribute' => trans('general.amount')]),
            'amount.min' => trans('validation.min.numeric', ['attribute' => trans('general.amount'), 'min' => 0.01]),
            'acadmic_id.required' => trans('validation.required', ['attribute' => trans('academic_year.academic_year')]),
            'acadmic_id.integer' => trans('validation.integer', ['attribute' => trans('academic_year.academic_year')]),
            'acadmic_id.exists' => trans('validation.exists', ['attribute' => trans('academic_year.academic_year')]),
        ];
    }
}
