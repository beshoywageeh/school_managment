<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('employees-create');
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:11', 'regex:/^01[0-9]\d{8}$/'],
            'address' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'date_of_hiring' => ['required', 'date'],
            'learning' => ['required', 'string', 'max:255'],
            'religion' => ['required', 'integer'],
            'gender' => ['required', 'integer'],
            'type' => ['required', 'integer'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users,email'],
            'isAdmin' => ['nullable', 'boolean'],
            'login_allow' => ['nullable', 'boolean'],
            'password' => ['nullable', 'string', 'min:8'],
            'insurance' => ['nullable', 'boolean'],
            'insurance_date' => ['nullable', 'date'],
            'national_id' => ['required', 'string', 'min:14', 'max:14', 'regex:/[0-9]{14}/'],
            'worker_type' => ['required', 'integer'],
            'grade_year' => ['nullable', 'string', 'max:255'],
            'lesson_count' => ['nullable', 'integer'],
            'sepicality' => ['nullable', 'string', 'max:255'],
            'national_id_expire_date' => ['nullable', 'date'],
            'contract_start_date' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
            'ministry_code' => ['nullable', 'string', 'max:255'],
            'insurance_number' => ['required', 'numeric', 'digits_between:10,14'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => trans('validation.required', ['attribute' => trans('employees.name')]),
            'phone.required' => trans('validation.required', ['attribute' => trans('employees.phone')]),
            'phone.numeric' => trans('validation.numeric', ['attribute' => trans('employees.phone')]),
            'phone.digits' => trans('validation.digits', ['attribute' => trans('employees.phone'), 'digits' => 11]),
            'phone.regex' => trans('validation.regex', ['attribute' => trans('employees.phone')]),
            'address.required' => trans('validation.required', ['attribute' => trans('employees.address')]),
            'address.string' => trans('validation.string', ['attribute' => trans('employees.address')]),
            'address.max' => trans('validation.max.string', ['attribute' => trans('employees.address'), 'max' => 255]),
            'birth_date.required' => trans('validation.required', ['attribute' => trans('employees.date_of_birth')]),
            'birth_date.date' => trans('validation.date', ['attribute' => trans('employees.date_of_birth')]),
            'date_of_hiring.required' => trans('validation.required', ['attribute' => trans('employees.date_of_hiring')]),
            'date_of_hiring.date' => trans('validation.date', ['attribute' => trans('employees.date_of_hiring')]),
            'learning.required' => trans('validation.required', ['attribute' => trans('employees.learning')]),
            'learning.string' => trans('validation.string', ['attribute' => trans('employees.learning')]),
            'learning.max' => trans('validation.max.string', ['attribute' => trans('employees.learning'), 'max' => 255]),
            'email.email' => trans('validation.email', ['attribute' => trans('employees.email')]),
            'email.max' => trans('validation.max.string', ['attribute' => trans('employees.email'), 'max' => 255]),
            'email.unique' => trans('validation.unique', ['attribute' => trans('employees.email')]),
            'password.min' => trans('validation.min.string', ['attribute' => trans('employees.password'), 'min' => 8]),
            'national_id.required' => trans('validation.required', ['attribute' => trans('employees.national_id')]),
            'national_id.string' => trans('validation.string', ['attribute' => trans('employees.national_id')]),
            'national_id.min' => trans('validation.min.string', ['attribute' => trans('employees.national_id'), 'min' => 14]),
            'national_id.max' => trans('validation.max.string', ['attribute' => trans('employees.national_id'), 'max' => 14]),
            'national_id.regex' => trans('validation.regex', ['attribute' => trans('employees.national_id')]),
            'worker_type.required' => trans('validation.required', ['attribute' => trans('employees.type')]),
            'worker_type.integer' => trans('validation.integer', ['attribute' => trans('employees.type')]),
            'insurance_number.required' => trans('validation.required', ['attribute' => trans('employees.insurance_number')]),
            'insurance_number.numeric' => trans('validation.numeric', ['attribute' => trans('employees.insurance_number')]),
            'insurance_number.digits_between' => trans('validation.digits_between', ['attribute' => trans('employees.insurance_number'), 'min' => 10, 'max' => 14]),
        ];
    }
}
