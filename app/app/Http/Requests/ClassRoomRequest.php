<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('class_room')?->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'grade_id' => ['required', 'integer', 'exists:grades,id'],
            'school_id' => ['sometimes', 'integer', 'exists:settings,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => trans('validation.required', ['attribute' => trans('classrooms.name')]),
            'name.string' => trans('validation.string', ['attribute' => trans('classrooms.name')]),
            'name.max' => trans('validation.max.string', ['attribute' => trans('classrooms.name'), 'max' => 255]),
            'grade_id.required' => trans('validation.required', ['attribute' => trans('classrooms.grade')]),
            'grade_id.integer' => trans('validation.integer', ['attribute' => trans('classrooms.grade')]),
            'grade_id.exists' => trans('validation.exists', ['attribute' => trans('classrooms.grade')]),
        ];
    }
}
