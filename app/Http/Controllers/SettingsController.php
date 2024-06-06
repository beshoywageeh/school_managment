<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewSchoolRequest;
use App\Http\Traits\ImageTrait;
use App\Models\{class_room, Grade, acadmice_year, settings, Student, User};

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $school = settings::with('image')->first();
        $grades = Grade::withCount('students')->get();
        $std_count = Student::count();
        $grd_count = Grade::count();
        $teach_count = User::count();
        $user = Auth::user();
        $academic_years = acadmice_year::get();
        return view('backend.setting.index', get_defined_vars());
    }

    public function store(NewSchoolRequest $request)
    {
        // return $request;
        \Illuminate\Support\Facades\DB::beginTransaction();
        try {
            $school = new settings();
            $school->school_name = $request->schoolname;
            $school->phone = $request->phone;
            $school->address = $request->address;
            $school->save();
            $this->verifyAndStoreImage($request, 'logo', $request->schoolname, 'upload_attachments', $school->id, 'App\Models\settings', $request->schoolname);

            $user = new User();
            $user->first_name = $request->first_name;
            $user->second_name = $request->second_name;
            $user->email = $request->email;
            $user->isAdmin = $request->isAdmin;
            $user->login_allow = $request->loginAllow;
            $user->password = Hash::make($request->password);
            $user->save();

            \DB::commit();

            return redirect(route('dashboard'));
        } catch (\Exception $e) {
            \DB::rollBack();

            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function edit()
    {

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
                $user = new User();
                $user->password = Hash::make($request->new_password);
                $user->save();
                return redirect()->back()->with('success', trans('setting.password_updated'));
            } else {
                return redirect()->back()->with('error', trans('setting.old_password_not_match'));
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
