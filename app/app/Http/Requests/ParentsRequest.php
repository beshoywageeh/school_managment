<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ParentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'father_name' => 'required|string|max:255',
            'father_national_id' => 'nullable|string|min:14|max:14|regex:/[0-9]{14}/',
            'father_phone' => 'nullable|numeric|digits:11|regex:/^01[1-9]\d{8}$/',
            'father_job' => 'required|string|max:255',
            'father_birth_date' => 'nullable|date',
            'father_learning' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'mother_national_id' => 'nullable|string|min:14|max:14|regex:/[0-9]{14}/',
            'mother_phone' => 'nullable|numeric|digits:11|regex:/^01[0-9]\d{8}$/',
            'mother_job' => 'nullable|string|max:255',
            'religion' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'mother_birth_date' => 'nullable|date',
            'slug' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'father_name.required' => trans('Parents.Father_required'),
            'mother_national_id.required' => trans('Parents.Mother_required'),
            'mother_national_id.string' => trans('Parents.Mother_string'),
            'mother_national_id.min' => trans('Parents.Mother_min'),
            'mother_national_id.max' => trans('Parents.Mother_max'),
            'mother_national_id.regex' => trans('Parents.Mother_regex'),
            'father_phone.regex' => trans('Parents.Father_phone'),
            'father_phone.min' => trans('Parents.Father_min'),
            'mother_phone.regex' => trans('Parents.Mother_phone'),
            'mother_phone.min' => trans('Parents.Mother_min'),
            'mother_job.string' => trans('Parents.Mother_string'),
            'mother_job.min' => trans('Parents.Mother_min'),
            'mother_job.max' => trans('Parents.Mother_max'),
            'father_job.string' => trans('Parents.Father_string'),
            'father_job.min' => trans('Parents.Father_min'),
            'father_job.max' => trans('Parents.Father_max'),
            'father_learning.string' => trans('Parents.Learning_string'),
            'father_learning.min' => trans('Parents.Learning_min'),
            'father_learning.max' => trans('Parents.Learning_max'),
            'address.string' => trans('Parents.Address_string'),
            'address.min' => trans('Parents.Address_min'),
            'address.max' => trans('Parents.Address_max'),
        ];
    }
}
