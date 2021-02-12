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
         Project::create(
             [
                 'slug' => 'bourg-21-27-29',
                 'title' => 'Bourg 21, 27, 29',
                 'category' => 'public-building',
                 'client' => 'Ville de Bienne',
                 'location' => 'Biel/Bienne'
             ]
         );
         Project::create(
             [
                 'slug' => 'chemin-du-clos',
                 'title' => 'Chemin du Clos',
                 'category' => 'residential-house',
                 'client' => 'Coopérative "Chemin du clos"',
                 'location' => 'Biel/Bienne'
             ]
         );
         Project::create(
             [
                 'slug' => 'chemin-vert',
                 'title' => 'Chemin Vert',
                 'category' => 'residential-house',
                 'location' => 'Biel/Bienne'
             ]
         );
         Project::create(
             [
                 'slug' => 'cp-moutier',
                 'title' => 'Centre professionnel',
                 'category' => 'public-building',
                 'client' => 'Commune municipale de Moutier',
                 'location' => 'Moutier'
             ]
         );
         Project::create(
             [
                 'slug' => 'home-d-orvin',
                 'title' => 'Les Roches',
                 'category' => 'public-building',
                 'client' => 'Fondation "Les Roches"',
                 'location' => 'Orvin'
             ]
         );
     }
 }
