<?php

namespace App\Http\Controllers\Students;

use App\Enums\Status;
use App\Enums\Student_Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentStoreRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\Nationality;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Services\Finance\FinancialService;
use App\Services\Student\StudentImportService;
use App\Services\Student\StudentQueryService;
use App\Services\Student\StudentRegeister;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StudentsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        private FinancialService $StudentFinance,
        private StudentRegeister $StudentCreation,
        private StudentImportService $StudentImportService,
        private StudentQueryService $studentQuery,
    ) {
        $this->middleware('permission:Students-list', [
            'only' => ['index', 'show', 'getclasses'],
        ]);
        $this->middleware('permission:Students-create', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('permission:Students-edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('permission:Students-delete', [
            'only' => ['softDelete', 'forceDelete'],
        ]);
        $this->middleware('permission:Students-graduated', [
            'only' => ['softDelete'],
        ]);
        $this->middleware('permission:Student-restore', [
            'only' => ['restore'],
        ]);
        $this->middleware('permission:graduated-list', [
            'only' => ['graduated'],
        ]);
        $this->middleware('permission:Students-Import_Excel', [
            'only' => ['Excel_Import'],
        ]);
    }

    public function index(Request $request)
    {
        $school = $this->getSchool();
        $gradeOptions = Grade::pluck('name', 'id')->toArray();

        $columns = [
            [
                'key' => 'name',
                'label' => trans('student.name'),
                'sortable' => true,
                'filter_type' => 'text',
                'filter_key' => 'students',
            ],
            [
                'key' => 'parent_name',
                'label' => trans('student.parent_name'),
                'sortable' => true,
            ],
            [
                'key' => 'grade_name',
                'label' => trans('fee_invoice.grade'),
                'filter_type' => 'select_relation',
                'filter_key' => 'grade_id',
                'options' => $gradeOptions,
                'sortable' => true,
            ],
            [
                'key' => 'classroom_name',
                'label' => trans('fee_invoice.class'),
                'sortable' => false,
            ],
            [
                'key' => 'actions',
                'label' => trans('general.actions'),
                'sortable' => false,
            ],
        ];

        $students = $this->studentQuery->getFilteredQuery(
            $request,
            $this->schoolId(),
        );

        if ($request->expectsJson()) {
            return response()->json([
                'items' => $students->items(),
                'pagination' => [
                    'current_page' => $students->currentPage(),
                    'last_page' => $students->lastPage(),
                ],
            ]);
        }

        return view(
            'backend.Students.Index',
            compact('school', 'gradeOptions', 'columns', 'students'),
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $school = $this->getSchool();
        $grades = Grade::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->get(['id', 'name']);
        $parents = MyParent::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->get([
            'id',
            'father_name',
        ]);
        $acadmice_years = AcademicYear::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->where('status', Status::CLOSE)
            ->get(['id', 'view']);
        $nationalitys = Nationality::get(['id', 'name']);

        return view(
            'backend.Students.create',
            compact(
                'school',
                'grades',
                'parents',
                'acadmice_years',
                'nationalitys',
            ),
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {
        $this->authorize('Students-create', Student::class);
        try {
            DB::Transaction(function () use ($request) {
                $school = $this->getSchool();
                $data = $this->StudentCreation->StudentRegeister($request, $school);
                $school_fee = SchoolFee::where('academic_year_id', $data['student']->acadmiecyear_id)
                    ->where('grade_id', $data['student']->grade_id)
                    ->where('classroom_id', $data['student']->classroom_id)
                    ->get();
                $school_fee->each(function ($fee) use ($data, $school) {
                    $this->StudentFinance->FeeInvoice(
                        $data['student'],
                        $fee,
                        $data['student']->acadmiecyear_id,
                        $school->id,
                    );
                });
            });
            session()->flash('success', trans('general.success'));

            return redirect()->route('students.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $student = Student::where('id', $id)
                ->with([
                    'user:id,name',
                    'grade:id,name',
                    'classroom:id,name',
                    'parent:id,father_name,mother_name,father_phone,mother_phone,father_job',
                    'nationality',
                    'studentAccount',
                    'fee_invoice',
                ])
                ->withsum('studentAccount', 'debit')
                ->withsum('studentAccount', 'credit')
                ->first();
            $school = $this->getSchool();

            return view('backend.Students.show', compact('student', 'school'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $school = $this->getSchool();
            $grades = Grade::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->get(['id', 'name']);
            $parents = MyParent::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->get(['id', 'father_name']);
            $student = Student::findorfail($id);

            return view(
                'backend.Students.edit',
                compact('grades', 'parents', 'student', 'school'),
            );
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentStoreRequest $request)
    {
        $this->authorize('Students-edit', Student::class);
        try {
            $student = Student::findorfail($request->id);
            $student->update([
                'name' => $request->student_name,
                'birth_date' => $request->birth_date,
                'join_date' => $student->join_date,
                'gender' => $request->gender,
                'grade_id' => $request->grade,
                'parent_id' => $request->parents,
                'classroom_id' => $request->class_room,
                'address' => $request->address,
                'student_status' => Student_Status::fromString(
                    $request->std_status,
                ),
                'national_id' => $request->national_id,
                'religion' => MyParent::findorfail($request->parents)->religion,
                'birth_at_begin' => $this->calculateAgeAsOfOctoberFirst(
                    $request->birth_date,
                ),

                'nationality_id' => $request->nationality,
                'user_id' => Auth::Id(),
            ]);
            session()->flash('success', trans('general.success'));
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.student.updated', [
                    'student_code' => $student->code,
                ]),
            );

            return redirect()->route('students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function graduated()
    {
        $students = Student::onlyTrashed()->with('grade', 'classroom')->get();
        $school = $this->getSchool();

        return view(
            'backend.Students.graduated',
            compact('students', 'school'),
        );
    }

    public function restore($id)
    {
        $student = Student::where('id', $id)->first();
        $student->restore();
        $this->logActivity(
            trans('log.actions.restored'),
            trans('log.models.student.restored', [
                'student_name' => $student->name,
            ]),
        );

        return redirect()
            ->route('Students.index')
            ->with('success', trans('general.success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function softDelete(string $id, Request $request)
    {
        $this->authorize('Students-delete', Student::class);
        try {
            $student = Student::findorfail($id);
            $student->delete();
            $this->logActivity(
                trans('log.actions.graduated'),
                trans('log.models.student.graduated', [
                    'student_name' => $student->name,
                ]),
            );

            return redirect()
                ->route('students.graduated')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function forceDelete(string $id, Request $request)
    {
        $this->authorize('Students-delete', Student::class);
        try {
            $student = Student::onlyTrashed()->where('id', $id)->first();

            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.student.deleted', [
                    'student_name' => $student->name,
                ]),
            );
            $student->forceDelete();

            return redirect()
                ->route('students.graduated')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function getclasses($id)
    {
        $class_rooms = ClassRoom::where('school_id', $this->getSchool()->id)
            ->where('grade_id', $id)
            ->get(['id', 'name']);

        return response()->json($class_rooms);
    }

    public function Excel_Import(
        Request $request,
        StudentImportService $studentImportService,
    ) {
        try {
            $request->validate(
                [
                    'excel' => 'required|file|mimes:xlsx,xls,csv|max:10240',
                ],
                [
                    'excel.required' => '⚠️ Please select a file to upload',
                    'excel.file' => '⚠️ Invalid file format',
                    'excel.mimes' => '⚠️ Only Excel files (.xlsx, .xls) are allowed',
                    'excel.max' => '⚠️ File size exceeds 10MB limit',
                ],
            );

            $result = $studentImportService->StudentImport(
                $request->file('excel'),
                Auth::user()->id,
                Auth::user()->school_id,
            );

            if (! empty($result['errors'])) {
                $errorCount = count($result['errors']);
                $importedCount = $result['imported'] ?? 0;
                session()->flash(
                    'warning',
                    "✅ Imported {$importedCount} students. ⚠️ {$errorCount} rows failed due to invalid data.",
                );
            } else {
                session()->flash(
                    'success',
                    '✅ Students imported successfully!',
                );
            }

            return redirect()->route('students.index');
        } catch (\NoTypeDetectedException $e) {
            session()->flash(
                'error',
                '⚠️ Could not read the file. Please ensure it\'s a valid Excel file.',
            );
            Log::error('Excel import error: '.$e->getMessage());

            return redirect()->back()->withInput();
        } catch (QueryException $e) {
            session()->flash(
                'error',
                '⚠️ Database error occurred. Please check your data and try again.',
            );
            Log::error('Student import DB error: '.$e->getMessage());

            return redirect()->back()->withInput();
        } catch (\Exception $e) {
            session()->flash(
                'error',
                '⚠️ An error occurred during import: '.$e->getMessage(),
            );
            Log::error($e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
