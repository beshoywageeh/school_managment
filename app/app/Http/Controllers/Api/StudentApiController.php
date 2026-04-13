<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $schoolId = $request->user()->school_id;

        $students = Student::where('school_id', $schoolId)
            ->with(['grade', 'classroom', 'parent'])
            ->paginate(15);

        return response()->json([
            'data' => StudentResource::collection($students),
            'meta' => [
                'current_page' => $students->currentPage(),
                'last_page' => $students->lastPage(),
                'total' => $students->total(),
            ],
        ]);
    }

    public function show(Student $student): JsonResponse
    {
        $student->load(['grade', 'classroom', 'parent', 'nationality']);

        return response()->json([
            'data' => new StudentResource($student),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'national_id' => 'required|string|size:14|unique:students',
            'gender' => 'required|integer',
            'grade_id' => 'required|exists:grades,id',
            'classroom_id' => 'required|exists:class_rooms,id',
            'address' => 'required|string',
        ]);

        $validated['school_id'] = $request->user()->school_id;
        $validated['user_id'] = $request->user()->id;
        $validated['code'] = mt_rand(1000000000, 9999999999);

        $student = Student::create($validated);

        return response()->json([
            'data' => new StudentResource($student),
            'message' => 'Student created successfully',
        ], 201);
    }

    public function update(Request $request, Student $student): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'birth_date' => 'sometimes|date',
            'national_id' => 'sometimes|string|size:14|unique:students,national_id,'.$student->id,
            'gender' => 'sometimes|integer',
            'grade_id' => 'sometimes|exists:grades,id',
            'classroom_id' => 'sometimes|exists:class_rooms,id',
            'address' => 'sometimes|string',
        ]);

        $student->update($validated);
        $student->load(['grade', 'classroom', 'parent']);

        return response()->json([
            'data' => new StudentResource($student),
            'message' => 'Student updated successfully',
        ]);
    }

    public function destroy(Student $student): JsonResponse
    {
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully',
        ]);
    }

    public function grades(Request $request): JsonResponse
    {
        $grades = Grade::where('school_id', $request->user()->school_id)
            ->get(['id', 'name']);

        return response()->json(['data' => $grades]);
    }

    public function classes(Request $request): JsonResponse
    {
        $classes = class_room::where('school_id', $request->user()->school_id)
            ->get(['id', 'name', 'grade_id']);

        return response()->json(['data' => $classes]);
    }

    public function academicYears(Request $request): JsonResponse
    {
        $years = acadmice_year::where('school_id', $request->user()->school_id)
            ->get(['id', 'year', 'view', 'status']);

        return response()->json(['data' => $years]);
    }
}
