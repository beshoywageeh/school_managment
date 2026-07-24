<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;

class FundAccountsController extends Controller
{
    use SchoolTrait;

    public function index()
    {

        $school = $this->GetSchool();

        return view('backend.fund_account.index', compact('school'));
    }
}
