<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeeInvoiceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'invoice_date' => $this->invoice_date?->toDateString(),
            'amount' => $this->amount,
            'status' => $this->status,
            'student' => $this->whenLoaded('students', fn () => [
                'id' => $this->students->id,
                'name' => $this->students->name,
            ]),
            'fee' => $this->whenLoaded('fees', fn () => [
                'id' => $this->fees->id,
                'title' => $this->fees->title,
                'amount' => $this->fees->amount,
            ]),
            'grade' => $this->whenLoaded('grades', fn () => [
                'id' => $this->grades->id,
                'name' => $this->grades->name,
            ]),
            'classroom' => $this->whenLoaded('classes', fn () => [
                'id' => $this->classes->id,
                'name' => $this->classes->name,
            ]),
            'academic_year' => $this->whenLoaded('acd_year', fn () => [
                'id' => $this->acd_year->id,
                'view' => $this->acd_year->view,
            ]),
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
