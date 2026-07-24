<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('Classes-create');
    }

    public function rules(): array
    {
        return [
            'classroom' => ['required', 'array', 'min:1'],
            'classroom.*.class_name' => ['required', 'string', 'max:255'],
            'classroom.*.class_id' => ['required', 'integer', 'exists:class_rooms,id'],
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
            'classroom.*.class_id.required' => trans('validation.required', ['attribute' => trans('classrooms.class_room')]),
            'classroom.*.class_id.integer' => trans('validation.integer', ['attribute' => trans('classrooms.class_room')]),
            'classroom.*.class_id.exists' => trans('validation.exists', ['attribute' => trans('classrooms.class_room')]),
        ];
    }
}
