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
            'Father_Name' => 'required',
            'Mother_National_Id' => 'required|string|min:14|max:14|regex:/[0-9]{9}/',
            'Father_Phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:12',
            'Father_National_Id' => 'required|string|min:14|max:14|regex:/[0-9]{9}/',
            'Mother_Phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Mother_Job' => 'nullable|string|min:2|max:20',
            'Father_Job' => 'nullable|string|min:2|max:20',
            'Religion' => 'nullable|string|min:2|max:20',
            'Father_Learning' => 'nullable|string|min:2|max:20',
            'Address' => 'nullable|string|min:2|max:100',
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