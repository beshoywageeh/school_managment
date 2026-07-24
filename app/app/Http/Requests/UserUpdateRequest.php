<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('employees-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:users,id'],
            'name' => ['sometimes', 'string', 'max:255'],
            'phone' => ['sometimes', 'numeric', 'digits:11', 'regex:/^01[0-9]\d{8}$/'],
            'address' => ['sometimes', 'string', 'max:255'],
            'learning' => ['sometimes', 'string', 'max:255'],
            'type' => ['sometimes', 'integer'],
            'job_id' => ['nullable', 'integer', 'exists:work_jobs,id'],
            'email' => ['sometimes', 'string', 'email', 'max:255', 'unique:users,email,'.$this->id],
            'password' => ['nullable', 'string', 'min:8'],
            'national_id' => ['sometimes', 'string', 'min:14', 'max:14', 'regex:/[0-9]{14}/'],
            'birth_date' => ['sometimes', 'date'],
            'date_of_hiring' => ['sometimes', 'date'],
            'religion' => ['sometimes', 'integer'],
            'gender' => ['sometimes', 'integer'],
            'isAdmin' => ['sometimes', 'boolean'],
            'login_allow' => ['sometimes', 'boolean'],
            'insurance' => ['sometimes', 'boolean'],
            'insurance_number' => ['sometimes', 'numeric', 'digits_between:10,14'],
            'insurance_date' => ['sometimes', 'date'],
            'grade_year' => ['sometimes', 'string', 'max:255'],
            'lesson_count' => ['sometimes', 'integer'],
            'sepicality' => ['sometimes', 'string', 'max:255'],
            'national_id_expire_date' => ['sometimes', 'date'],
            'contract_start_date' => ['sometimes', 'date'],
            'notes' => ['sometimes', 'string'],
            'ministry_code' => ['sometimes', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('employees.name')]),
            'name.string' => trans('validation.string', ['attribute' => trans('employees.name')]),
            'name.max' => trans('validation.max.string', ['attribute' => trans('employees.name'), 'max' => 255]),
            'phone.numeric' => trans('validation.numeric', ['attribute' => trans('employees.phone')]),
            'phone.digits' => trans('validation.digits', ['attribute' => trans('employees.phone'), 'digits' => 11]),
            'phone.regex' => trans('validation.regex', ['attribute' => trans('employees.phone')]),
            'address.string' => trans('validation.string', ['attribute' => trans('employees.address')]),
            'address.max' => trans('validation.max.string', ['attribute' => trans('employees.address'), 'max' => 255]),
            'email.email' => trans('validation.email', ['attribute' => trans('employees.email')]),
            'email.max' => trans('validation.max.string', ['attribute' => trans('employees.email'), 'max' => 255]),
            'email.unique' => trans('validation.unique', ['attribute' => trans('employees.email')]),
            'password.min' => trans('validation.min.string', ['attribute' => trans('employees.password'), 'min' => 8]),
            'national_id.string' => trans('validation.string', ['attribute' => trans('employees.national_id')]),
            'national_id.min' => trans('validation.min.string', ['attribute' => trans('employees.national_id'), 'min' => 14]),
            'national_id.max' => trans('validation.max.string', ['attribute' => trans('employees.national_id'), 'max' => 14]),
            'national_id.regex' => trans('validation.regex', ['attribute' => trans('employees.national_id')]),
            'insurance_number.numeric' => trans('validation.numeric', ['attribute' => trans('employees.insurance_number')]),
            'insurance_number.digits_between' => trans('validation.digits_between', ['attribute' => trans('employees.insurance_number'), 'min' => 10, 'max' => 14]),
        ];
    }
}
