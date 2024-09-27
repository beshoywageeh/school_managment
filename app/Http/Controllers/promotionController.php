<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Grade;
use App\Models\Student;
use App\Models\promotion;
use Illuminate\Http\Request;

class promotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = promotion::with('students', 'f_grade', 'f_class', 't_grade', 't_class')->get();
        return view('backend.promotion.Index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        return view('backend.promotion.create', compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $Students = Student::where('grade_id', $request->old_grade)->where('classroom_id', $request->old_class)->get();
            if ($Students->count() < 1) {
                return redirect()->back()->with('error', trans('promotions.no_data'));
            }
            $Students->toQuery()->update([
                'classroom_id' => $request->new_class,
                'grade_id' => $request->new_grade,
            ]);
            foreach ($Students as $student) {
                promotion::updateOrCreate([
                    'student_id' => $student->id,
                    'from_grade' => $request->old_grade,
                    'from_class' => $request->old_class,
                    'to_grade' => $request->new_grade,
                    'to_class' => $request->new_class,
                ]);
            }
            DB::commit();

            return redirect()->route('promotion.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $promotions = promotion::findorfail($id);
            Student::where('id', $promotions->student_id)
                ->update([
                    'classroom_id' => $promotions->from_class,
                    'grade_id' => $promotions->from_grade,
                ]);
            $promotions->delete();
            DB::commit();
            return redirect()->route('promotion.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
