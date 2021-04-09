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
        Project::create( [ 'slug' => 'home-d-orvin', 'name' => 'Les Roches', 'category' => 'public-building', 'client' => 'Fondation «Les Roches»', 'location' => 'Les Oeuches 26, 2534 Orvin' ] );
        Project::create( [ 'slug' => 'chemin-du-clos', 'name' => 'Chemin du Clos', 'category' => 'collective-housing', 'client' => 'Coopérative «Chemin du clos»', 'location' => 'Chemin du Clos 83/85, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'cp-moutier', 'name' => 'Centre professionnel', 'category' => 'public-building', 'client' => 'Commune municipale de Moutier', 'location' => 'Moutier' ] );
        Project::create( [ 'slug' => 'pierre-grise-1', 'name' => 'Maison familiale Pierre Grise 1', 'category' => 'individual-housing', 'client' => 'Michèle et Henri Mollet', 'location' => 'Pierre-Grise 1, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'bourg-21-27-29', 'name' => 'Bourg 21, 27, 29', 'category' => 'public-building', 'client' => 'Ville de Bienne', 'location' => 'Burggasse 21,27,29, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'chemin-vert', 'name' => 'Chemin Vert', 'category' => 'collective-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'ecole-d-agriculture', 'name' => 'École d\'agriculture', 'category' => 'public-building', 'client' => '', 'location' => 'Loveresse' ] );
        Project::create( [ 'slug' => 'studio-schwarz', 'name' => 'Studio Schwarz', 'category' => 'public-building', 'client' => '', 'location' => 'Berne' ] );
        Project::create( [ 'slug' => 'maison-baruselli-coulery', 'name' => 'Maison familiale à Moutier', 'category' => 'individual-housing', 'client' => 'Baruselli-Coulery', 'location' => 'Moutier' ] );
        Project::create( [ 'slug' => 'maison-cartier', 'name' => 'Maison Cartier', 'category' => 'individual-housing', 'client' => '', 'location' => 'Chantemerle 49, 2502 Biel/Bienne' ] );
        Project::create( [ 'slug' => 'chalet-ch-du-clos', 'name' => 'Chalet au Ch. du Clos', 'category' => 'individual-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'nmb-bienne-tes-souvenirs', 'name' => 'Bienne, tes souvenirs'] );
        Project::create( [ 'slug' => 'migros-marche-neuf', 'name' => 'Migros Marché-Neuf', 'category' => 'public-building', 'client' => 'Migros Aare, Schönbühl', 'location' => 'Rue du Canal 36-38, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'dufour', 'name' => 'Dufour', 'category' => 'public-building', 'client' => 'Zender AG - Cooperative Nelken', 'location' => 'Dufourstrasse/Brandstrasse, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'ateliers-montre-hermes', 'name' => 'Les Ateliers de la Montre Hermès', 'category' => 'public-building', 'client' => 'La montre Hermès, Paris', 'location' => 'Erlenstrasse 31 a, Brügg' ] );
        Project::create( [ 'slug' => 'batiment-central', 'name' => 'Central', 'category' => 'public-building', 'client' => 'Saner AG, Studen', 'location' => 'Bahnhofstrasse, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'maison-schlub', 'name' => 'Maison familiale à Longeau', 'category' => 'individual-housing', 'client' => 'Schlup', 'location' => 'Longeau' ] );
        Project::create( [ 'slug' => 'maison-montavon', 'name' => 'Maison familiale à Belprahon', 'category' => 'individual-housing', 'client' => 'Montavon', 'location' => 'Belprahon' ] );
        Project::create( [ 'slug' => 'maison-affolter', 'name' => 'Maison familiale à Schernelz', 'category' => 'individual-housing', 'client' => 'Affolter', 'location' => 'Schernelz' ] );
        Project::create( [ 'slug' => 'maison-muhlethaler', 'name' => 'Maison familiale à Schernelz', 'category' => 'individual-housing', 'client' => 'Muhlethaler', 'location' => 'Schernelz' ] );
        Project::create( [ 'slug' => 'maison-muri', 'name' => 'Maison familiale au Landeron', 'category' => 'individual-housing', 'client' => 'Muri', 'location' => 'Le Landeron' ] );
        Project::create( [ 'slug' => 'magasin-loeb', 'name' => 'Magasin LOEB', 'category' => 'public-building', 'client' => 'IMLO Immobilien AG, Berne', 'location' => 'Rue de Nidau 50, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'rue-de-la-flore', 'name' => 'Rue de la Flore', 'category' => 'collective-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'wohnpark-seeblick', 'name' => 'Wohnpark Seeblick', 'category' => 'collective-housing', 'client' => 'EG Seeblick Bellmund', 'location' => 'Bellmund' ] );
        Project::create( [ 'slug' => 'cafe-du-parc', 'name' => 'Café du Parc', 'category' => 'public-building', 'client' => 'Liegenschaften der Stadt Biel', 'location' => 'Strandboden, Biel/Bienne' ] );
        Project::create( [ 'slug' => 'casablanca', 'name' => 'Casablanca', 'category' => 'public-building', 'client' => 'Bureau Cortesi', 'location' => 'Rue du débarcadère 1 , Biel/Bienne' ] );
        Project::create( [ 'slug' => 'cpcjb-tavannes', 'name' => 'CPCJB', 'category' => 'public-building', 'client' => '', 'location' => 'Tavannes' ] );
        Project::create( [ 'slug' => 'ried-de-madretsch', 'name' => 'Ried de Madretsch', 'category' => 'collective-housing', 'client' => '', 'location' => 'Biel/Bienne' ] );
        Project::create( [ 'slug' => 'fluhaecker-ipsach', 'name' => 'Fluhäcker', 'category' => 'collective-housing', 'client' => 'Versorgestiftung Bern', 'location' => 'Ipsach' ] );

    }
}
