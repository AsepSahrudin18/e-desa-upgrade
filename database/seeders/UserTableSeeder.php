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
        		'username' 	=> 'kepala',
        		'role' 		=> 'kepala',
        		'password'	=> bcrypt('samarinda')
        	],
        	[
        		'username' 	=> 'pegawai',
        		'role' 		=> 'pegawai',
        		'password'	=> bcrypt('samarinda')
        	]
        ]);
    }
}
