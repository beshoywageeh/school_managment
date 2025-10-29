<?php

namespace App\Http\Traits;

use App\Models\settings;
use Illuminate\Support\Facades\Auth;

trait SchoolTrait
{
    public function GetSchool()
    {
        $user = Auth::user()->school_id;
        $school = settings::where('id', $user)->with('image')->first();

        return $school;
    }
}
