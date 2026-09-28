<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class StockItemReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'stock' => ['required', 'integer'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'stock.required' => trans('validation.required', ['attribute' => trans('report.stock')]),
            'stock.integer' => trans('validation.integer', ['attribute' => trans('report.stock')]),
        ];
    }
}
