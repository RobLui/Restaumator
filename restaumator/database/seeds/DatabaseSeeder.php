<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(
             [
                // 1ste seed
                    RestaurantSeeder::class,
                 // 2e seed
                    RestaurantTableSeeder::class,
                 // 3e seed
                    UserTableSeeder::class,
                 // 4e seed
                    AverageSeeder::class,
             ]
         );
    }
}
