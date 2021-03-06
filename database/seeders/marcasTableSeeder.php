<?php

namespace Database\Seeders;

use App\Models\marcas;
use Illuminate\Database\Seeder;

class marcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          // Let's truncate our existing records to start from scratch.
          marcas::truncate();

          $faker = \Faker\Factory::create();
  
          // And now, let's create a few articles in our database:
          for ($i = 0; $i < 50; $i++) {
              marcas::create([
                  'title' => $faker->sentence,
                  'body' => $faker->paragraph,
              ]);
          }
    }
}
