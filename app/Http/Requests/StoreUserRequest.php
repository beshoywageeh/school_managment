<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits:11|regex:/^01[1-9]\d{8}$/',
            'address' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'date_of_hiring' => 'required|date',
            'learning' => 'required|string|max:255',
            'religion' => 'required|integer',
            'gender' => 'required|integer',
            'type' => 'required|integer',
            'job_id' => 'required|integer|exists:jobs,id',
            'email' => 'nullable|string|email|max:255|unique:users,email',
            'isAdmin' => 'nullable|boolean',
            'login_allow' => 'nullable|boolean',
            'password' => 'nullable|string|min:8',
            'insurance' => 'nullable|boolean',
            'insurance_number' => 'nullable|string|max:255',
            'insurance_date' => 'nullable|date',
            'national_id' => 'required|string|min:14|max:14|regex:/[0-9]{14}/',
        ];
    }
    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => trans('validation.required', ['attribute' => trans('employees.name')]),
            'code.required' => trans('validation.required', ['attribute' => trans('employees.code')]),
            'phone.required' => trans('validation.required', ['attribute' => trans('employees.phone')]),
            'phone.numeric' => trans('validation.numeric', ['attribute' => trans('employees.phone')]),
            'phone.digits' => trans('validation.digits', ['attribute' => trans('employees.phone'), 'digits' => 11]),
            'phone.regex' => trans('validation.regex', ['attribute' => trans('employees.phone')]),
            'address.string' => trans('validation.string', ['attribute' => trans('employees.address')]),
            'address.max' => trans('validation.max.string', ['attribute' => trans('employees.address'), 'max' => 255]),
            'date_of_birth.date' => trans('validation.date', ['attribute' => trans('employees.date_of_birth')]),
            'date_of_hiring.date' => trans('validation.date', ['attribute' => trans('employees.date_of_hiring')]),
            'learning.string' => trans('validation.string', ['attribute' => trans('employees.learning')]),
            'learning.max' => trans('validation.max.string', ['attribute' => trans('employees.learning'), 'max' => 255]),
            'email.email' => trans('validation.email', ['attribute' => trans('employees.email')]),
            'email.max' => trans('validation.max.string', ['attribute' => trans('employees.email'), 'max' => 255]),
            'email.unique' => trans('validation.unique', ['attribute' => trans('employees.email')]),
            'password.min' => trans('validation.min.string', ['attribute' => trans('employees.password'), 'min' => 8]),
            'insurance_number.max' => trans('validation.max.string', ['attribute' => trans('employees.insurance_number'), 'max' => 255]),
            'national_id.required' => trans('validation.required', ['attribute' => trans('employees.national_id')]),
            'national_id.string' => trans('validation.string', ['attribute' => trans('employees.national_id')]),
            'national_id.min' => trans('validation.min.string', ['attribute' => trans('employees.national_id'), 'min' => 14]),
            'national_id.max' => trans('validation.max.string', ['attribute' => trans('employees.national_id'), 'max' => 14]),
            'national_id.regex' => trans('validation.regex', ['attribute' => trans('employees.national_id')]),
        ];
    }
}
