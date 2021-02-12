<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class FakeProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         for ($x = 0; $x <= 5; $x++) {
             Project::create(
                 [
                     'slug' => 'project-slug',
                     'title' => 'Titre du projet',
                     'category' => 'public-building',
                     'client' => 'Clients du projet',
                     'location' => 'Ville'
                 ]
             );
         }
         for ($x = 0; $x <= 5; $x++) {
             Project::create(
                 [
                     'slug' => 'project-slug',
                     'title' => 'Titre du projet',
                     'category' => 'residential-house',
                     'client' => 'Clients du projet',
                     'location' => 'Ville'
                 ]
             );
         }
     }
 }
