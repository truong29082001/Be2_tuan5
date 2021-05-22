<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function trainers()
    {
        $obj = new Trainer();
        $trainers = $obj->paginate(10);
        return view('trainers',['trainers'=>$trainers]);
    }
}
