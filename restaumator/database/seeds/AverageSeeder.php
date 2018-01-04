<?php

use Illuminate\Database\Seeder;

class AverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('averages')->insert(
            [
                'bill_time' => '10',
                'drink_time' => '00:10:00',
                'id_restaurants' => 1
            ]
        );
    }
}
