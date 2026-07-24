<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('Classes-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:classes,id'],
            'class_name' => ['required', 'string', 'max:255'],
            'grade_name' => ['required', 'integer', 'exists:class_rooms,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('classes.name')]),
            'class_name.required' => trans('validation.required', ['attribute' => trans('classes.name')]),
            'class_name.string' => trans('validation.string', ['attribute' => trans('classes.name')]),
            'class_name.max' => trans('validation.max.string', ['attribute' => trans('classes.name'), 'max' => 255]),
            'grade_name.required' => trans('validation.required', ['attribute' => trans('classrooms.class_room')]),
            'grade_name.integer' => trans('validation.integer', ['attribute' => trans('classrooms.class_room')]),
            'grade_name.exists' => trans('validation.exists', ['attribute' => trans('classrooms.class_room')]),
        ];
    }
}
