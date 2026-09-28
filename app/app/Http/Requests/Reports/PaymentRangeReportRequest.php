<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Shared validation for the payments and payment-parts reports.
 * The optional payment_status filter is consumed by payment_parts only.
 */
class PaymentRangeReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'from' => ['required', 'date'],
            'to' => ['required', 'date', 'after_or_equal:from'],
            'payment_status' => ['nullable', 'string', 'in:all,unpaid,paid'],
        ];
    }

    public function messages(): array
    {
        return [
            'from.required' => trans('validation.required', ['attribute' => trans('general.from')]),
            'from.date' => trans('validation.date', ['attribute' => trans('general.from')]),
            'to.required' => trans('validation.required', ['attribute' => trans('general.to')]),
            'to.date' => trans('validation.date', ['attribute' => trans('general.to')]),
            'to.after_or_equal' => trans('validation.after_or_equal', ['attribute' => trans('general.to'), 'date' => trans('general.from')]),
            'payment_status.in' => trans('validation.in', ['attribute' => trans('report.payment_status')]),
        ];
    }
}
