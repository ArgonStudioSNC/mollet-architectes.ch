@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Maisons en rangée \"Chemin du Clos\", Biel/Bienne",
        'subheader' => "Atuprix Bernischer Kulturpreis 1991",
        'description' => [
            "Intégration dans un quartier typique de villas, sur une parcelle minimale de 800 m2, d'un groupe de quatre maisons en rangée à plans individualisés. Recherche d'un langage architectural riche en événements dans les limites d'un petit budget.",
            "Die vier Reihenhäuser mit individuellen Grundrissen auf einer minimalen Parzellengrösse von 800 m2 sind in einem typischen Villenquartier integriert. Bei der Realisierung suchte man nach einer vielfältigen, reichen Architektursprache im Rahmen eines kleinen Budgets.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Chemin du Clos 83/85, Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Chablais & Poffet, Estavayer-le-Lac",
            "" => "&nbsp;",
            "Exécution" => "1988 - 1989",
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
