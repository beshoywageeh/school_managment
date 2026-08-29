<?php

namespace App\Imports;

use App\Enums\user_religion;
use App\Models\MyParent;
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
            $columns = array_values($row instanceof Collection ? $row->all() : $row);

            if (count($columns) < 14 || collect($columns)->every(fn ($value) => blank($value))) {
                continue;
            }

            $religion = $columns[13] ?? null;
            $religion = is_string($religion) ? $religion : null;

            MyParent::create([
                'father_name' => $columns[0],
                'father_national_id' => $columns[1],
                'father_phone' => $columns[2],
                'father_job' => $columns[3],
                'father_birth_date' => $columns[4],
                'father_learning' => $columns[5],
                'father_birth_location' => $columns[6],
                'mother_name' => $columns[7],
                'mother_national_id' => $columns[8],
                'mother_phone' => $columns[9],
                'mother_job' => $columns[10],
                'mother_birth_date' => $columns[11],
                'address' => $columns[12],
                'religion' => user_religion::fromString($religion),
                'user_id' => Auth::id(),
            ]);
        }
    }
}
