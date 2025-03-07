<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /*** Display a listing of the resource.** @return \Illuminate\Http\Response*/
    /*public function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }*/

    /*** Display a listing of the resource.** @return \Illuminate\Http\Response*/
    public function index(Request $request)
    {
        $roles = Role::orderBy('id', 'DESC')->withCount('permissions')->get();

        return view('backend.roles.index', compact('roles'));
    }

    /*** Show the form for creating a new resource.** @return \Illuminate\Http\Response*/
    public function create()
    {
        $permissions = Permission::get()->groupBy('table');

        //return $permission;
        return view('backend.roles.create', compact('permissions'));
    }

    /*** Store a newly created resource in storage.** @param  \Illuminate\Http\Request  $request* @return \Illuminate\Http\Response*/
    public function store(Request $request)
    {
        //return $request;
        try {
            $this->validate($request, ['name' => 'required|unique:roles,name', 'permission' => 'required']);
            $role = Role::create(['name' => $request->input('name')]);
            $role->syncPermissions($request->input('permission'));

            return redirect()->route('roles.index')->with('success', trans('General.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /*** Display the specified resource.** @param  int  $id* @return \Illuminate\Http\Response*/
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join('role_has_permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')->where('role_has_permissions.role_id', $id)->get()->groupBy('table');

        return view('backend.roles.show', compact('role', 'rolePermissions'));
    }

    /*** Show the form for editing the specified resource.** @param  int  $id* @return \Illuminate\Http\Response*/
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get()->groupBy('table');
        $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')->all();

        return view('backend.roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    /*** Update the specified resource in storage.** @param  \Illuminate\Http\Request  $request* @param  int  $id* @return \Illuminate\Http\Response*/
    public function update(Request $request)
    {
        try {
            $this->validate($request, ['name' => 'required', 'permission' => 'required']);
            $role = Role::find($request->id);
            $role->name = $request->input('name');
            $role->save();
            $role->syncPermissions($request->input('permission'));

            return redirect()->route('roles.index')->with('success', trans('General.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());

        }

    }

    /*** Remove the specified resource from storage.** @param  int  $id* @return \Illuminate\Http\Response*/
    public function destroy($id)
    {
        \DB::table('roles')->where('id', $id)->delete();

        return redirect()->route('roles.index')->with('success', trans('General.success'));
    }
}
