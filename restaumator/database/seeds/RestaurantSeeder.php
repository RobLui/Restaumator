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
            'name' => "Het Huis",
            'owner' => "Sam",
            'address' => "Salesianenlaan 90, 2660 Antwerpen",
            'hash' => "hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE",
        ]);
    }
}
