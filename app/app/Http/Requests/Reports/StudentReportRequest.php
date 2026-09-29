<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class StudentReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Route-level middleware (can:reports-view / can:reports-export) already gates this action.
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'classroom_id' => ['required', 'integer', 'exists:class_rooms,id'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'classroom_id.required' => trans('validation.required', ['attribute' => trans('report.classroom')]),
            'classroom_id.integer' => trans('validation.integer', ['attribute' => trans('report.classroom')]),
            'classroom_id.exists' => trans('validation.exists', ['attribute' => trans('report.classroom')]),
        ];
    }
}
