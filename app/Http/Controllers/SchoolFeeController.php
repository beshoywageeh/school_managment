<?php

namespace App\Http\Controllers;

use App\Models\School_Fee;
use App\Http\Requests\StoreSchool_FeeRequest;
use App\Http\Requests\UpdateSchool_FeeRequest;
use App\Models\Grade;
use App\Models\class_room;
class SchoolFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $School_Fees = School_Fee::with('grade', 'classroom')->paginate(10);
         return view('backend.school_fees.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try{
            $grades = Grade::get();
            return view('backend.school_fees.create',get_defined_vars());
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchool_FeeRequest $request)
    {
         try{
            $school_fee = new School_Fee();
            $school_fee->grade_id = $request->grade_id;
            $school_fee->classroom_id = $request->classroom_id;
            $school_fee->user_id = $request->user()->id; // Assuming user() method returns the authenticated user
            $school_fee->description = $request->description;
            $school_fee->amount = $request->amount;
            $school_fee->save();
            session()->flash('success',trans('general_success'));
            return view('',get_defined_vars());
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(School_Fee $school_Fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School_Fee $school_Fee)
    {
        try{
            $school_Fee= School_Fee::findorFail($school_Fee);
            session()->flash('success',trans('general_success'));
            return redirect()->back();
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchool_FeeRequest $request, School_Fee $school_Fee)
    {
        try{

            session()->flash('success',trans('general_success'));
            return view('',get_defined_vars());
        }catch(\Exception $e){

            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School_Fee $school_Fee)
    {
        try{

            School_Fee::destroy($school_Fee);
            session()->flash('success',trans('general_success'));
            return view('',get_defined_vars());
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }
    public function getclasses($id){
        $class_rooms = class_room::where('grade_id',$id)->get(['id','class_name']);
        return response()->json($class_rooms);
    }
}