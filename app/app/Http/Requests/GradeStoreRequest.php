<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class GradeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('grade-create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => $this->isMethod('put')
                ? ['required', 'integer', 'exists:grades,id']
                : ['nullable'],
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:grades,name,school_id',
            ],
            'user_id' => ['nullable', 'array', 'exists:users,id'],
        ];
    }
}
