@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Le choix architectural sert une conception moderne de l’outil de production, à l’image des Ateliers Hermès de Pantin, en France. La lumière naturelle, essentielle au travail horloger de haute précision, pénètre largement dans le bâtiment de verre, et les établis sont orientés face au paysage extérieur... tandis qu’un palmier, haut d’une dizaine de mètres, s’élève dans le patio central.")

@section('content')

    @include('templates.object-2-col', [
        'header' => "Les Ateliers de la Montre Hermès SA, Brügg",
        'subheader' => "",
        'description' => [
            "Le choix architectural sert une conception moderne de l’outil de production, à l’image des Ateliers Hermès de Pantin, en France. La lumière naturelle, essentielle au travail horloger de haute précision, pénètre largement dans le bâtiment de verre, et les établis sont orientés face au paysage extérieur... tandis qu’un palmier, haut d’une dizaine de mètres, s’élève dans le patio central.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Communauté d'architectes<br>Scpa Céria & Coupel, Paris<br>Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Mathys & Wysseier, Bienne",
            __('projects.expert') => "TP AG, Bienne<br>JAG, Jakob AG, Bienne",
            "" => "nbsp;",
            __('projects.construction-start') => "11 août 1997",
            __('projects.construction-end') => "Juillet 1999",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'ateliers-montre-hermes_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'ateliers-montre-hermes_exterieur-1.jpg',
                    '512' => 'ateliers-montre-hermes_exterieur-1@1024.jpg',
                ],
            ],
                [
                    'alt' => "Coupe 2",
                    'src' => 'ateliers-montre-hermes_coupe-2@512.jpg',
                    'media' => [
                        '2048' => 'ateliers-montre-hermes_coupe-2.jpg',
                        '1024' => 'ateliers-montre-hermes_coupe-2@2048.jpg',
                        '512' => 'ateliers-montre-hermes_coupe-2@1024.jpg',
                    ],
                ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'ateliers-montre-hermes_exterieur-2@512.jpg',
                'media' => [
                    '512' => 'ateliers-montre-hermes_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'ateliers-montre-hermes_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'ateliers-montre-hermes_exterieur-3.jpg',
                    '512' => 'ateliers-montre-hermes_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Est",
                'src' => 'ateliers-montre-hermes_facade-est@512.jpg',
                'media' => [
                    '2048' => 'ateliers-montre-hermes_facade-est.jpg',
                    '1024' => 'ateliers-montre-hermes_facade-est@2048.jpg',
                    '512' => 'ateliers-montre-hermes_facade-est@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Nord",
                'src' => 'ateliers-montre-hermes_facade-nord@512.jpg',
                'media' => [
                    '2048' => 'ateliers-montre-hermes_facade-nord.jpg',
                    '1024' => 'ateliers-montre-hermes_facade-nord@2048.jpg',
                    '512' => 'ateliers-montre-hermes_facade-nord@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Ouest",
                'src' => 'ateliers-montre-hermes_facade-ouest@512.jpg',
                'media' => [
                    '2048' => 'ateliers-montre-hermes_facade-ouest.jpg',
                    '1024' => 'ateliers-montre-hermes_facade-ouest@2048.jpg',
                    '512' => 'ateliers-montre-hermes_facade-ouest@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Sud",
                'src' => 'ateliers-montre-hermes_facade-sud@512.jpg',
                'media' => [
                    '2048' => 'ateliers-montre-hermes_facade-sud.jpg',
                    '1024' => 'ateliers-montre-hermes_facade-sud@2048.jpg',
                    '512' => 'ateliers-montre-hermes_facade-sud@1024.jpg',
                ],
            ],
            [
                'alt' => "Niveau 2",
                'src' => 'ateliers-montre-hermes_niveau-2@512.jpg',
                'media' => [
                    '2048' => 'ateliers-montre-hermes_niveau-2.jpg',
                    '1024' => 'ateliers-montre-hermes_niveau-2@2048.jpg',
                    '512' => 'ateliers-montre-hermes_niveau-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
