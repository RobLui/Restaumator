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
                'weight_drink' => 1,
                'weight_bill' => 1,
                'time_drink' => 1,
                'time_bill' => 1,
                'tablenumber' => 1,
                'id_restaurants' => 1,
                'is_active' => false
            ],
            [
                'activated_at' => NOW(),
                'weight_drink' => 1,
                'weight_bill' => 1,
                'time_drink' => 1,
                'time_bill' => 1,
                'tablenumber' => 2,
                'id_restaurants' => 1,
                'is_active' => false
            ],
            [
                'activated_at' => NOW(),
                'weight_drink' => 1,
                'weight_bill' => 1,
                'time_drink' => 1,
                'time_bill' => 1,
                'tablenumber' => 3,
                'id_restaurants' => 1,
                'is_active' => false
            ],
            [
                'activated_at' => NOW(),
                'weight_drink' => 1,
                'weight_bill' => 1,
                'time_drink' => 1,
                'time_bill' => 1,
                'tablenumber' => 4,
                'id_restaurants' => 1,
                'is_active' => false
            ]
        ]);
    }
}
