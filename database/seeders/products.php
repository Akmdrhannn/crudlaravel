<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \Illuminate\Support\Facades\DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <=25;$i++){
            DB::table('products')->insert([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween(20000,50000),
                'qty' => $faker->numberBetween(1,50),
                'categories_id' => $faker->numberBetween(1,2),
            ]);
        }
    }
}
