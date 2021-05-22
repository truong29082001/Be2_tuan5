<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class SearchCategory extends Controller
{
    public function search(Request $request)
    {
        $obj = new Company();       
        $key = $request->input('category_id');

        if($key){     
            $results = $obj->search($key);
            return view('searchCompanies',['results'=>$results]);
        }
        return view('searchCompanies',[]);
    }
}
