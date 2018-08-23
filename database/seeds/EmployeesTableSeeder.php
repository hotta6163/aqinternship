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
           ['family_name' => '茂木', 'given_name' => '聡史', 'family_name_kana' => 'もてぎ', 'given_name_kana' => 'さとし', 'division_id' => '21', 'birthday' => '1994/05/13', 'hire_date' => '2018/04/01',],
           ['family_name' => '雪絵', 'given_name' => 'レン', 'family_name_kana' => 'ゆきえ', 'given_name_kana' => 'れん', 'division_id' => '10', 'birthday' => '1963/12/31', 'hire_date' => '2012/4/2',],
           ['family_name' => '鬼谷', 'given_name' => '詢子', 'family_name_kana' => 'おにたに', 'given_name_kana' => 'じゅんこ', 'division_id' => '11', 'birthday' => '1985/7/27', 'hire_date' => '2012/4/2',],
           ['family_name' => '砂庭', 'given_name' => '千温', 'family_name_kana' => 'すなば', 'given_name_kana' => 'ちはる', 'division_id' => '7', 'birthday' => '1963/11/2', 'hire_date' => '2012/4/9',],
           ['family_name' => '新家', 'given_name' => '未喜', 'family_name_kana' => 'あらいえ', 'given_name_kana' => 'みき', 'division_id' => '2', 'birthday' => '1989/8/16', 'hire_date' => '2012/5/14',],
           ['family_name' => '立山', 'given_name' => '直仁', 'family_name_kana' => 'たちやま', 'given_name_kana' => 'なおひと', 'division_id' => '2', 'birthday' => '1961/7/10', 'hire_date' => '2012/5/25',],
           ['family_name' => '山入端', 'given_name' => '季子', 'family_name_kana' => 'やまには', 'given_name_kana' => 'きこ', 'division_id' => '8', 'birthday' => '1996/1/4', 'hire_date' => '2012/5/28',],
           ['family_name' => '多部田', 'given_name' => '善史', 'family_name_kana' => 'たべた', 'given_name_kana' => 'よしふみ', 'division_id' => '14', 'birthday' => '1992/2/21', 'hire_date' => '2012/5/31',],
           ['family_name' => '砂庭', 'given_name' => '隆', 'family_name_kana' => 'すなば', 'given_name_kana' => 'たかし', 'division_id' => '5', 'birthday' => '1998/11/2', 'hire_date' => '2011/4/9',]
       ]);
   }
}
