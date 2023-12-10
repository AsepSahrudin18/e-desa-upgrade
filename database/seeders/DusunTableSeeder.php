<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class DusunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dusun')->delete();
        $dusun = [
            [
                'id' => 1,
                'nama' => 'Sukoharjo',
                'alamat' => 'Kp. Contoh Rt.05 Rw.06'
            ],
            [
                'id' => 2,
                'nama' => 'Sukoharjo',
                'alamat' => 'Kp. Contoh Rt.05 Rw.06'
            ],
            [
                'id' => 3,
                'nama' => 'Sukoharjo',
                'alamat' => 'Kp. Contoh Rt.05 Rw.06'
            ],
            [
                'id' => 4,
                'nama' => 'Sukoharjo',
                'alamat' => 'Kp. Contoh Rt.05 Rw.06'
            ],
            [
                'id' => 5,
                'nama' => 'Sukoharjo',
                'alamat' => 'Kp. Contoh Rt.05 Rw.06'
            ],
            [
                'id' => 6,
                'name' => 'Sukoharjo',
                'alamat' => 'Kp. Contoh Rt.05 Rw.06'
            ],
        ];
        DB::table('dusun')->insert($dusun);
    }
}
