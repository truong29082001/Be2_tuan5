<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class DiaryDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++){
            DB::table('diary_date')->insert([
                'date' => "01-05-23",
                'diary_week_id' =>  $i + 1,
                'comment_trainer' => "Comment of trainer"."$i",
                'comment_teacher' => "Comment of tearch"."$i",
                'job' => "Job"."$i",
            ]);
    }

    }
}
