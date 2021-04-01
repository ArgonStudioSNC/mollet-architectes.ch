@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Café du Parc - La Rive, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "L'architecture, c'est un peu comme la cuisine, un assemblage d'ingrédients divers, la recherche du bon dosage, un art de la synthèse. Dans le cas présent, les critères économiques et fonctionnels étaient prédominants. Les locaux de services occupent les 2 tiers de la surface utile. Ce rapport de surface entre services et salle est généralement inversé. L'installation de cuisine et les techniques nécessaires à son fonctionnement coûtent le tiers du budget de construction soit env. 700'000.–.",
            "L'importance de la cuisine et des services est justifiée par le concept d'exploitation prévu non seulement pour les 220 places intérieurs et extérieures du restaurant mais également pour une clientèle itinérante dans tout l'espace des prés de la Rive et qui peut atteindre les 1000 personnes les jours de fin de semaines.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Strandboden, Biel/Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Mathys & Wysseier, Biel",
            "" => "&nbsp;",
            "Exécution" => "1998 - 1999",
        ],
        'figures' => [
            [
                'alt' => "Image",
                'src' => '',
                'media' => [
                    '1024' => '@2048.jpg',
                    '512' => '@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
