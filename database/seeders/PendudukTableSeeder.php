<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class PendudukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penduduk')->delete();
        
        $faker = Faker::create();

        $penduduk = [];

        for ($i = 1; $i <= 50; $i++) {
            $statusKeadaan = $faker->boolean(20) ? null : $faker->randomElement(['Hidup', 'Meninggal']);

            $penduduk[] = [
                'id' => $i,
                'dusun_id' => $faker->numberBetween(1, 6),
                'kewarganegaraan' => $faker->randomElement(['WNI', 'WNA']),
                'kk_status' => $faker->randomElement(['Kepala Keluarga', 'Anggota Keluarga']),
                'nik' => $faker->unique()->numerify('##############'),
                'nama' => $faker->name,
                'tempat_lahir' => $faker->city,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'rt' => $faker->numberBetween(1, 10),
                'rw' => $faker->numberBetween(1, 10),
                'kelurahan' => $faker->city,
                'kecamatan' => $faker->city,
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
                'status' => $faker->randomElement(['Belum Menikah', 'Menikah', 'Duda', 'Janda']),
                'status_keadaan' => $statusKeadaan,
                'pekerjaan' => $faker->jobTitle,
                'tanggal_lahir' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('penduduk')->insert($penduduk);
    }
}
