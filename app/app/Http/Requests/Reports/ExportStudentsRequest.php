<?php

namespace App\Http\Requests\Reports;

use Illuminate\Foundation\Http\FormRequest;

class ExportStudentsRequest extends FormRequest
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
            'grade' => ['nullable', 'integer'],
            'classroom' => ['nullable', 'integer'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'grade.integer' => trans('validation.integer', ['attribute' => trans('general.grade')]),
            'classroom.integer' => trans('validation.integer', ['attribute' => trans('report.classroom')]),
        ];
    }
}
