<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'old_grade' => ['required', 'integer', 'exists:grades,id'],
            'old_class' => ['required', 'integer', 'exists:class_rooms,id'],
            'new_grade' => ['required', 'integer', 'exists:grades,id'],
            'new_class' => ['required', 'integer', 'exists:class_rooms,id'],
            'acc_from' => ['required', 'integer', 'exists:acadmice_years,id'],
            'acc_to' => ['required', 'integer', 'exists:acadmice_years,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'old_grade.required' => trans('validation.required', ['attribute' => trans('promotions.old_grade')]),
            'old_grade.exists' => trans('validation.exists', ['attribute' => trans('promotions.old_grade')]),
            'old_class.required' => trans('validation.required', ['attribute' => trans('promotions.old_class')]),
            'old_class.exists' => trans('validation.exists', ['attribute' => trans('promotions.old_class')]),
            'new_grade.required' => trans('validation.required', ['attribute' => trans('promotions.new_grade')]),
            'new_grade.exists' => trans('validation.exists', ['attribute' => trans('promotions.new_grade')]),
            'new_class.required' => trans('validation.required', ['attribute' => trans('promotions.new_class')]),
            'new_class.exists' => trans('validation.exists', ['attribute' => trans('promotions.new_class')]),
            'acc_from.required' => trans('validation.required', ['attribute' => trans('promotions.from_year')]),
            'acc_from.exists' => trans('validation.exists', ['attribute' => trans('promotions.from_year')]),
            'acc_to.required' => trans('validation.required', ['attribute' => trans('promotions.to_year')]),
            'acc_to.exists' => trans('validation.exists', ['attribute' => trans('promotions.to_year')]),
        ];
    }
}
