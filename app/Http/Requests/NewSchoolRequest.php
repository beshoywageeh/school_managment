<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewSchoolRequest extends FormRequest
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
            'schoolname' => 'required|max:100',
            'phone' => 'required|max:15',
            'first_name' => 'required|max:100',
            'second_name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'password' => 'required|min:9|max:15',
        ];
    }

    public function messages(): array
    {
        return [
            'schoolname.required' => 'اسم المدرسة مطلوب',
            'schoolname.max' => 'الحد الاقصي لاسم المدرسة 100 حرف',
            'phone.required' => 'رقم هاتف المدرسة مطلوب',
            'phone.max' => 'الحد الاقصى لرقم الهاتف 15 ',
            'first_name.required' => 'اسم مسؤل النظام مطلوب',
            'second_name.required' => 'اسم العائلة مطلوب',
            'email.required' => 'الايميل مطلوب',
            'password.required' => 'كلمة المرور مطلوبة',
            'password.min' => 'لايمكن ان تقل كلمة المرور 9 حروف',
            'password.max' => 'لا يمكن ان تزيد كلمة المرور عن 15 حرف',
        ];
    }
}
