<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStatusReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Route-level middleware (can:reports-view / can:reports-export) already gates this action.
        return true;
    }

    public function rules(): array
    {
        return [
            'payment_status' => ['required', 'string', 'in:all,unpaid,paid'],
            'grade' => ['nullable', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'payment_status.required' => trans('validation.required', ['attribute' => trans('report.payment_status')]),
            'payment_status.in' => trans('validation.in', ['attribute' => trans('report.payment_status')]),
            'grade.integer' => trans('validation.integer', ['attribute' => trans('general.grade')]),
        ];
    }
}
