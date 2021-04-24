<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            DB::table('trainer')->insert([
                'train_name' => 'xuantruong',
                'train_wed' => 'laravel',
                'train_email' => 'truongpx.10.student@fit.tdc.edu.vn',
                'train_phone' => '01693861435'
            ]);
        }
    }
}
