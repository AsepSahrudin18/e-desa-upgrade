<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	[
        		'username' 	=> 'admin',
        		'role' 		=> 'admin',
        		'password'	=> bcrypt('admin')
        	],
        	[
        		'username' 	=> 'user',
        		'role' 		=> 'user',
        		'password'	=> bcrypt('user')
        	]
        ]);
    }
}
