<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    public function assignFields(Request $request, $school): array
    {
        $generateCode = User::orderBy('code', 'desc')->first();
        $code = $generateCode ? str_pad($generateCode->code + 1, 6, '0', STR_PAD_LEFT) : '000001';

        return [
            'name' => $request->name,
            'code' => $code,
            'phone' => $request->phone,
            'address' => $request->address,
            'date_of_birth' => $request->birth_date,
            'date_of_hiring' => $request->date_of_hiring,
            'learning' => $request->learning,
            'reiligon' => $request->religion,
            'gender' => $request->gender,
            'grade_year' => $request->grade_year,
            'type' => $request->worker_type,
            'job_id' => $request->job_id,
            'email' => \Str::slug($request->name).'@ischool.com',
            'isAdmin' => $request->isAdmin ?? false,
            'login_allow' => $request->login_allow ?? false,
            'password' => $request->password ? bcrypt($request->password) : null,
            'insurance' => $request->insurance ?? false,
            'insurance_number' => $request->insurance_number,
            'insurance_date' => $request->insurance_date ?: null,
            'national_id' => $request->national_id,
            'school_id' => $school->id,
            'user_id' => auth()->id(),
            'lesson_count' => $request->lesson_count,
            'sepicality' => $request->sepicality,
            'national_id_expire_date' => $request->national_id_expire_date,
            'contract_start_date' => $request->contract_start_date,
            'notes' => $request->notes,
            'ministry_code' => $request->ministry_code,
        ];
    }

    public function prepareUserData(Request $request): array
    {
        return [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'date_of_birth' => $request->birth_date,
            'date_of_hiring' => $request->date_of_hiring,
            'learning' => $request->learning,
            'reiligon' => $request->religion,
            'gender' => $request->gender,
            'grade_year' => $request->grade_year,
            'type' => is_int($request->worker_type) ? $request->worker_type : null,
            'job_id' => is_int($request->job_id) ? $request->job_id : null,
            'email' => $request->email,
            'isAdmin' => $request->isAdmin ?? false,
            'login_allow' => $request->login_allow ?? false,
            'password' => $request->password ? bcrypt($request->password) : null,
            'insurance' => $request->insurance ?? false,
            'insurance_number' => $request->insurance_number,
            'insurance_date' => $request->insurance_date ?: null,
            'national_id' => $request->national_id,
            'sepicality' => $request->sepicality,
            'national_id_expire_date' => $request->national_id_expire_date,
            'contract_start_date' => $request->contract_start_date,
            'notes' => $request->notes,
            'ministry_code' => $request->ministry_code,
        ];
    }
}
