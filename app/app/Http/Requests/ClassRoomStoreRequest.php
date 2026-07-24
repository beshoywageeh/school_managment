<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('class_rooms-create');
    }

    public function rules(): array
    {
        return [
            'classroom' => ['required', 'array', 'min:1'],
            'classroom.*.class_name' => ['required', 'string', 'max:255'],
            'classroom.*.grade_id' => ['required', 'integer', 'exists:grades,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'classroom.required' => trans('validation.required', ['attribute' => trans('classrooms.name')]),
            'classroom.array' => trans('validation.array', ['attribute' => trans('classrooms.name')]),
            'classroom.min' => trans('validation.min.array', ['attribute' => trans('classrooms.name'), 'min' => 1]),
            'classroom.*.class_name.required' => trans('validation.required', ['attribute' => trans('classrooms.name')]),
            'classroom.*.class_name.string' => trans('validation.string', ['attribute' => trans('classrooms.name')]),
            'classroom.*.class_name.max' => trans('validation.max.string', ['attribute' => trans('classrooms.name'), 'max' => 255]),
            'classroom.*.grade_id.required' => trans('validation.required', ['attribute' => trans('classrooms.grade')]),
            'classroom.*.grade_id.integer' => trans('validation.integer', ['attribute' => trans('classrooms.grade')]),
            'classroom.*.grade_id.exists' => trans('validation.exists', ['attribute' => trans('classrooms.grade')]),
        ];
    }
}
