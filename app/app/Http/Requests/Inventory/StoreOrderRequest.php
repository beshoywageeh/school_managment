<?php

namespace App\Http\Requests\Inventory;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'type' => 'required|in:inventory,sales,gard',
            'student_id' => 'nullable|exists:students,id',
            'manual_number' => 'nullable|string|max:255',
            'manual_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'date' => 'required|date',
            'items' => 'required|array|min:1',
            'items.*.itemable_id' => 'required|integer',
            'items.*.itemable_type' => 'required|string',
            'items.*.quantity_in' => 'nullable|numeric|min:0',
            'items.*.quantity_out' => 'nullable|numeric|min:0',
        ];
    }
}
