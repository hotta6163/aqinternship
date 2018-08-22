<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
          ['id' => '1', 'department_name' => '開発', ],
          ['id' => '2', 'department_name' => '営業', ],
          ['id' => '3', 'department_name' => '総務', ],
          ['id' => '4', 'department_name' => '人事', ],
          ['id' => '5', 'department_name' => '広報', ],
          ['id' => '6', 'department_name' => 'その他', ],
      ]);
    }
}
