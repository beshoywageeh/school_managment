<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\acadmice_year;
use App\Models\Grade;
use App\Models\promotion;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class promotionController extends Controller
{
    use LogsActivity;

    /*
    *
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = promotion::with('students:id,name', 'f_grade:id,name', 'f_class:id,name', 't_grade:id,name', 't_class:id,name', 't_acc:id,view', 'f_acc:id,view')->get();

        return view('backend.promotion.Index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        $acc_year = acadmice_year::where('status', 0)->get();

        return view('backend.promotion.create', get_defined_vars());
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
                'acadmiecyear_id' => $request->acc_to,
            ]);
            foreach ($Students as $student) {
                promotion::updateOrCreate([
                    'student_id' => $student->id,
                    'from_grade' => $request->old_grade,
                    'from_class' => $request->old_class,
                    'to_grade' => $request->new_grade,
                    'to_class' => $request->new_class,
                    'to_acc' => $request->acc_to,
                    'from_acc' => $request->acc_from,
                ]);
                $this->logActivity('ترقية طالب', ' تم ترقية طالب '.$Students->where('id', $student->id)->first()->name);
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
            $this->logActivity('ترقية طالب', 'تم إلفاء ترقية طالب', $promotions->student->name);
            DB::commit();

            return redirect()->route('promotion.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
