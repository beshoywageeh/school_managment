<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class ExceptionFeeReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
        ];
    }

    public function messages(): array
    {
        return [
            'start_date.required' => trans('validation.required', ['attribute' => trans('general.date')]),
            'start_date.date' => trans('validation.date', ['attribute' => trans('general.date')]),
            'end_date.required' => trans('validation.required', ['attribute' => trans('general.date')]),
            'end_date.date' => trans('validation.date', ['attribute' => trans('general.date')]),
            'end_date.after_or_equal' => trans('validation.after_or_equal', ['attribute' => trans('general.date'), 'date' => trans('general.from')]),
        ];
    }
}
