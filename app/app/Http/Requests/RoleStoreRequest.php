<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('role-create');
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'unique:roles,name'],
            'permission' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => trans('validation.required', ['attribute' => trans('roles.name')]),
            'name.unique' => trans('validation.unique', ['attribute' => trans('roles.name')]),
            'permission.required' => trans('validation.required', ['attribute' => trans('roles.permissions')]),
        ];
    }
}
