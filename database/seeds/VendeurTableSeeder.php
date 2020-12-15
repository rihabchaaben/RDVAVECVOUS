<?php

use Illuminate\Database\Seeder;
use App\Vendeur;

class VendeurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vendeur::class, 3)->create();
    }
}
