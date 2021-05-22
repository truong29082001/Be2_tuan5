<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class SearchTrainerController extends Controller
{
    public function search(Request $request)
    {
        $obj = new Trainer();       
        $key = $request->input('data_search');

        if($key){     
            $results = $obj->search($key);
            return view('search',['results'=>$results]);
        }
        return view('search',[]);
    }
}
