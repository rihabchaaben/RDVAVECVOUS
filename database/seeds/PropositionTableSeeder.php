<?php

use Illuminate\Database\Seeder;

class PropositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Proposition::class,4)->create();
    }
}
