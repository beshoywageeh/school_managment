<?php

namespace App\Imports;

use App\Enums\Jobs_types;
use App\Enums\user_religion;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;

class WorkersImport implements ToCollection
{
    /**
     * @param  Collection  $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            User::create([
                'code' => $row[0],
                'name' => $row[1],
                'phone' => $row[2],
                'address' => $row[3],
                'date_of_birth' => $row[4],
                'date_of_hiring' => $row[5],
                'learning' => $row[6],
                'email' => \Str::slug($row[1]) . '@ischool.com',
                'reiligon' => user_religion::fromString($row[7]),
                'type' => Jobs_types::fromString($row[8]),
                'user_id' => Auth::id(),
            ]);
        }
    }
}