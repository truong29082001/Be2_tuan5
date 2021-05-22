<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompaniesController extends Controller
{
    public function companies()
    {
        $obj = new Company();
        $companies = $obj->paginate(10);
        return view('companies',['companies'=>$companies]);
    }
}
