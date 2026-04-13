<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'code' => $this->code,
            'phone' => $this->phone,
            'gender' => $this->gender?->value,
            'type' => $this->type?->value,
            'is_admin' => $this->isAdmin,
            'login_allow' => $this->login_allow,
            'job' => $this->whenLoaded('job', fn () => [
                'id' => $this->job->id,
                'name' => $this->job->name,
            ]),
            'image' => $this->whenLoaded('image', fn () => [
                'url' => $this->image->first()?->url ?? null,
            ]),
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
