<?php

namespace Database\Seeders;

use App\Models\automoviles;
use Illuminate\Database\Seeder;

class automovilesTableSeeder extends Seeder
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
         automoviles::truncate();

         $faker = \Faker\Factory::create();
 
         // And now, let's create a few articles in our database:
         for ($i = 0; $i < 50; $i++) {
             automoviles::create([
                 'placas' => $faker->sentence,
                 'numero_cilindros' => $faker->seed(9),
                 'numero_nn' => $faker->seed(9),
                 'kilometraje' => $faker->seed(9),
                 'anio' => $faker->seed(9),


             ]);
    }
}
}