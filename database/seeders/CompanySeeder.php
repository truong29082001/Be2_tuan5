<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<100;$i++){
            DB::table('companies')->insert([
                'company_name' => 'Truong123',
                'company_web' => 'Web2_Truong',
                'company_address' => 'Thu Duc 123',
                'company_code' => 'laravel',
                'company_phone' => '01693861435'
            ]);
        }
    }
}
