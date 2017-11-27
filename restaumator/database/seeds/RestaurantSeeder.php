<?php

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => 1,
            'owner' => 1,
            'address' => 1,
            'hash' => 1,
        ]);
    }
}
