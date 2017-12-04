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
        DB::table('averages')->insert([
            'bill_time' => '20',
            'drink_time' => '15',
            'id_restaurants' => 1
        ]);
    }
}