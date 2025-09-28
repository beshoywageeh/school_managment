<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;

class schedulesController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();

        return view('backend.schedules.index', get_defined_vars());
    }
}
