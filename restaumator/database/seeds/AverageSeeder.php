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
            'drink_time' => new DateTime('now'),
            'id_restaurants' => 1
        ]);
    }
}
