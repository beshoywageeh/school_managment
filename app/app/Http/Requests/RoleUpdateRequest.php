<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('role-edit');
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'permission' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => trans('validation.required', ['attribute' => trans('roles.name')]),
            'permission.required' => trans('validation.required', ['attribute' => trans('roles.permissions')]),
        ];
    }
}
