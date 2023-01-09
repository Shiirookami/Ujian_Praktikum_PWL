<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Fake;
use Illuminate\Support\Facades\DB;

class ProductFakeUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakeuser = Fake::create('id_ID');
        for ($i=0; $i < 20; $i++) {
            Product::inRandomOrder()->first();
            DB::table('products')->insert([
                'nama' => $fakeuser->name,
                'qty' => $fakeuser->randomDigit,
                'price'=> $fakeuser->numberBetween($min = 1500, $max = 6000),
                'image' => $fakeuser->company

            ]);
        }
    }
}
