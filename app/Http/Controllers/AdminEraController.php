<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminEraController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function Index()
    {
        $school = $this->getSchool();
        $Employees = User::with('roles:id')->get(['id', 'code', 'type', 'name', 'email', 'isAdmin', 'login_allow', 'password']);
        $Permissions = Role::get();

        return view('backend.AdminEra.index', get_defined_vars());
    }

    public function emp_active($id, Request $request)
    {
        // return $request;
        $employee = User::findOrFail($id);

        $employee->update([
            'isAdmin' => $request->isAdmin ?? false,
            'login_allow' => ($request->login_allow == 'on') ? true : false,
            'password' => $request->password ? bcrypt($request->password) : $employee->password,
            'email' => $request->email ? $request->email : '',
        ]);
        $employee->assignRole([$request->role]);
        $this->logActivity(trans('log.actions.status_changed'), trans('log.models.user.status_changed', ['name' => $employee->name]));

        return redirect()->back()->with('success', trans('General.success'));

    }
}
