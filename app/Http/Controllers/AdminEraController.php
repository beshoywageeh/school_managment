<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminEraController extends Controller
{
    public function Index()
    {
        $Employees = User::with('job', 'roles:id')->get(['id', 'code', 'job_id', 'name', 'email', 'isAdmin', 'login_allow', 'password']);
        $Permissions = Role::get();
        //return $Employees->roles[0]->id;
        return view('backend.AdminEra.Index', get_defined_vars());
    }

    public function emp_active($id, Request $request)
    {
       // return $request;
        $employee = User::findOrFail($id);

        $employee->update([
            'isAdmin' => $request->isAdmin ?? false,
            'login_allow' => ($request->login_allow == "on") ? TRUE : FALSE,
            'password' => $request->password ? bcrypt($request->password) : $employee->password,
            'email' => $request->email ? $request->email : '',
        ]);
        $employee->assignRole([$request->role]);
        return redirect()->back()->with('success', trans('General.success'));

    }
}