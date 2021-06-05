<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){ 
            DB::table('students')->insert([
                'student_name' => "qh".($i+1), 
               
                'student_address' => Str::random(10),
                'student_email' => Str::random(20),
                'student_phone' => Str::random(10),  
                'user_id'  => rand(1,10),
                'faculty_id'  => rand(1,10),
                'diary_id'  => rand(1,10)
            ]);
        }
    }
}


