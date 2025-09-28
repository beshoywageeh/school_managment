<?php

namespace App\Imports;

use App\Enums\Jobs_types;
use App\Enums\user_religion;
use App\Enums\UserGender;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;

class WorkersImport implements ToModel
{
    public function model(array $row)
    {
        $generate_code = User::orderBy('code', 'desc')->first();

        return new User([
            'code' => isset($generate_code) ? str_pad($generate_code->code + 1, 6, '0', STR_PAD_LEFT) : '000001',
            'name' => $row[0],
            'email' => \Str::slug($row[0]).'@ischool.com',
            'phone' => '0'.$row[1],
            'address' => $row[2],
            'date_of_birth' => Carbon::parse($row[3])->format('Y-m-d'),
            'date_of_hiring' => Carbon::parse($row[4])->format('Y-m-d'),
            'learning' => $row[5],
            'reiligon' => user_religion::fromString($row[6]),
            'gender' => UserGender::fromString($row[7]),
            'type' => Jobs_types::fromString($row[8]),
            'job_id' => $row[9],
            'grade_year' => $row[10],
            'insurance' => $row[11],
            'insurance_date' => $row[12],
            'insurance_number' => $row[13],
            'national_id' => $row[14],
            'school_id' => Auth::user()->school_id,
            'user_id' => Auth::id(),
            'lesson_count' => $row[15],
            'national_id_expire_date' => $row[18],
            'contract_start_date' => Carbon::parse($row[20])->format('Y-m-d'),
            'notes' => $row[21],
            'ministry_code' => $row[22],
        ]);
    }
}
