<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInventoryGardRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('stocks-inventory_edit')
            || $this->user()->can('clothes-income_order-update')
            || $this->user()->can('books_sheets-income_order-update');
    }

    public function rules(): array
    {
        return [
            'date' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array'],
            'items.*.item_id' => ['required', 'exists:inventory_items,id'],
            'items.*.actual_stock' => ['required', 'numeric', 'min:0'],
        ];
    }
}
