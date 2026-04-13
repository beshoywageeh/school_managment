<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'gender' => $this->gender?->value,
            'birth_date' => $this->birth_date?->toDateString(),
            'address' => $this->address,
            'national_id' => $this->national_id,
            'student_status' => $this->student_status?->value,
            'religion' => $this->religion?->value,
            'join_date' => $this->join_date?->toDateString(),
            'grade' => $this->whenLoaded('grade', fn () => [
                'id' => $this->grade->id,
                'name' => $this->grade->name,
            ]),
            'classroom' => $this->whenLoaded('classroom', fn () => [
                'id' => $this->classroom->id,
                'name' => $this->classroom->name,
            ]),
            'parent' => $this->whenLoaded('parent', fn () => [
                'id' => $this->parent->id,
                'father_name' => $this->parent->Father_Name,
            ]),
            'nationality' => $this->whenLoaded('nationality', fn () => [
                'id' => $this->nationality->id,
                'name' => $this->nationality->name,
            ]),
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
