<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\SchoolTrait;
class fund_accountsController extends Controller
{
    use SchoolTrait;
    public function index(){

        $school = $this->GetSchool();
        return view('backend.fund_account.index', get_defined_vars());
    }
}