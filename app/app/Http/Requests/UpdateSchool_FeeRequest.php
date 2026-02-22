<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSchool_FeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'academic_year_id' => 'required',
            'grade_id' => 'required|exists:grades,id',
            'classroom_id' => 'required|exists:class_rooms,id',
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ];
    }
}
