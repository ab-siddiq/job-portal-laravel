<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index($id,Company $company){
        return view('company.index',compact('company'));
    }
}
