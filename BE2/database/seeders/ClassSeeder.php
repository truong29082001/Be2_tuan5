<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){ 
            DB::table('classes')->insert([
                'classes_name' => "qh".($i+1), 
                'student_id'  => $i,
                'faculty_id'  => $i,
                'teacher_id'  => $i
            ]);
        }
    }
}
