<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Trainer;
class SearchController extends Controller
{

  public function search(Request $request){
        $obj = new Trainer();
        if($request->input('search_name')){
            $key = $request->input('search_name');
            $search = $obj ->search($key);
            return view('search',['search'=>$search,'key'=>$key]);
        }
        return view('search',[]);

}

  
}