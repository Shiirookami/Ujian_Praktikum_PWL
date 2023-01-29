<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Fake;
use Illuminate\Support\Facades\DB;

class GuruFakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = Fake::create('id_ID');
        for ($i=0; $i < 20; $i++) {
            // Guru::inRandomOrder()->first();
            DB::table('gurus')->insert([
                'nidn' => rand(0000000000, 9999999999),
                'nama' => $guru->name,
                'alamat' => $guru->address,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ]);
        }
    }
}
