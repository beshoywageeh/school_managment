<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeeInvoiceResource;
use App\Models\Fee_invoice;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FeeInvoiceApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $schoolId = $request->user()->school_id;

        $invoices = Fee_invoice::where('school_id', $schoolId)
            ->with(['students', 'fees', 'grades', 'classes'])
            ->paginate(15);

        return response()->json([
            'data' => FeeInvoiceResource::collection($invoices),
            'meta' => [
                'current_page' => $invoices->currentPage(),
                'last_page' => $invoices->lastPage(),
                'total' => $invoices->total(),
            ],
        ]);
    }

    public function show(Fee_invoice $fee_invoice): JsonResponse
    {
        $fee_invoice->load(['students', 'fees', 'grades', 'classes', 'acd_year']);

        return response()->json([
            'data' => new FeeInvoiceResource($fee_invoice),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'school_fee_id' => 'required|exists:school__fees,id',
            'academic_year_id' => 'required|exists:acadmice_years,id',
        ]);

        $student = Student::findOrFail($validated['student_id']);
        $schoolFee = \App\Models\school_fee::findOrFail($validated['school_fee_id']);

        $invoice = Fee_invoice::create([
            'student_id' => $validated['student_id'],
            'grade_id' => $student->grade_id,
            'classroom_id' => $student->classroom_id,
            'school_fee_id' => $validated['school_fee_id'],
            'academic_year_id' => $validated['academic_year_id'],
            'invoice_date' => now()->toDateString(),
            'amount' => $schoolFee->amount,
            'status' => 'notpayed',
            'school_id' => $request->user()->school_id,
            'user_id' => $request->user()->id,
        ]);

        return response()->json([
            'data' => new FeeInvoiceResource($invoice),
            'message' => 'Fee invoice created successfully',
        ], 201);
    }

    public function destroy(Fee_invoice $fee_invoice): JsonResponse
    {
        $fee_invoice->delete();

        return response()->json([
            'message' => 'Fee invoice deleted successfully',
        ]);
    }
}
