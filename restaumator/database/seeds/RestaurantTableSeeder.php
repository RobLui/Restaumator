<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restauranttables')->insert([
            [
                'activated_at' => NOW(),
                'time_drink' => '00:00:00',
                'time_bill' => '00:00:00',
                'tablenumber' => 1,
                'id_restaurants' => 1,
                'active_drink' => false,
                'active_bill' => false,
                'is_active' => false
            ],
            [
                'activated_at' => NOW(),
                'time_drink' => '00:00:00',
                'time_bill' => '00:00:00',
                'tablenumber' => 2,
                'id_restaurants' => 1,
                'active_drink' => false,
                'active_bill' => false,
                'is_active' => false
            ],
            [
                'activated_at' => NOW(),
                'time_drink' => '00:00:00',
                'time_bill' => '00:00:00',
                'tablenumber' => 3,
                'id_restaurants' => 1,
                'active_drink' => false,
                'active_bill' => false,
                'is_active' => false
            ],
            [
                'activated_at' => NOW(),
                'time_drink' => '00:00:00',
                'time_bill' => '00:00:00',
                'tablenumber' => 4,
                'id_restaurants' => 1,
                'active_drink' => false,
                'active_bill' => false,
                'is_active' => false
            ]
        ]);
    }
}
