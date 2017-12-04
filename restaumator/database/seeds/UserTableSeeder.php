<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' =>'admin@admin.be',
            'password' => bcrypt('000000'),
            'id_restaurants' => 1
        ]);
    }
}
