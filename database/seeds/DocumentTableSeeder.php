<?php

use Illuminate\Database\Seeder;
use App\Document;

class DocumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Document::class, 3)->create();
    }
}
