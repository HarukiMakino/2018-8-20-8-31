<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divitions')->insert([
            'name'=>'牧野',
            'department_id'=>'',
        ]);



    }
}
