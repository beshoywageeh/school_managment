<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class CreditReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'acc_year' => ['nullable', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'acc_year.integer' => trans('validation.integer', ['attribute' => trans('report.acc_year')]),
        ];
    }
}
