<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\settings;
use App\Models\User;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    use ImageTrait;

    public function showSetupForm()
    {
        return view('setup');
    }

    public function processSetup(Request $request)
    {

        \Illuminate\Support\Facades\DB::beginTransaction();
        try {

            $slug = \Str::slug($request->schoolname);
            $school = new settings;
            $school->name = $request->schoolname;
            $school->phone = $request->phone;
            $school->address = $request->address;
            $school->slug = $slug;
            $school->save();
            $this->verifyAndStoreImage($request, 'logo', $slug, 'upload_attachments', $school->id, 'App\Models\settings', $request->schoolname);
            $lastemp = User::latest()->first();
            $user = new User;
            $user->code = $lastemp ? str_pad($lastemp->code + 1, 5, '0', STR_PAD_LEFT) : '00001';
            $user->name = $request->name;
            $user->email = \Str::slug($request->name).'@'.$slug.'.com';
            $user->isAdmin = $request->isAdmin;
            $user->login_allow = $request->loginAllow;
            $user->password = bcrypt($request->password);
            $user->school_id = $school->id;
            $user->save();
            $user->assignRole('Admin');
            \DB::commit();

            return view('auth.login', ['data' => $user->email]);
        } catch (\Exception $e) {
            \DB::rollBack();

            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
