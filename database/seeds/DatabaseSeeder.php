<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
//        $this->call(CategorieTableSeeder::class);
//        $this->call(VilleTableSeeder::class);
//        $this->call(DemandeurTableSeeder::class);
//        $this->call(DemandeTableSeeder::class);
//        $this->call(DocumentTableSeeder::class);
//        $this->call(ProfessionnelTableSeeder::class);
//        $this->call(FactureTableSeeder::class);
//        $this->call(VendeurTableSeeder::class);
//        $this->call(AvisTableSeeder::class);
//        $this->call(VipTableSeeder::class);
//        $this->call(EventTableSeeder::class);
//        $this->call(PropositionTableSeeder::class);
////        $this->call(DevisTableSeeder::class);
//        $this->call(MessageTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(CitationTableSeeder::class);
        $this->call(ProfessionnelCitationTableSeeder::class);
        $this->call(QuestionnaireTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(CreancierTableSeeder::class);

    }
}
