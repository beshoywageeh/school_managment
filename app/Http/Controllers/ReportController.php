<?php

namespace App\Http\Controllers;

use App\Models\{acadmice_year,Grade,Recipt_payment,order,stock};
use Illuminate\Http\Request;
class ReportController extends Controller
{
    public function index()
    {
        $acadmeic_years = acadmice_year::where('status', 0)->get();
        return view('backend.report.index', get_defined_vars());
    }

    public function ExportStudents()
    {
        $students = Grade::with(['students'])->withcount('students')->get();

        return view('backend.report.students', get_defined_vars());
    }

    public function daily_paymnet(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $data = Recipt_Payment::whereBetween('date', [$start_date, $end_date])->with(['student'])->get();
        $date = [];
        $date['from'] = $start_date;
        $date['to'] = $end_date;

        return view('backend.report.daily_fee_view', get_defined_vars());
    }
    public function StockProducts(){
        $stocks=stock::with('orders')->get();
        //return $stocks;
        return view('backend.report.stock_product',get_defined_vars());
    }
}
