<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('jobs-edit');
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:work_jobs,id'],
            'job_name' => ['required', 'string', 'max:255'],
            'worker_type' => ['required', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => trans('validation.required', ['attribute' => trans('general.id')]),
            'id.exists' => trans('validation.exists', ['attribute' => trans('jobs.name')]),
            'job_name.required' => trans('validation.required', ['attribute' => trans('jobs.name')]),
            'job_name.string' => trans('validation.string', ['attribute' => trans('jobs.name')]),
            'job_name.max' => trans('validation.max.string', ['attribute' => trans('jobs.name'), 'max' => 255]),
            'worker_type.required' => trans('validation.required', ['attribute' => trans('jobs.type')]),
            'worker_type.integer' => trans('validation.integer', ['attribute' => trans('jobs.type')]),
        ];
    }
}
