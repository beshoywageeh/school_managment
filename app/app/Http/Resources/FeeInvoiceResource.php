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
            'student' => $this->whenLoaded('student', fn () => [
                'id' => $this->student->id,
                'name' => $this->student->name,
            ]),
            'fee' => $this->whenLoaded('schoolFee', fn () => [
                'id' => $this->schoolFee->id,
                'title' => $this->schoolFee->title,
                'amount' => $this->schoolFee->amount,
            ]),
            'grade' => $this->whenLoaded('grade', fn () => [
                'id' => $this->grade->id,
                'name' => $this->grade->name,
            ]),
            'classroom' => $this->whenLoaded('classroom', fn () => [
                'id' => $this->classroom->id,
                'name' => $this->classroom->name,
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
