<?php

use Illuminate\Database\Seeder;
use App\Demandeur;

class DemandeurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Demandeur::class, 5)->create();
    }
}
