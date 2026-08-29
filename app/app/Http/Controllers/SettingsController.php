<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewSchoolRequest;
use App\Http\Traits\ImageTrait;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\Grade;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    use ImageTrait, SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:settings-info', ['only' => ['index', 'update']]);
    }

    public function index()
    {
        $school = $this->getSchool();
        $school_info = School::where('id', $school->id)->with('image')->first();
        $grades = Grade::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->withCount('students')
            ->get();
        $std_count = Student::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->count();
        $grd_count = Grade::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->count();
        $teach_count = User::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->count();
        $user = Auth::user();
        $academic_years = AcademicYear::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->get();

        return view(
            'backend.setting.index',
            compact(
                'school',
                'school_info',
                'grades',
                'std_count',
                'grd_count',
                'teach_count',
                'user',
                'academic_years',
            ),
        );
    }

    public function store(NewSchoolRequest $request)
    {
        try {
            $this->executeInTransaction(function () use ($request) {
                $school = new School;
                $school->name = $request->schoolname;
                $school->phone = $request->phone;
                $school->address = $request->address;
                $school->save();
                $this->verifyAndStoreImage(
                    $request,
                    'logo',
                    $request->schoolname,
                    'upload_attachments',
                    $school->id,
                    "App\Models\School",
                    $request->schoolname,
                );

                $user = new User;
                $user->first_name = $request->first_name;
                $user->second_name = $request->second_name;
                $user->email = $request->email;
                $user->isAdmin = $request->isAdmin;
                $user->login_allow = $request->loginAllow;
                $user->password = Hash::make($request->password);
                $user->save();
            });

            return redirect(route('dashboard'));
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $targetSchool = School::findOrFail($id);

        $user = Auth::user();
        if (! $user->isAdmin && (int) $targetSchool->id !== (int) $user->school_id) {
            abort(403, __('settings.cannot_update_other_school'));
        }

        try {
            $this->executeInTransaction(function () use ($request, $id, $targetSchool) {
                $targetSchool->name = $request->school_name;
                $targetSchool->phone = $request->school_phone;
                $targetSchool->address = $request->address;
                $targetSchool->heading_right = $request->head_right;
                $targetSchool->footer_right = $request->footer_right;
                $targetSchool->footer_left = $request->footer_left;
                $targetSchool->slug = \Str::slug($targetSchool->name);
                $targetSchool->save();
                $this->verifyAndStoreImage(
                    $request,
                    'logo',
                    $request->school_name,
                    'upload_attachments',
                    $id,
                    "App\Models\School",
                    $request->school_name,
                );
            });
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update_password(Request $request)
    {
        try {
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required',
            ]);
            $user = Auth::user();
            if (Hash::check($request->old_password, $user->password)) {
                $user = User::find(Auth::id());
                $user->update([
                    'password' => Hash::make($request->new_password),
                ]);

                return redirect()
                    ->back()
                    ->with('success', trans('setting.password_updated'));
            } else {
                return redirect()
                    ->back()
                    ->with('error', trans('setting.old_password_not_match'));
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
