<?php

use Illuminate\Database\Seeder;
use App\Facture;

class FactureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Facture::class, 3)->create();
    }
}
