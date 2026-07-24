<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('class_rooms-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:class_rooms,id'],
            'class_name' => ['required', 'string', 'max:255'],
            'grade_name' => ['required', 'integer', 'exists:grades,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('classrooms.name')]),
            'class_name.required' => trans('validation.required', ['attribute' => trans('classrooms.name')]),
            'class_name.string' => trans('validation.string', ['attribute' => trans('classrooms.name')]),
            'class_name.max' => trans('validation.max.string', ['attribute' => trans('classrooms.name'), 'max' => 255]),
            'grade_name.required' => trans('validation.required', ['attribute' => trans('classrooms.grade')]),
            'grade_name.integer' => trans('validation.integer', ['attribute' => trans('classrooms.grade')]),
            'grade_name.exists' => trans('validation.exists', ['attribute' => trans('classrooms.grade')]),
        ];
    }
}
