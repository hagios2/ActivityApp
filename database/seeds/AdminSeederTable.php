<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 
        * creating admin for the app
        */
        
        User::create([

            'name' => 'Emmanuel Oteng Wilson',

            'email' => 'hagioswilson@gmail.com',

            'password' => Hash::make('toor8853'),

            'isActive' => true,

            'role' => 'super_admin',

            'phone' => '0556684934'
        ]);
    }
}
