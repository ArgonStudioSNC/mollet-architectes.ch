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
         for ($x = 0; $x <= 10; $x++) {
             Project::create(
                 [
                     'slug' => 'project-slug',
                     'title' => 'Titre du projet',
                     'category' => 'realisation',
                     'client' => 'Clients du projet',
                     'date' => '2013-05-01'
                 ]
             );
         }
     }
 }
