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
            'first_name' => "danny",
            'last_name' => "torres",
            'username' => "dtorres",
            'email' => "dtorres@techno-hero.com",
            'password' => bcrypt('development'),
            'role_id' => 1,
            'remember_token' => null,
            'created_at' => '2018-01-28 16:18:52',
            'updated_at'=> '2018-01-28 16:18:52'

        ]);
    }
}
