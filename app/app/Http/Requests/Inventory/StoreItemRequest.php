<?php

namespace App\Http\Requests\Inventory;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'type' => 'required|in:stock,clothe,book',
            'category' => 'nullable|in:book,sheet',
            'opening_qty' => 'nullable|numeric|min:0',
            'opening_date' => 'nullable|date',
            'sell_price' => 'nullable|numeric|min:0',
            'cost_price' => 'nullable|numeric|min:0',
            'grade_id' => 'nullable|exists:grades,id',
            'classroom_id' => 'nullable|exists:class_rooms,id',
            'sales_price_set' => 'nullable|numeric|min:0',
        ];
    }
}
