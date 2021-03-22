<?php

use Illuminate\Database\Seeder;
use App\Account;
use Carbon\Carbon;
use Faker\Generator as Faker;
class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
       

        for($i=0; $i<20;$i++){
              $data=[
             'name'=>$faker->name(),
             'cognome'=>$faker->randomElement(['Crudo','Primogeri','Ciurlia']),
             'data'=>$faker->date(),
             'indirizzo'=>$faker->address(),
             ];
            $newAccount= new Account();
            // $newAccount->name=$faker->name();
            // $newAccount->cognome=$faker->randomElement(['Crudo','Primogeri','Ciurlia']);
            // $newAccount->data=$faker->date();
            // $newAccount->indirizzo=$faker->address();
            $newAccount->fill($data);
            $newAccount->save();
       
        }


     
    }
}
