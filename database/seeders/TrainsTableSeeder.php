<?php

namespace Database\Seeders;
use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');


        foreach($csvContent as $index => $row){
            if($index > 0) {
                $train = new Train();
                $train->company = $row[0];
                $train->departure_station = $row[1];
                $train->arrival_station = $row[2];
                $train->departure_time= $row[3];
                $train->arrival_time = $row[4];
                $train->train_code = $row[5];
                $train->wagons_number = $row[6];
                $train->on_time = $row[7];
                $train->cancelled = $row[8];

                $train->save();
            }

        }
    }
}

/*     //autocompleta i dati random
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza= $faker->dateTimeBetween('-1 week', '+1 week');
            $train->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->codice_treno = $faker->randomNumber(5, false);
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
*/
