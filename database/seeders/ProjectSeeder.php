<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // PUBLIC BUILDINGS
        Project::create( [ 'slug' => 'bourg-21-27-29', 'title' => 'Bourg 21, 27, 29', 'category' => 'public-building', 'client' => 'Ville de Bienne', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'cp-moutier', 'title' => 'Centre professionnel', 'category' => 'public-building', 'client' => 'Commune municipale de Moutier', 'location' => 'Moutier' ] );
        Project::create( [ 'slug' => 'home-d-orvin', 'title' => 'Les Roches', 'category' => 'public-building', 'client' => 'Fondation «Les Roches»', 'location' => 'Orvin' ] );
        Project::create( [ 'slug' => 'ateliers-montre-hermes', 'title' => 'Les Ateliers de la Montre Hermès', 'category' => 'public-building', 'client' => 'La montre Hermès, Paris', 'location' => 'Brügg' ] );
        Project::create( [ 'slug' => 'batiment-central', 'title' => 'Central', 'category' => 'public-building', 'client' => 'Saner AG, Studen', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'cafe-du-parc', 'title' => 'Café du Parc', 'category' => 'public-building', 'client' => 'Liegenschaften der Stadt Biel', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'casablanca', 'title' => 'Casablanca', 'category' => 'public-building', 'client' => 'Bureau Cortesi', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'cpcjb-tavannes', 'title' => 'CPCJB', 'category' => 'public-building', 'client' => '', 'location' => 'Tavannes' ] );
        Project::create( [ 'slug' => 'dufour', 'title' => 'Dufour', 'category' => 'public-building', 'client' => 'Zender AG - Cooperative Nelken', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'ecole-d-agriculture', 'title' => 'École d\'agriculture', 'category' => 'public-building', 'client' => '', 'location' => 'Loveresse' ] );
        Project::create( [ 'slug' => 'magasin-loeb', 'title' => 'Magasin LOEB', 'category' => 'public-building', 'client' => 'IMLO Immobilien AG, Berne', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'migros-marche-neuf', 'title' => 'Migros Marché-Neuf', 'category' => 'public-building', 'client' => 'Migros Aare, Schönbühl', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'studio-schwarz', 'title' => 'Studio Schwarz', 'category' => 'public-building', 'client' => '', 'location' => 'Berne' ] );

        // COLLECTIVE HOUSINGS
        Project::create( [ 'slug' => 'chemin-du-clos', 'title' => 'Chemin du Clos', 'category' => 'collective-housing', 'client' => 'Coopérative «Chemin du clos»', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'chemin-vert', 'title' => 'Chemin Vert', 'category' => 'collective-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'fluhaecker-ipsach', 'title' => 'Fluhäcker', 'category' => 'collective-housing', 'client' => 'Versorgestiftung Bern', 'location' => 'Ipsach' ] );
        Project::create( [ 'slug' => 'ried-de-madretsch', 'title' => 'Ried de Madretsch', 'category' => 'collective-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'rue-de-la-flore', 'title' => 'Rue de la Flore', 'category' => 'collective-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'wohnpark-seeblick', 'title' => 'Wohnpark Seeblick', 'category' => 'collective-housing', 'client' => 'EG Seeblick Bellmund', 'location' => 'Bellmund' ] );

        // INDIVIDUAL HOUSINGS
        Project::create( [ 'slug' => 'chalet-ch-du-clos', 'title' => 'Chalet au Ch. du Clos', 'category' => 'individual-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'maison-affolter', 'title' => 'Maison familiale à Schernelz', 'category' => 'individual-housing', 'client' => 'Affolter', 'location' => 'Schernelz' ] );
        Project::create( [ 'slug' => 'maison-baruselli-coulery', 'title' => 'Maison familiale à Moutier', 'category' => 'individual-housing', 'client' => 'Baruselli-Coulery', 'location' => 'Moutier' ] );
        Project::create( [ 'slug' => 'maison-cartier', 'title' => 'Maison Cartier', 'category' => 'individual-housing', 'client' => '', 'location' => '' ] );
        Project::create( [ 'slug' => 'pierre-grise-1', 'title' => 'Maison familiale Pierre Grise 1', 'category' => 'individual-housing', 'client' => 'Michèle et Henri Mollet', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'maison-montavon', 'title' => 'Maison familiale à Belprahon', 'category' => 'individual-housing', 'client' => 'Montavon', 'location' => 'Belprahon' ] );
        Project::create( [ 'slug' => 'maison-muhlethaler', 'title' => 'Maison familiale à Schernelz', 'category' => 'individual-housing', 'client' => 'Muhlethaler', 'location' => 'Schernelz' ] );
        Project::create( [ 'slug' => 'maison-muri', 'title' => 'Maison familiale au Landeron', 'category' => 'individual-housing', 'client' => 'Muri', 'location' => 'Le Landeron' ] );
        Project::create( [ 'slug' => 'maison-schlub', 'title' => 'Maison familiale à Longeau', 'category' => 'individual-housing', 'client' => 'Schlup', 'location' => 'Longeau' ] );
    }
}
