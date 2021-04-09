@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "L’architecture, c’est un peu comme la cuisine, un assemblage d’ingrédients divers, la recherche du bon dosage, un art de la synthèse. Dans le cas présent, les critères économiques et fonctionnels étaient prédominants. Les locaux de services occupent les 2 tiers de la surface utile. Ce rapport de surface entre services et salle est généralement inversé. L’installation de cuisine et les techniques nécessaires à son fonctionnement coûtent le tiers du budget de construction soit env. 700 000. – .")

@section('content')

    @include('templates.object-2-col', [
        'header' => "Café du Parc - La Rive, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "L’architecture, c’est un peu comme la cuisine, un assemblage d’ingrédients divers, la recherche du bon dosage, un art de la synthèse. Dans le cas présent, les critères économiques et fonctionnels étaient prédominants. Les locaux de services occupent les 2 tiers de la surface utile. Ce rapport de surface entre services et salle est généralement inversé. L’installation de cuisine et les techniques nécessaires à son fonctionnement coûtent le tiers du budget de construction soit env. 700 000. – .",
            "L’importance de la cuisine et des services est justifiée par le concept d’exploitation prévu non seulement pour les 220 places intérieurs et extérieures du restaurant, mais également pour une clientèle itinérante dans tout l’espace des prés de la Rive et qui peut atteindre les 1000 personnes les jours de fins de semaine.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Mathys & Wysseier, Biel",
            "" => "&nbsp;",
            __('projects.execution') => "1998 - 1999",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'cafe-du-parc_exterieur-1@512.jpg',
                'media' => [
                    '512' => 'cafe-du-parc_exterieur-1.jpg',
                ],
            ],
            [
                'alt' => "Plan de situation",
                'src' => 'cafe-du-parc_situation@512.jpg',
                'media' => [
                    '2048' => 'cafe-du-parc_situation.jpg',
                    '1024' => 'cafe-du-parc_situation@2048.jpg',
                    '512' => 'cafe-du-parc_situation@1024.jpg',
                ],
            ],
            [
                'alt' => "Coupes",
                'src' => 'cafe-du-parc_coupes@512.jpg',
                'media' => [
                    '2048' => 'cafe-du-parc_coupes.jpg',
                    '1024' => 'cafe-du-parc_coupes@2048.jpg',
                    '512' => 'cafe-du-parc_coupes@1024.jpg',
                ],
            ],
            [
                'alt' => "Façades Est et Ouest",
                'src' => 'cafe-du-parc_facade-est-ouest@512.jpg',
                'media' => [
                    '2048' => 'cafe-du-parc_facade-est-ouest.jpg',
                    '1024' => 'cafe-du-parc_facade-est-ouest@2048.jpg',
                    '512' => 'cafe-du-parc_facade-est-ouest@1024.jpg',
                ],
            ],
            [
                'alt' => "Façades Sud et Nord",
                'src' => 'cafe-du-parc_facade-sud-nord@512.jpg',
                'media' => [
                    '2048' => 'cafe-du-parc_facade-sud-nord.jpg',
                    '1024' => 'cafe-du-parc_facade-sud-nord@2048.jpg',
                    '512' => 'cafe-du-parc_facade-sud-nords@1024.jpg',
                ],
            ],
            [
                'alt' => "Rez-de-chausée",
                'src' => 'cafe-du-parc_rez-de-chaussee@512.jpg',
                'media' => [
                    '2048' => 'cafe-du-parc_coupes.jpg',
                    '1024' => 'cafe-du-parc_coupes@2048.jpg',
                    '512' => 'cafe-du-parc_coupes@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
