<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function trainer(){
        $obj = new Trainer();
            $trainer = $obj->all();
           $trainer  = $obj->simplePaginate(5);
          return view ('trainer ',['trainer'=>$trainer ]);
    }
}
