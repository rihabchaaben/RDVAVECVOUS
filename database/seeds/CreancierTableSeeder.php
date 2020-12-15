<?php

use App\Creancier;
use Illuminate\Database\Seeder;

class CreancierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Creancier::create([
            'ics' => 'FR23ZZZ866873',
            'nom' => 'IAMB',
            'adress' => '15 RUE DES GERBIERS',
            'ville' => 'ST GENIES BELLEVUE',
            'cp' => '31180',
            'pays' => 'FRANCE',
        ]);
    }
}
