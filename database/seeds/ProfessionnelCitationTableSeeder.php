<?php

use App\ProfessionnelCitation;
use Illuminate\Database\Seeder;

class ProfessionnelCitationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citations = [
            ['text' => 'Les plus belles réussites ont bien souvent été précédées par de nombreux échecs.', 'author' => 'Robert Sabatier'],
            ['text' => 'L\'honneur s\'acquiert par l\'accomplissement de nos devoirs et nos réussites, et non par la fonction.', 'author' => 'Francis Bacon'],
            ['text' => ' La peur de l\'échec enterre la réussite.', 'author' => 'Francis Bacon '],
            ['text' => 'La réussite nous rend plus exigeants que justes.', 'author' => 'Robert Sabatier'],
            ['text' => 'C\'est le propre d\'un sot de ne jamais désespérer de la réussite d\'une entreprise tant qu\'il lui reste une occasion de commettre de nouvelles sottises.', 'author' => 'Anne Barratin'],
            ['text' => 'Persévère dans l\'échec, et sois toujours modeste dans la réussite.', 'author' => 'Hyacinthe de Charencey'],
            ['text' => 'L\'honneur qui s\'acquiert vient à nous par nos réussites et nos résultats dans nos propres entreprises.', 'author' => 'Stanislas Leszczynski'],
            ['text' => 'La modération a du bon en tout, surtout dans la réussite.', 'author' => 'Francis Bacon'],
            ['text' => 'Après le travail vient l\'argent et le repos.', 'author' => 'Chauvot de Beauchêne'],
            ['text' => 'Beau est le travail fait avec lenteur.', 'author' => 'Proverbe espagnol'],
            ['text' => 'Le travail au présent, l\'espoir à l\'avenir.', 'author' => 'Proverbe basque'],
            ['text' => 'Travail : Ne perdez pas de temps, soyez toujours occupé à quelque chose d\'utile. Supprimez tout ce qui n\'est pas nécessaire.', 'author' => 'Proverbe français'],
            ['text' => 'Le travail n\'est pas seulement une nécessité, il est aussi un besoin métaphysique de l\'homme. Travailler beaucoup, pour en être beaucoup récompensé, est une forme d\'héroïsme pacifique.', 'author' => 'Benjamin Franklin'],
            ['text' => 'Tout travail suivi fait paraître une aptitude.', 'author' => 'Jean Dutourd '],
            ['text' => 'Si l\'homme se résigne au travail c\'est qu\'il pense que ce travail un jour aura sa récompense.', 'author' => 'Alain'],
            ['text' => 'La tempérance et le travail sont les meilleurs médecins de l\'homme.', 'author' => 'Publilius Syrus'],
            ['text' => 'Malheureux celui qui ne connaît pas le charme du travail ! il ne connaîtra que trop tôt le dégoût des plaisirs.', 'author' => 'Jean-Jacques Rousseau'],
            ['text' => 'À force de travail et de recherches on atteint la perfection.', 'author' => 'François Gaston de Lévis']
        ];

        foreach ($citations as $cit) {
            ProfessionnelCitation::create(['text' => $cit['text'], 'author' => $cit['author']]);
        }
    }
}
