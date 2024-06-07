<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminEraController extends Controller
{
    public function Index(){
        $Employees = User::whereIn('type',['1','3','4'])->get(['id','code','name','email','isAdmin','login_allow','password','type']);
        $Permissions = Role::get();
       // return $Employees;
        return view('backend.AdminEra.Index',get_defined_vars());
    }
    public function emp_active($id,Request $request){
       // return $request;
        $employee = User::findOrFail($id);

    $employee->update([
        'isAdmin' =>  $request->isAdmin ?? false,
        'login_allow' => $request->login_allow ?? false,
        'password' => $request->password ? bcrypt($request->password) : $employee->password,
        'email'=>$request->email ? $request->email : ''
    ]);
    $employee->assignRole([$request->role]);
    return redirect()->back()->with('success', trans('General.success'));
        
    }
}