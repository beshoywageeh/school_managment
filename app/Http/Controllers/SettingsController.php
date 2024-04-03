<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewSchoolRequest;
use App\Http\Traits\ImageTrait;
use App\Models\Image;
use App\Models\settings;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $school = settings::count() > 0;
        if (! $school) {
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
            if ($request->hasfile('logo')) {
                $this->uploadImage('schools/'.$request->schoolname, $request->logo, 'logo');
                $image = new Image();
                $image->filename = $this->uploadImage('schools/'.$request->schoolname, $request->logo, 'logo');
                $image->imageable_id = $school->id;
                $image->imageable_type = 'App\Models\settings';
                $image->save();
            }
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
