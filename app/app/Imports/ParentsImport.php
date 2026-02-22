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
                'Father_Name' => $row[0],
                'Father_National_Id' => $row[1],
                'Father_Phone' => $row[2],
                'Father_Job' => $row[3],
                'Father_Birth_Date' => $row[4],
                'Father_Learning' => $row[5],
                'Father_Birth_Location' => $row[6],
                'Mother_Name' => $row[7],
                'Mother_National_Id' => $row[8],
                'Mother_Phone' => $row[9],
                'Mother_Job' => $row[10],
                'Religion' => user_religion::fromString($row[13]),
                'Address' => $row[12],
                'Mother_Birth_Date' => $row[11],
                'user_id' => Auth::id(),
            ]);
        }
    }
}
