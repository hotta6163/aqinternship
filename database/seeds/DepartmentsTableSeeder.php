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
          ['department_id' => '1', 'department_name' => '開発', ],
          ['department_id' => '2', 'department_name' => '営業', ],
          ['department_id' => '3', 'department_name' => '総務', ],
          ['department_id' => '4', 'department_name' => '人事', ],
          ['department_id' => '5', 'department_name' => '広報', ],
          ['department_id' => '6', 'department_name' => 'その他', ],
      ]);
    }
}
