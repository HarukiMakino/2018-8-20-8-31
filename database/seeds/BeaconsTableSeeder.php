<?php

use Illuminate\Database\Seeder;

class BeaconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beacons')->insert([
            [
                'major'=>'メジャー',
                'minor'=>'マイナー',
                'position'=>'ポジション',
            ],
            [
                'major'=>'3333',
                'minor'=>'3333',
                'position'=>'position',
            ]
        ]);
    }
}
