<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $travel = new Travel();

       $travel->travel_name_promo = 'Vacanze Last Minute';
       $travel->destination_city = 'Seoul';
       $travel->destination_state = 'South Korea';
       $travel->travel_promo_description = 'Alla scoperta della capitale del Kpop!';
       $travel->travel_departure_date = '2022-04-27';
       $travel->travel_return_date = '2022-05-07';
       $travel->price = '1500';

       $travel->save();
    }
}
