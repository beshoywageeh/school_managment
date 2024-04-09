<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewSchoolRequest;
use App\Http\Traits\ImageTrait;

use App\Models\settings;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $school = settings::count() > 0;
        if (!$school) {
            return view('welcome');
        } else {
            return redirect(route('login'));
        }
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
            $this->verifyAndStoreImage($request, 'logo', $request->schoolname, 'upload_attachments', $school->id, 'App\Models\settings');

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
}
