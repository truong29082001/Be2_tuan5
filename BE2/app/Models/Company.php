<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'Companies';

    public function search($value)
    {
        return self::where("category_id","=",$value)->paginate(10);
    }
}
