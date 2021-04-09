<?php

namespace Database\Seeders;

use App\Models\Competition;
use Illuminate\Database\Seeder;
use App\Models\Project;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CONCOURS GAGNANTS
        Competition::create( [ 'category' => 'winning', 'name' => 'Home de pédagogie curative', 'location' => 'Tavannes', 'year' => 1982, 'award' => '1<sup>er</sup>', 'volume' => 12000, 'project_id' => Project::where('slug', 'cpcjb-tavannes')->first()->id ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'École cantonale d\'agriculture', 'location' => 'Loveresse', 'year' => 1983, 'award' => '1<sup>er</sup>', 'volume' => 30000, 'project_id' => Project::where('slug', 'ecole-d-agriculture')->first()->id ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'Home personnes âgées', 'location' => 'Orvin', 'year' => 1986, 'award' => '1<sup>er</sup>', 'volume' => 15000, 'project_id' => Project::where('slug', 'home-d-orvin')->first()->id ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'Habitat (100 unités)', 'location' => 'Villeret', 'year' => 1987, 'award' => '1<sup>er</sup>', 'volume' => 60000 ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'Habitat Ried de Madretsch', 'location' => 'Biel/Bienne', 'year' => 1988, 'award' => '1<sup>er</sup>', 'volume' => 16000, 'project_id' => Project::where('slug', 'ried-de-madretsch')->first()->id ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'Habitat + bureaux Dufour', 'location' => 'Biel/Bienne', 'year' => 1990, 'award' => '1<sup>er</sup>', 'volume' => 25000, 'project_id' => Project::where('slug', 'dufour')->first()->id ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'Migros Habitat-École', 'location' => 'Biel/Bienne', 'year' => 1992, 'award' => '1<sup>er</sup>', 'volume' => 40000, 'project_id' => Project::where('slug', 'migros-marche-neuf')->first()->id ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'Magasins LOEB', 'location' => 'Biel/Bienne', 'year' => 1996, 'award' => '1<sup>er</sup>', 'volume' => 40000, 'project_id' => Project::where('slug', 'magasin-loeb')->first()->id ] );
        Competition::create( [ 'category' => 'winning', 'name' => 'Pont sur la Suze<br>(avec Balzari & Schudel)', 'location' => 'Biel/Bienne', 'year' => 1997, 'award' => '1<sup>er</sup>' ] );

        // PROJETS PRIMÉS
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Imprimerie ABC', 'location' => 'Berne', 'year' => 1989, 'award' => '2<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Quartier Marché-Neuf 2000', 'location' => 'Berne', 'year' => 1990, 'award' => '2<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Banque Cantonale', 'location' => 'Nidau', 'year' => 1985, 'award' => '2<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Home pour personnes âgées', 'location' => 'Brugg', 'year' => 1984, 'award' => '4<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Habitat rue de Lyon', 'location' => 'Genève', 'year' => 1992, 'award' => '4<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Home pour personnes âgées', 'location' => 'Évilard', 'year' => 1985, 'award' => '5<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Hôpital de Pourtalès', 'location' => 'Neuchâtel', 'year' => 1989, 'award' => '5<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Habitat Steinhof', 'location' => 'Burgdorf', 'year' => 1988, 'award' => '5<sup>ème</sup>' ] );
        Competition::create( [ 'category' => 'award-winning', 'name' => 'Gare CFF - PTT - Quartier', 'location' => 'Lugano', 'year' => 1988, 'award' => '6<sup>ème</sup>' ] );

        // AUTRES RÁLISATION - PROJECTS
        Competition::create( [ 'category' => 'other', 'name' => 'Transformation Maison du Peuple<br>(avec Andry et Habermann)', 'location' => 'Biel/Bienne', 'year' => 1990, 'volume' => 20000 ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Habitat Chemin du Clos', 'location' => 'Biel/Bienne', 'year' => 1989, 'award' => 'Atuprix', 'project_id' => Project::where('slug', 'chemin-du-clos')->first()->id ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Administration communale et salle Conseil de Ville', 'location' => 'Biel/Bienne', 'year' => 1985, 'volume' => 40000, 'project_id' => Project::where('slug', 'bourg-21-27-29')->first()->id ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Aire usine à gaz (80\'000 m<sup>2</sup>)<br>Procédure d\'expertise et planification avec A. Tschumi et Urbaplan Lausanne', 'location' => 'Biel/Bienne', 'year' => 1991 ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Habitat Coopérative Berghaus', 'location' => 'Biel/Bienne', 'year' => 1992, 'volume' => 150000 ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Habitat pour Ciment Vigier', 'location' => 'Pery', 'year' => 1992, 'volume' => 20000 ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Habitat Hartmann Et Co.', 'location' => 'Biel/Bienne', 'year' => 1992, 'volume' => 20000 ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Rénovation Palais des Congrès', 'location' => 'Biel/Bienne', 'year' => 1994 ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Villa Casablanca (agrandissement)', 'location' => 'Biel/Bienne', 'year' => 1995, 'volume' => 1525, 'project_id' => Project::where('slug', 'casablanca')->first()->id ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Habitat Route de Mâche (Seniorenw.)', 'location' => 'Biel/Bienne', 'year' => 1996, 'volume' => 35000 ] );
        Competition::create( [ 'category' => 'other', 'name' => 'Migros Marché-Neuf', 'location' => 'Biel/Bienne', 'year' => 1996, 'volume' => 34000, 'project_id' => Project::where('slug', 'migros-marche-neuf')->first()->id ] );

    }
}
