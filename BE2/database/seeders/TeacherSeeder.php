<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){ 
            DB::table('teachers')->insert([
               
                'teacher_name' => "qh".($i+1),        
                'teacher_address' => Str::random(10),
                'teacher_email' => Str::random(20),
                'teacher_phone' => Str::random(10),  
                'classes_id' => $i,
                'user_id'  => $i,
                'faculty_id'  => $i,
                'diary_id'  => $i
            ]);
        }
    }
}

