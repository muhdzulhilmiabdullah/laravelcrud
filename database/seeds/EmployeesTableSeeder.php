<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//for loopd
    	for ($i = 0; $i < 100; $i++)  {
          DB::table('employees')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@example.com',
            'address' => str_random(10),
            'salary' => rand(),
            
        ]);
      }
    }
}
