<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Father_Name' => 'required|string|max:255',
            'Father_National_Id' => 'nullable|string|min:14|max:14|regex:/[0-9]{14}/',
            'Father_Phone' => 'nullable|numeric|digits:11|regex:/^01[1-9]\d{8}$/',
            'Father_Job' => 'required|string|max:255',
            'Father_Birth_Date' => 'nullable|date',
            'Father_Learning' => 'nullable|string|max:255',
            'Mother_Name' => 'nullable|string|max:255',
            'Mother_National_Id' => 'nullable|string|min:14|max:14|regex:/[0-9]{14}/',
            'Mother_Phone' => 'nullable|numeric|digits:11|regex:/^01[1-9]\d{8}$/',
            'Mother_Job' => 'nullable|string|max:255',
            'Religion' => 'nullable|string|max:255',
            'Address' => 'nullable|string|max:255',
            'Mother_Birth_Date' => 'nullable|date',
            'slug' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'Father_Name.required' => trans('Parents.Father_required'),
            'Mother_National_Id.required' => trans('Parents.Mother_required'),
            'Mother_National_Id.string' => trans('Parents.Mother_string'),
            'Mother_National_Id.min' => trans('Parents.Mother_min'),
            'Mother_National_Id.max' => trans('Parents.Mother_max'),
            'Mother_National_Id.regex' => trans('Parents.Mother_regex'),
            'Father_Phone.regex' => trans('Parents.Father_phone'),
            'Father_Phone.min' => trans('Parents.Father_min'),
            'Mother_Phone.regex' => trans('Parents.Mother_phone'),
            'Mother_Phone.min' => trans('Parents.Mother_min'),
            'Mother_Job.string' => trans('Parents.Mother_string'),
            'Mother_Job.min' => trans('Parents.Mother_min'),
            'Mother_Job.max' => trans('Parents.Mother_max'),
            'Father_Job.string' => trans('Parents.Father_string'),
            'Father_Job.min' => trans('Parents.Father_min'),
            'Father_Job.max' => trans('Parents.Father_max'),
            'Father_Learning.string' => trans('Parents.Learning_string'),
            'Father_Learning.min' => trans('Parents.Learning_min'),
            'Father_Learning.max' => trans('Parents.Learning_max'),
            'Address.string' => trans('Parents.Address_string'),
            'Address.min' => trans('Parents.Address_min'),
            'Address.max' => trans('Parents.Address_max'),
        ];
    }
}
