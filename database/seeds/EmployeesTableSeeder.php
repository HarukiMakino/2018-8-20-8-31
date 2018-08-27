<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
            'family_name' => '牧野',
            'given_name' => '陽来',
            'family_name_kana' => 'まきの',
            'given_name_kana' => 'はるき',
            'division_id' => '',
            'birthday' => '1998/11/9',
            'hire_date' => '2020/1/1',
                ]
            ,[
                'family_name' => '鈴鹿',
                'given_name' => '雄太',
                'family_name_kana' => 'すずか',
                'given_name_kana' => 'ゆうた',
                'division_id' => '',
                'birthday' => '1998/11/9',
                'hire_date' => '2020/1/1',

            ]
        ]);
    }
}
