<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++){
            Student::create([
                'nis' => $faker->numberBetween(12007000, 12009000),
                'nama' => $faker->name,
                'rombel' => $faker->randomElement(['RPL', 'TKJ', 'MMD', 'BDP', 'HTL', 'TBG', 'OTKP']),
                'rayon' => $faker->randomElement(['Ciawi', 'Cibedung', 'Cicurug', 'Cisarua', 'Sukasari', 'Tajur']),
                'ket' => $faker->randomElement(['Hadir', 'Sakit', 'Izin', 'Alpa']),
            ]);
        }
    }
}
