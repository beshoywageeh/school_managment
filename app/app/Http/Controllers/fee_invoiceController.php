<?php

namespace App\Http\Controllers;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\Fee_invoice;
use App\Models\School_Fee as school_fee;
use App\Models\Student;
use App\Models\Grade;
use App\Services\FinancialService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fee_invoiceController extends Controller
{
    use LogsActivity, SchoolTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $school = $this->getSchool();
        $gradeOptions = Grade::pluck("name", "id")->toArray();

        $columns = [
            [
                "key" => "invoice_date",
                "label" => trans("fee_invoice.date"),
                "sortable" => true,
            ],
            [
                "key" => "students.name",
                "label" => trans("fee_invoice.name"),
                "filter_type" => "text",
                "filter_key" => "students", // الحقل الذي سيرسله Axios
                "sortable" => false,
            ],
            [
                "key" => "fees_sum_amount",
                "label" => trans("fee_invoice.debit"),
                "sortable" => false, // حقول الـ Sum يفضل تعطيل الترتيب عليها مؤقتاً
            ],
            [
                "key" => "grades.name",
                "label" => trans("fee_invoice.grade"),
                "filter_type" => "select_relation",
                "filter_key" => "grade_id",
                "options" => $gradeOptions, // تم تعديل الاسم إلى options بالجمع ✅
                "sortable" => true,
            ],
            [
                "key" => "classes.name",
                "label" => trans("fee_invoice.class"),
                "sortable" => false,
            ],
            [
                "key" => "acd_year.view",
                "label" => trans("fee_invoice.acadmic"),
                "sortable" => false,
            ],
        ];

        // 1. نبدأ ببناء الاستعلام دون تنفيذ (بدون paginate أو get)
        $query = Fee_invoice::query()
            ->where("school_id", $school->id)
            ->with([
                "students:id,name",
                "grades:id,name",
                "classes:id,name",
                "acd_year:id,view",
            ])
            ->withSum("fees", "amount");

        // 2. تطبيق فلاتر البحث الآن (بناءً على الـ filter_key المرسل من المكون)
        if ($request->filled("students")) {
            // تم تغييرها من name إلى students لتوحيد المفتاح ✅
            $query->whereHas("students", function ($q) use ($request) {
                $q->where("name", "like", "%" . $request->students . "%");
            });
        }

        if ($request->filled("grade_id")) {
            // تأكد أن اسم الحقل في جدول فواتير الرسوم هو grade_id أو قم بتعديله للاسم الفعلي بدقة
            $query->where("grade_id", $request->grade_id);
        }

        // 3. الترتيب الديناميكي (Sorting)
        $sortBy = $request->get("sort_by", "id");
        $sortOrder = $request->get("sort_order", "desc");

        if (str_contains($sortBy, ".")) {
            // ترتيب بحسب حقل في جدول مرتبط (اختياري)
        } else {
            $query->orderBy($sortBy, $sortOrder);
        }

        // 4. تنفيذ الـ Pagination في النهاية تماماً بعد دمج الفلاتر والترتيب 🚀
        $fee_invoices = $query->paginate(10);

        // 5. الاستجابة لـ Axios
        if ($request->expectsJson()) {
            return response()->json([
                "items" => $fee_invoices->items(),
                "pagination" => [
                    "current_page" => $fee_invoices->currentPage(),
                    "last_page" => $fee_invoices->lastPage(),
                ],
            ]);
        }

        return view("backend.fee_invoices.index", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($student_id)
    {
        try {
            $school = $this->getSchool();
            $student = Student::where("id", $student_id)
                ->where("school_id", $school->id)
                ->first();
            $school_fees = school_fee::where("school_id", $school->id)
                ->where("grade_id", $student->grade_id)
                ->where("classroom_id", $student->classroom_id)
                ->get(["id", "title", "amount"]);

            if (!$student || $school_fees->count() == 0) {
                session()->flash("info", trans("general.no_data_found"));

                return redirect()->back();
            }

            return view("backend.fee_invoices.create", get_defined_vars());
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, FinancialService $service)
    {
        $List_Fees = $request->list_fees;
        DB::beginTransaction();
        try {
            $ac_year = acadmice_year::where("status", "0")->first();
            foreach ($List_Fees as $list_fee) {
                $amount = school_fee::where(
                    "id",
                    $list_fee["fee"],
                )->first()->amount;
                $student = Student::findorfail($list_fee["student_id"]);
                $service->FeeInvoice(
                    $student,
                    $list_fee["fee"],
                    $ac_year->id,
                    $this->getSchool()->id,
                );
                $service->CreateStudentAccount(
                    $student,
                    $list_fee["fee"],
                    $ac_year->id,
                    "invoice",
                    0.0,
                    $amount,
                );
            }
            $this->logActivity(
                trans("log.actions.added"),
                trans("log.models.fee_invoice.created", [
                    "name" => $student->name,
                ]),
            );
            DB::commit();

            return redirect()
                ->route("fee_invoice.index")
                ->with("success", trans("general.success"));
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $school = $this->getSchool();
        $invoice_details = Fee_invoice::where("id", $id)
            ->with("students", "fees", "grades", "classes")
            ->first();
        $tafqeet = Numbers::TafqeetMoney(
            $invoice_details->fees->amount,
            "EGP",
            "ar",
        );

        return view("backend.fee_invoices.show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = $this->getSchool();
        $fee = Fee_invoice::where("id", $id)
            ->with("students", "fees")
            ->first();
        $sfees = school_fee::where("grade_id", $fee->grade_id)
            ->where("classroom_id", $fee->classroom_id)
            ->get();

        return view("backend.fee_invoices.edit", get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FinancialService $service)
    {
        DB::beginTransaction();
        try {
            // Retrieve the existing fee invoice by its ID
            $fee = Fee_invoice::findOrFail($request->id);
            $student = Student::findorfail($fee->student_id);
            $ac_year = acadmice_year::where("status", "0")->first();

            $service->FeeInvoice(
                $student,
                $fee->id,
                $ac_year->id,
                $this->getSchool()->id,
            );
            $service->CreateStudentAccount(
                $student,
                $fee->id,
                $ac_year->id,
                "invoice",
                0.0,
                $fee->amount,
            );

            $this->logActivity(
                trans("log.actions.updated"),
                trans("log.models.fee_invoice.updated", [
                    "name" => $fee->students->name,
                ]),
            );
            DB::commit();

            return redirect()
                ->route("fee_invoice.index")
                ->with("success", trans("general.success"));
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $fee = Fee_invoice::findorFail($id);
            $this->logActivity(
                trans("log.actions.deleted"),
                trans("log.models.fee_invoice.deleted", [
                    "name" => $fee->students->name,
                ]),
            );
            $fee->delete();

            return redirect()
                ->route("fee_invoice.index")
                ->with("success", trans("general.success"));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
