<?php

namespace App\Livewire;

use App\Http\Traits\LogsActivity;
use App\Models\classes;
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

    protected $listeners = ['print' => 'printSchedule'];

    public function mount()
    {
        $this->selectedDay = 'saturday';
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

        // التحقق من التعارضات
        $existingSchedule = schedules_Managment::where('day', $this->selectedDay)
            ->where('period', $this->period)
            ->where('class_id', $this->class_id)
            ->first();
        $count_lesson = schedules_Managment::where('user_id', $this->selectedTeacherId)->count();
        $user = User::find($this->selectedTeacherId)->lesson_count;

        if ($count_lesson >= $user) {
            $this->addError('error', 'لقد تخطيبت الحد المسموح من الحصص لهذا المدرس');

            return;
        }
        if ($existingSchedule) {
            if ($existingSchedule->class_id == $this->class_id || $existingSchedule->period == $this->period) {
                $this->addError('error', 'الفصل لديه حصة أخرى في نفس التوقيت');
            }
            if ($existingSchedule->user_id == $this->selectedTeacherId) {
                $this->addError('error', 'المدرس لديه حصة أخرى في نفس التوقيت');
            }

            return;
        }

        schedules_Managment::create([
            'user_id' => $this->selectedTeacherId,
            'period' => $this->period,
            'class_id' => $this->class_id,
            'job_id' => $this->Selectedjob_id,
            'day' => $this->selectedDay,
        ]);
        $this->logActivity('إضافة', 'تم إضافة حصة دراسية');
        $this->closeScheduleModal();
        $this->dispatch('alert');
        request()->session()->flash('success', trans('General.success'));

    }

    public function render()
    {

        return view('livewire.Schedules.Schedules', [
            'Teachers' => User::where('type', 1)->with('job')->get(),
            'Schedules' => schedules_Managment::where('day', $this->selectedDay)->with('class:id,title')->get(),
            'classes' => classes::all(),
        ]);
    }
}
