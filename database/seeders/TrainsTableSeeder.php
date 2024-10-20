<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Train::truncate();

        for ($i=0; $i < 50; $i++) { 
           $train = new Train();
           $train->azienda = fake()->company();
           $train->stazione_di_partenza = fake()->city();
           $train->stazione_di_arrivo = fake()->city();
           $train->orario_di_partenza = fake()->time();
           $train->orario_di_arrivo = fake()->time();
           $train->codice_treno = fake()->randomNumber(8, true);
           $train->numero_carrozze = fake()->randomDigitNotNull();
           $train->in_orario = fake()->boolean();
           $train->cancellato = $train->in_time ? false : fake()->boolean();
           $train->save();
        }
    }
}