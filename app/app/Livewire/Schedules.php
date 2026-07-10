<?php

namespace App\Livewire;

use App\Enums\Jobs_types;
use App\Http\Traits\LogsActivity;
use App\Models\classes;
use App\Models\Grade;
use App\Models\schedules as schedules_Managment;
use App\Models\User;
use Livewire\Component;

class Schedules extends Component
{
    use LogsActivity;

    public $selectedDay;

    public $showScheduleModal = false;

    public $selectedTeacherId;

    public $class_id;

    public $Selectedjob_id;

    public $selectedStageId;

    public $period;

    public $printTeacherId;

    public $printClassId;

    public $printGradeId;

    protected $listeners = ['print' => 'printSchedule', 'refresh' => '$refresh'];

    public function mount()
    {
        $this->selectedDay = 'saturday';
    }

    public function autoGenerate()
    {
        $teachers = User::where('type', Jobs_types::TEACHER)->with('grades')->get();
        $days = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday'];

        // Pre-fetch teacher grades and classes
        $teacherGrades = [];
        foreach ($teachers as $teacher) {
            $teacherGrades[$teacher->id] = $teacher->grades->pluck('id')->toArray();
        }

        $classesByGrade = classes::all()->groupBy('grade_id');

        // Track: teacher_id => ['total' => int, 'daily' => [day => count]]
        $counts = [];
        foreach ($teachers as $teacher) {
            $counts[$teacher->id] = ['total' => 0, 'daily' => []];
            foreach ($days as $day) {
                $counts[$teacher->id]['daily'][$day] = 0;
            }
        }

        // Clear existing schedules first
        schedules_Managment::query()->delete();

        // Iterate: periods -> days -> teachers (ensures even day distribution)
        for ($period = 1; $period <= 8; $period++) {
            foreach ($days as $day) {
                $busyTeachers = schedules_Managment::where('day', $day)
                    ->where('period', $period)
                    ->pluck('user_id')
                    ->toArray();

                $busyClasses = schedules_Managment::where('day', $day)
                    ->where('period', $period)
                    ->pluck('class_id')
                    ->toArray();

                foreach ($teachers as $teacher) {
                    if (in_array($teacher->id, $busyTeachers)) {
                        continue;
                    }

                    $maxLessons = $teacher->lesson_count ?? 24;
                    $total = $counts[$teacher->id]['total'];

                    if ($total >= $maxLessons) {
                        continue;
                    }

                    // Find available class from teacher's grades
                    $possibleGradeIds = $teacherGrades[$teacher->id] ?? [];
                    $targetClass = null;

                    foreach ($possibleGradeIds as $gradeId) {
                        $gradeClasses = $classesByGrade->get($gradeId);
                        if ($gradeClasses) {
                            $targetClass = $gradeClasses->first(
                                fn ($c) => ! in_array($c->id, $busyClasses)
                            );
                            if ($targetClass) {
                                break;
                            }
                        }
                    }

                    if ($targetClass) {
                        schedules_Managment::create([
                            'user_id' => $teacher->id,
                            'period' => $period,
                            'class_id' => $targetClass->id,
                            'job_id' => $teacher->job_id,
                            'day' => $day,
                        ]);
                        $busyClasses[] = $targetClass->id;
                        $busyTeachers[] = $teacher->id;
                        $counts[$teacher->id]['total']++;
                        $counts[$teacher->id]['daily'][$day]++;
                    }
                }
            }
        }

        $this->logActivity(
            trans('log.actions.auto_generated'),
            trans('log.models.schedules.auto_generated')
        );
        $this->dispatch('alert');
        $this->dispatch('refresh');
        session()->flash('success', trans('general.success'));
    }

    public function clearSchedule()
    {
        schedules_Managment::query()->delete(); // Better to use delete() to support soft deletes if configured
        $this->logActivity(trans('log.actions.cleared'), trans('log.models.schedules.cleared'));
        $this->dispatch('alert');
        session()->flash('success', trans('general.success'));
    }

    public function openScheduleModal($teacherId, $job_id)
    {
        $this->selectedTeacherId = $teacherId;
        $this->Selectedjob_id = $job_id;
        $this->showScheduleModal = true;
    }

    public function closeScheduleModal()
    {
        $this->showScheduleModal = false;
        $this->reset(['class_id', 'Selectedjob_id']);
    }

    public function saveSchedule()
    {
        $this->validate([
            'class_id' => 'required',
            'period' => 'required',
        ]);

        $teacher = User::find($this->selectedTeacherId);

        if (! $teacher) {
            $this->addError('error', 'المدرس غير موجود');

            return;
        }

        // التحقق من حد الحصص للمدرس
        $maxLessons = $teacher->lesson_count ?? 24;
        $countLesson = schedules_Managment::where('user_id', $this->selectedTeacherId)->count();

        if ($countLesson >= $maxLessons) {
            $this->addError('error', 'لقد تخطيت الحد المسموح من الحصص لهذا المدرس');

            return;
        }

        // التحقق من تعارض الفصل (هل الفصل عنده حصة نفس اليوم والفترة؟)
        $classConflict = schedules_Managment::where('day', $this->selectedDay)
            ->where('period', $this->period)
            ->where('class_id', $this->class_id)
            ->exists();

        if ($classConflict) {
            $this->addError('error', 'الفصل لديه حصة أخرى في نفس التوقيت');

            return;
        }

        // التحقق من تعارض المدرس (هل المدرس عنده حصة نفس اليوم والفترة؟)
        $teacherConflict = schedules_Managment::where('day', $this->selectedDay)
            ->where('period', $this->period)
            ->where('user_id', $this->selectedTeacherId)
            ->exists();

        if ($teacherConflict) {
            $this->addError('error', 'المدرس لديه حصة أخرى في نفس التوقيت');

            return;
        }

        // الحفظ
        schedules_Managment::create([
            'user_id' => $this->selectedTeacherId,
            'period' => $this->period,
            'class_id' => $this->class_id,
            'job_id' => $this->Selectedjob_id,
            'day' => $this->selectedDay,
        ]);

        $this->logActivity(trans('log.actions.added'), trans('log.models.schedules.added'));
        $this->closeScheduleModal();
        $this->dispatch('alert');
        $this->dispatch('refresh');
        session()->flash('success', trans('general.success'));
    }

    public function render()
    {

        return view('livewire.Schedules.Schedules', [
            'Teachers' => User::where('type', Jobs_types::TEACHER)->with('job')->get(),
            'Schedules' => schedules_Managment::where('day', $this->selectedDay)->with('section:id,title')->get(),
            'classes' => classes::all(),
            'grades' => Grade::all(),
        ]);
    }
}
