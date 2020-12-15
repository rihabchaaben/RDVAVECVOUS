<?php

use Illuminate\Database\Seeder;

class DevisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Devis::class,4)->create();
    }
}
