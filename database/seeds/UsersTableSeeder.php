<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'hamzeh5180',
            'email' => 'hamzeh97@gmail.com',
            'password' => app('hash')->make('password'),
            'first_name' => 'hamzeh',
            'last_name' => 'qutishat'
        ]);
    }
}
