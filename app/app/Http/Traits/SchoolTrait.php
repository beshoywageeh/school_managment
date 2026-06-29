<?php

namespace App\Http\Traits;

use App\Models\School;
use Illuminate\Support\Facades\Auth;

trait SchoolTrait
{
    public function GetSchool()
    {
        $user = Auth::user()->school_id;
        $school = School::where('id', $user)->with('image')->first();

        return $school;
    }
}
