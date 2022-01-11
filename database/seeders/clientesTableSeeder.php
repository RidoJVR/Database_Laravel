<?php

namespace Database\Seeders;

use App\Models\clientes;
use Illuminate\Database\Seeder;

class clientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clientes::truncate();

        $faker = \Faker\Factory::create();
        //
        for ($i = 0; $i < 50; $i++) {
            clientes::create([
                'nombre' => $faker->sentence,
                'primer_apellido' => $faker->seed(9),
                'segundo_apellido' => $faker->seed(9),
                'numero_celular' => $faker->seed(9),
                'correo electronico' => $faker->seed(9),
                'sexo'=>$faker->null(),
                


            ]);
   }
    }
}
