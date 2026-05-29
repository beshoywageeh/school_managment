<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'student_name' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'address' => ['required', 'string', 'max:100'],
            'gender' => ['required'],
            'religion' => ['required'],
            'nationality' => ['required'],
            'std_status' => ['required'],
            'grade' => ['required'],
            'class_room' => ['required'],
            'parents' => ['required'],
            'national_id' => 'required|string|min:14|max:14',
        ];
    }

    public function messages()
    {
        return [
            'student_name.required' => trans('validation.required'),
            'grade.required' => trans('validation.required'),
            'class_room.required' => trans('validation.required'),
            'national_id.min' => trans('student.national_min'),
        ];
    }
}
