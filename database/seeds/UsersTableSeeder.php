<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Barış TUNÇ',
            'email' => 'info@brstnc.com',
            'password' => Hash::make('brstnc'),
            'address' => 'Üsküdar Üniversitesi',
            'phone' => '05455450553'
        ]);
    }
}
