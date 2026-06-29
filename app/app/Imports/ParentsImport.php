<?php

namespace App\Imports;

use App\Enums\user_religion;
use App\Models\My_parents;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;

class ParentsImport implements ToCollection
{
    /**
     * @param  Collection  $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            My_parents::create([
                'father_name' => $row[0],
                'father_national_id' => $row[1],
                'father_phone' => $row[2],
                'father_job' => $row[3],
                'father_birth_date' => $row[4],
                'father_learning' => $row[5],
                'Father_Birth_Location' => $row[6],
                'mother_name' => $row[7],
                'mother_national_id' => $row[8],
                'mother_phone' => $row[9],
                'mother_job' => $row[10],
                'religion' => user_religion::fromString($row[13]),
                'address' => $row[12],
                'mother_birth_date' => $row[11],
                'user_id' => Auth::id(),
            ]);
        }
    }
}
