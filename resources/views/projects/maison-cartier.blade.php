@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-3-col', [
        'header' => "Maison-atelier Cartier, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Construction, sur une parcelle résiduelle minimale d'un quartier typique de villas, d'une maison-atelier pour un couple d'artistes. Sur un corps central rectangulaire, abritant les fonctions de séjour, travail et dormir, se greffent des alvéoles de forme libre qui permettent d'adapter sans mimétisme la volumétrie générale aux données géométriques arbitraires dictées par les alignements.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => "Chantemerle 49, 2502 Bienne",
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Mathys & Wysseier, Bienne",
            "" => "&nbsp;",
            __('projects.execution') => "1993",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 3",
                'src' => 'maison-cartier_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'maison-cartier_exterieur-3@2048.jpg',
                    '512' => 'maison-cartier_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'maison-cartier_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'maison-cartier_exterieur-1@2048.jpg',
                    '512' => 'maison-cartier_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'maison-cartier_exterieur-2@512.jpg',
                'media' => [
                    '512' => 'maison-cartier_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'maison-cartier_interieur-1@512.jpg',
                'media' => [
                    '1024' => 'maison-cartier_interieur-1@2048.jpg',
                    '512' => 'maison-cartier_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'maison-cartier_interieur-2@512.jpg',
                'media' => [
                    '512' => 'maison-cartier_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 3",
                'src' => 'maison-cartier_interieur-3@512.jpg',
                'media' => [
                    '512' => 'maison-cartier_interieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 4",
                'src' => 'maison-cartier_interieur-4@512.jpg',
                'media' => [
                    '512' => 'maison-cartier_interieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 5",
                'src' => 'maison-cartier_interieur-5@512.jpg',
                'media' => [
                    '512' => 'maison-cartier_interieur-5.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 6",
                'src' => 'maison-cartier_interieur-6@512.jpg',
                'media' => [
                    '512' => 'maison-cartier_interieur-6.jpg',
                ],
            ],
            [
                'alt' => "Plans",
                'src' => 'maison-cartier_plans@512.jpg',
                'media' => [
                    '1024' => 'maison-cartier_plans@2048.jpg',
                    '512' => 'maison-cartier_plans@1024.jpg',
                ],
            ],
            [
                'alt' => "Façades",
                'src' => 'maison-cartier_facades@512.jpg',
                'media' => [
                    '1024' => 'maison-cartier_facades@2048.jpg',
                    '512' => 'maison-cartier_facades@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
