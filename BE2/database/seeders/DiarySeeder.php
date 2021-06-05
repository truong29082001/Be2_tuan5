<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 11; $i++){
            DB::table('diary')->insert([
                'course_catalog_id' => rand(1, 2),
                'courses_id' => rand(1, 10),
                'teacher_id' => rand(1, 10),
                'trainer_id' => rand(1, 10),
                'student_id' =>  rand(1, 10),
                'diary_week_id' =>  rand(1, 7),
            ]);
    }

    }
}
