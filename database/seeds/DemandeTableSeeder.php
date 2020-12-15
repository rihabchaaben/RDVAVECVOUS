<?php

use Illuminate\Database\Seeder;
use App\Demande;

class DemandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Demande::class, 3)->create();
    }
}
