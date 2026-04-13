<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptPaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'feeInvoice' => ['required_if:type,full', 'nullable', 'integer', 'exists:fee_invoices,id'],
            'type' => ['required', 'string', 'in:full,partial'],
            'amount' => ['required', 'numeric', 'min:0'],
            'date' => ['required', 'date'],
            'fund_account_id' => ['required', 'integer', 'exists:fund_accounts,id'],
            'notes' => ['nullable', 'string', 'max:1000'],
            'payment_parts' => ['required_if:type,partial', 'nullable', 'array'],
            'payment_parts.*.id' => ['required_with:payment_parts', 'integer', 'exists:payment_parts,id'],
            'payment_parts.*.amount' => ['required_with:payment_parts', 'numeric', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => trans('validation.required', ['attribute' => trans('receipt.student')]),
            'student_id.exists' => trans('validation.exists', ['attribute' => trans('receipt.student')]),
            'feeInvoice.required_if' => trans('validation.required_if', ['attribute' => trans('receipt.invoice')]),
            'feeInvoice.exists' => trans('validation.exists', ['attribute' => trans('receipt.invoice')]),
            'type.required' => trans('validation.required', ['attribute' => trans('receipt.type')]),
            'type.in' => trans('validation.in', ['attribute' => trans('receipt.type')]),
            'amount.required' => trans('validation.required', ['attribute' => trans('receipt.amount')]),
            'amount.numeric' => trans('validation.numeric', ['attribute' => trans('receipt.amount')]),
            'amount.min' => trans('validation.min.numeric', ['attribute' => trans('receipt.amount'), 'min' => 0]),
            'date.required' => trans('validation.required', ['attribute' => trans('receipt.date')]),
            'date.date' => trans('validation.date', ['attribute' => trans('receipt.date')]),
            'fund_account_id.required' => trans('validation.required', ['attribute' => trans('receipt.fund_account')]),
            'fund_account_id.exists' => trans('validation.exists', ['attribute' => trans('receipt.fund_account')]),
            'notes.max' => trans('validation.max.string', ['attribute' => trans('receipt.notes'), 'max' => 1000]),
            'payment_parts.required_if' => trans('validation.required_if', ['attribute' => trans('receipt.parts')]),
        ];
    }
}
