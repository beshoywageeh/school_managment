<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;

class SchedulesController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:scheduale-list', ['only' => ['index']]);
    }

    public function index()
    {
        $school = $this->getSchool();

        return view('backend.schedules.index', compact('school'));
    }
}
