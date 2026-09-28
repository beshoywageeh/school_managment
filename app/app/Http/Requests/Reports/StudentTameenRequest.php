<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class StudentTameenRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', 'integer', 'in:1,2'],
            'classroom_id' => ['required', 'integer', 'exists:class_rooms,id'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'type.required' => trans('validation.required', ['attribute' => trans('report.type')]),
            'type.in' => trans('validation.in', ['attribute' => trans('report.type')]),
            'classroom_id.required' => trans('validation.required', ['attribute' => trans('report.classroom')]),
            'classroom_id.exists' => trans('validation.exists', ['attribute' => trans('report.classroom')]),
        ];
    }
}
