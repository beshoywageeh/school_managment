<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\Exchange_bond;

class ExchangeBondController extends Controller
{
    use LogsActivity,SchoolTrait;

    public function index()
    {

        $exchanges = Exchange_bond::where('school_id', $this->GetSchool()->id)->with(['student', 'acadmic_year'])->get();

        return view('backend.exchange_bond.index', get_defined_vars());
    }
}
