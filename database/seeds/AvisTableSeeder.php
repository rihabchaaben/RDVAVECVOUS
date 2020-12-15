<?php

use App\Avis;
use Illuminate\Database\Seeder;

class AvisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Avis::class, 5)->create();
    }
}
