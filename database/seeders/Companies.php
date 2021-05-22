<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000000; $i++){
            DB::table('companies')->insert([
                'company_name' => 'Truuongpro',
                'company_web' => 'facebook.com',
                'company_address' => 'Binh Dinh',
                'company_code' => '123',
                'company_phone' => '123456789',
            ]);
        }
    }
}
