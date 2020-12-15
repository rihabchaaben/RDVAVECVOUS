<?php

use Illuminate\Database\Seeder;
use App\Ville;
use Illuminate\Support\Facades\DB;

class VilleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = '_extra/villes.sql';
        DB::unprepared(file_get_contents($path));
    }
}
