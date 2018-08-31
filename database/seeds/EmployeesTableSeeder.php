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
                'position'=>'岡山',
            ],
            [
                'family_name' => '鈴鹿',
                'given_name' => '雄太',
                'family_name_kana' => 'すずか',
                'given_name_kana' => 'ゆうた',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '佐藤',
                'given_name' => '大翔',
                'family_name_kana' => 'さとう',
                'given_name_kana' => 'たいしょう',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '鈴木',
                'given_name' => '葵',
                'family_name_kana' => 'すずき',
                'given_name_kana' => 'あおい',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '高橋',
                'given_name' => '悠真',
                'family_name_kana' => 'たかはし',
                'given_name_kana' => 'ゆうみ',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '田中',
                'given_name' => '陽菜',
                'family_name_kana' => 'たなか',
                'given_name_kana' => 'はるな',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '伊藤',
                'given_name' => '蓮',
                'family_name_kana' => 'いとう',
                'given_name_kana' => 'れん',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '渡辺',
                'given_name' => '太陽',
                'family_name_kana' => 'わたなべ',
                'given_name_kana' => 'たいよう',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '山本',
                'given_name' => '結衣',
                'family_name_kana' => 'やまもと',
                'given_name_kana' => 'ゆい',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '中村',
                'given_name' => 'さくら',
                'family_name_kana' => 'なかむら',
                'given_name_kana' => 'さくら',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '小林',
                'given_name' => '奏',
                'family_name_kana' => 'こばやし',
                'given_name_kana' => 'かなで',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '加藤',
                'given_name' => '凛',
                'family_name_kana' => 'かとう',
                'given_name_kana' => 'りん',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '吉田',
                'given_name' => '颯',
                'family_name_kana' => 'よしだ',
                'given_name_kana' => 'はやて',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '山田',
                'given_name' => '疾風',
                'family_name_kana' => 'やまだ',
                'given_name_kana' => 'はやて',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '佐々木',
                'given_name' => '花温',
                'family_name_kana' => 'ささき',
                'given_name_kana' => 'かおん',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ],
            [
                'family_name' => '清水',
                'given_name' => '大和',
                'family_name_kana' => 'しみず',
                'given_name_kana' => 'やまと',
                'division_id' => '',
                'birthday' => '1900/1/1',
                'hire_date' => '1950/1/1',
                'position'=>'東京',
            ]

        ]);
    }
}
