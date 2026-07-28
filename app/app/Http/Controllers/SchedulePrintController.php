<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\ClassRoom2 as classes;
use App\Models\Grade;
use App\Models\Schedule as schedules;
use App\Models\User;

class SchedulePrintController extends Controller
{
    use SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:scheduale-list');
    }

    public function teacher(User $user)
    {
        $school = $this->getSchool();
        $schedules = schedules::where('user_id', $user->id)
            ->with('section:id,title')
            ->get()
            ->groupBy('day');

        return view('backend.schedules.print.teacher', compact('user', 'schedules', 'school'));
    }

    public function classroom(classes $class)
    {
        $school = $this->getSchool();
        $schedules = schedules::where('class_id', $class->id)
            ->with('teacher:id,name')
            ->get()
            ->groupBy('day');

        return view('backend.schedules.print.classroom', compact('class', 'schedules', 'school'));
    }

    public function grade(Grade $grade)
    {
        $school = $this->getSchool();
        $classes = $grade->classes;
        $classIds = $classes->pluck('id')->toArray();

        $schedules = schedules::whereIn('class_id', $classIds)
            ->with('teacher:id,name', 'section:id,title')
            ->get()
            ->groupBy('day');

        return view('backend.schedules.print.grade', compact('grade', 'classes', 'schedules', 'school'));
    }
}
