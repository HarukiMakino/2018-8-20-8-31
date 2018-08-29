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
                'major'=>'1111',
                'minor'=>'1111',
                'position'=>'埼玉県',
            ],
            [
                'major'=>'2222',
                'minor'=>'2222',
                'position'=>'静岡県',
            ],
            [
                'major'=>'3333',
                'minor'=>'3333',
                'position'=>'岡山県',
            ]
        ]);
    }
}
