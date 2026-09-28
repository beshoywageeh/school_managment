<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class FeesInvoicesReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'grade' => ['nullable', 'integer'],
            'payment_status' => ['nullable', 'string', 'in:all,unpaid,paid'],
            'from' => ['nullable', 'date'],
            'to' => ['nullable', 'date', 'after_or_equal:from'],
        ];
    }

    public function messages(): array
    {
        return [
            'payment_status.in' => trans('validation.in', ['attribute' => trans('report.payment_status')]),
            'grade.integer' => trans('validation.integer', ['attribute' => trans('general.grade')]),
            'from.date' => trans('validation.date', ['attribute' => trans('general.from')]),
            'to.date' => trans('validation.date', ['attribute' => trans('general.to')]),
            'to.after_or_equal' => trans('validation.after_or_equal', ['attribute' => trans('general.to'), 'date' => trans('general.from')]),
        ];
    }
}
