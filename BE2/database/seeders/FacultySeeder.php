<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){ 
            DB::table('facultys')->insert([
                'faculty_name' => "qh".($i+1),           
                'classes_id' => $i,   
            ]);
        }
        
    }
}
