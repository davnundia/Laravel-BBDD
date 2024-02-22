<?php

namespace Database\Seeders;

use App\Models\Pastel_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Pastel_seeder extends Seeder
{
    public function run(): void{
        $faker = Faker::create();

        for($i=0; $i<2; $i++){
            $pastel = new Pastel_model();
            $pastel->nombre = 'Pastel de ' . $faker->firstNameFemale;;
            $pastel->sabor = $faker->randomElement(['chocolate','vainilla','cheesecake']);
            $pastel->imagen = '';
            $pastel->created_at= date('Y-m-d H:m:s');
            $pastel->updated_at = date('Y-m-d H:m:s');
            $pastel->save();
        }
    }
}
