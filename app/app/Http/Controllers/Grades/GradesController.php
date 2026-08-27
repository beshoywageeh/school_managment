<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Http\Requests\GradeStoreRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class GradesController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:grade-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:grade-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:grade-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:grade-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $school = $this->getSchool();
        $gradesQuery = Grade::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->with('user')
            ->withCount(['class_rooms', 'students']);

        if (Auth::user()->hasRole('Admin')) {
            $gradesQuery->withSum('fees', 'amount');
        } else {
            $gradesQuery->whereIn(
                'id',
                Auth::user()->grades()->pluck('grade_id'),
            );
        }

        $data = [
            'grades' => $gradesQuery->paginate(config('school.per_page')),
            'users' => User::select('id', 'name')->get(),
        ];

        return view('backend.Grades.Index', compact('data', 'school'));
    }

    public function create()
    {
        //
    }

    public function store(GradeStoreRequest $request)
    {
        $this->authorize('grade-create', Grade::class);
        try {
            $this->executeInTransaction(function () use ($request) {
                $grade = Grade::create([
                    'name' => $request->name,
                    'user_id' => Auth::id(),
                    'school_id' => $this->getSchool()->id,
                ]);
                $grade->users()->attach($request->user_id, [
                    'school_id' => $this->getSchool()->id,
                ]);
                $this->logActivity(
                    trans('log.actions.added'),
                    trans('log.models.grade.created', [
                        'value' => $request->name,
                    ]),
                );
            });
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
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
            $data['school'] = $this->getSchool();
            $data['report_data'] = Grade::where('id', $id)
                ->with(['class_rooms', 'class_rooms.students'])
                ->withCount(['class_rooms', 'students'])
                ->first();

            $pdf = PDF::loadView(
                'backend.Grades.report',
                ['data' => $data],
                [],
                [
                    'format' => 'A4',
                    'default_font_size' => 10,
                    'margin_left' => 2,
                    'margin_right' => 2,
                    'margin_top' => 2,
                    'margin_bottom' => 2,
                    'margin_header' => 2,
                    'margin_footer' => 2,
                    'orientation' => 'P',
                ],
            );

            return $pdf->stream($data['report_data']->name.'.pdf');
        } catch (\Exception $e) {
            \Log::error('PDF Generation failed: '.$e->getMessage());

            return back()->with(
                'error',
                'Failed to generate PDF. Please try again later.',
            );
        }
    }

    public function edit(string $id) {}

    public function update(GradeStoreRequest $request)
    {
        $this->authorize('grade-edit', Grade::class);
        try {
            $this->executeInTransaction(function () use ($request) {
                $grade = Grade::where('id', $request->id)->first();
                $grade->update([
                    'name' => $request->name,
                ]);
                $syncData = [];
                foreach ($request->user_id as $userId) {
                    $syncData[$userId] = [
                        'school_id' => $this->getSchool()->id,
                    ];
                }

                $grade->users()->sync($syncData);
                $this->logActivity(
                    trans('log.actions.updated'),
                    trans('log.models.grade.updated', [
                        'value' => $request->name,
                    ]),
                );
            });
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $this->authorize('grade-delete', Grade::class);
        $grade = Grade::withcount('class_rooms')->findorfail($id);
        if ($grade->class_rooms_count == 0) {
            $grade->delete();
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.grade.deleted', [
                    'value' => $grade->name,
                ]),
            );

            return redirect()
                ->back()
                ->with('success', trans('general.success'));
        }

        return redirect()
            ->back()
            ->with('error', trans('Grades.cannot_deleted'));
    }
}
