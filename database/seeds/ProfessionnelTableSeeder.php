<?php

use Illuminate\Database\Seeder;
use App\Professionnel;

class ProfessionnelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Professionnel::class, 3)->create();
    }
}
