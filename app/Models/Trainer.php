<?php

namespace App\Models;



class Trainer extends \Illuminate\Database\Eloquent\Model
{
    protected $table ='trainer';
     public  function search($input){
        $data = self::where('train_name','like',"%{$input}%")->paginate(5);
        return $data;
    }
}
