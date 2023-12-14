<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class DusunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $dusun = [];

        for ($i = 1; $i <= 6; $i++) {
            $dusun[] = [
                'id' => $i,
                'nama' => $faker->unique()->city,
                'alamat' => $faker->address,
            ];
        }

        DB::table('dusun')->insert($dusun);
    }
}
