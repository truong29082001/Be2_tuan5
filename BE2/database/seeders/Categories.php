<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryInsert='insert into categories values (null,?);';
            DB::insert($queryInsert,['HH1']);
            DB::insert($queryInsert,['HH2']);
            DB::insert($queryInsert,['HH3']);
            DB::insert($queryInsert,['HH4']);
            DB::insert($queryInsert,['HH5']);
            DB::insert($queryInsert,['HH6']);
            DB::insert($queryInsert,['HH7']);
            DB::insert($queryInsert,['HH8']);
            DB::insert($queryInsert,['HH9']);
            DB::insert($queryInsert,['HH10']);
    }
}
