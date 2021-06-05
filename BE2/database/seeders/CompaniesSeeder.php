<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('companies')->insert([
                'company_name' => 'Hoanghuulong'.$i,
                'company_web' => 'abc'.$i.'.com',
                'company_address' => 'Viet Nam',
                'company_code' => 'code 123',
                'company_phone' => '01234567891',
            ]);
        }
       
    }
}
