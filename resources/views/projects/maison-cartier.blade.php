@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Maison-atelier Cartier, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Construction, sur une parcelle résiduelle minimale d'un quartier typique de villas, d'une maison-atelier pour un couple d'artistes. Sur un corps central rectangulaire, abritant les fonctions de séjour, travail et dormir, se greffent des alvéoles de forme libre qui permettent d'adapter sans mimétisme la volumétrie générale aux données géométriques arbitraires dictées par les alignements.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Chantemerle 49, 2502 Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Mathys & Wysseier, Bienne",
            "" => "&nbsp;",
            "Exécution" => "1993",
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
