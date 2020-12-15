<?php

use App\Citation;
use Illuminate\Database\Seeder;

class CitationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citations = [['text' => 'Le temps fournira les moyens.', 'annee' => '1826', 'type' => 'Proverbe italien'],
            ['text' => 'Ce qu\'on ne fait pas, le temps le fait.', 'annee' => '1827', 'type' => 'Proverbe français'],
            ['text' => 'Temps qui se lève la nuit, dure peu quand le jour luit', 'annee' => '1985', 'type' => 'Proverbe normand'],
            ['text' => 'Le ciel rouge à la fin du jour, du beau temps prédit le retour.', 'annee' => '1822', 'type' => 'Proverbe cévenol'],
            ['text' => 'Il faut prendre le temps comme il vient, les hommes pour ce qu\'ils sont, et l\'argent pour ce qu\'il vaut.', 'annee' => '1864', 'type' => 'Proverbe cévenol'],
            ['text' => 'Si nous tuons le temps, celui-ci nous le rend bien.', 'annee' => '1853', 'type' => 'Proverbe français'],
            ['text' => 'N\'emploie pas si mal ton temps, que tu fasses des mécontents.', 'annee' => '1853', 'type' => 'Proverbe français'],
            ['text' => 'Avec de la paille et du temps, les nèfles blettissent.', 'annee' => '1664', 'type' => 'Proverbe français'],
            ['text' => 'Le temps est le meilleur bâtisseur de l\'amitié.', 'annee' => '1670', 'type' => 'Blaise Pascal'],
            ['text' => 'Le temps passe, d\'accord ! Mais il n\'a pas de mérite, il n\'a que ça à faire.', 'annee' => '1994', 'type' => 'Tahar Ben Jelloun'],
            ['text' => 'Le temps n\'endort pas les grandes douleurs, mais il les assoupit.', 'annee' => '2006', 'type' => 'Grégoire Lacroix'],
            ['text' => 'Le temps n\'est pas maître de notre destin, il n\'en est que le comptable.', 'annee' => '1855', 'type' => 'George Sand'],
            ['text' => 'Le temps est la caisse, l\'ordre est le caissier.', 'annee' => '2013', 'type' => 'Grégoire Lacroix'],
            ['text' => 'Le temps n\'a point d\'ailes pour le captif.', 'annee' => '1913', 'type' => 'Anne Barratin'],
            ['text' => 'Le temps ronge l\'acier et met le marbre en poudre.', 'annee' => '1823', 'type' => 'Étienne de Jouy'],
            ['text' => 'Le temps passe par le trou de l\'aiguille des heures.', 'annee' => '1800', 'type' => 'Pierre-Claude-Victor Boiste'],
            ['text' => 'Le temps est la plus précieuse des propriétés, rien ne saurait le racheter.', 'annee' => '1900', 'type' => 'Jules Renard'],];

        foreach ($citations as $cit) {
            Citation::create(['text' => $cit['text'], 'annee' => $cit['annee'], 'type' => $cit['type']]);
        }
    }
}
