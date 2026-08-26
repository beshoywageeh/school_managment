<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('Students-create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:students,name,school_id',
            'birth_date' => 'required|date|before:today',
            'national_id' => 'required|numeric|unique:students,national_id,school_id',
            'grade_id' => 'required|exists:grades,id',
            'classroom_id' => 'required|exists:class_rooms,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => trans('student.validation.required.name'),
            'birth_date.required' => trans(
                'student.validation.required.birth_date',
            ),
            'parent_id.required' => trans(
                'student.validation.required.parent_id',
            ),
            'national_id.required' => trans(
                'student.validation.required.national_id',
            ),
            'grade_id.required' => trans(
                'student.validation.required.grade_id',
            ),
            'classroom_id.required' => trans(
                'student.validation.required.classroom_id',
            ),
            'national_id.unique' => trans(
                'student.validation.unique.national_id',
            ),
        ];
    }
}
