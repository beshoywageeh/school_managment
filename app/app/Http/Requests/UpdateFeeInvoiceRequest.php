<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeeInvoiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('fee_invoice-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:fee_invoices,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('fee_invoices.invoice')]),
        ];
    }
}
