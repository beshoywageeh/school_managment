<?php

namespace App\Http\Requests\Reports;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class FinalYearReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * The final-year form uses multi-selects, which submit `grade[]` /
     * `classroom[]`. The filters therefore accept either a single id or a list
     * of ids, so the shape is validated in {@see withValidator()} instead of
     * with a plain `integer` rule that would reject every multi-selection.
     *
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'grade' => ['nullable'],
            'classroom' => ['nullable'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'grade' => trans('validation.integer', ['attribute' => trans('general.grade')]),
            'classroom' => trans('validation.integer', ['attribute' => trans('report.classroom')]),
        ];
    }

    /**
     * Validate each filter as an integer, or as a list of integers when the
     * multi-select posts an array. Errors are reported against the filter
     * itself rather than `filter.0` so the form can highlight one field.
     */
    public function withValidator(Validator $validator): void
    {
        $messages = $this->messages();

        foreach (['grade', 'classroom'] as $key) {
            $validator->after(function (Validator $validator) use ($key, $messages): void {
                $value = $this->input($key);

                if ($value === null || $value === '' || $value === []) {
                    return;
                }

                foreach ((array) $value as $item) {
                    if (filter_var($item, FILTER_VALIDATE_INT) === false) {
                        $validator->errors()->add($key, $messages[$key]);

                        return;
                    }
                }
            });
        }
    }
}
