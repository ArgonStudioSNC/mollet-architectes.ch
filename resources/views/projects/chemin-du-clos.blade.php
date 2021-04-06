@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-3-col', [
        'header' => "Maisons en rangée \"Chemin du Clos\", Biel/Bienne",
        'subheader' => "Atuprix Bernischer Kulturpreis 1991",
        'description' => [
            "Intégration dans un quartier typique de villas, sur une parcelle minimale de 800 m2, d’un groupe de quatre maisons en rangée à plans individualisés. Recherche d’un langage architectural riche en événements dans les limites d’un petit budget.",
            "Die vier Reihenhäuser mit individuellen Grundrissen auf einer minimalen Parzellengrösse von 800 m2 sind in einem typischen Villenquartier integriert. Bei der Realisierung suchte man nach einer vielfältigen, reichen Architektursprache im Rahmen eines kleinen Budgets.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
            'revue "Architecture Suisse" de Juillet 1992' => asset('storage/projects/'.$project->slug.'/architecture-suisse.pdf'),
        ],
        'details' => [
            __('projects.location') => "Chemin du Clos 83/85, Bienne",
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Chablais & Poffet, Estavayer-le-Lac",
            "" => "&nbsp;",
            __('projects.execution') => "1988 - 1989",
        ],
        'figures' => [
            [
                'alt' => "Coupe",
                'src' => 'chemin-du-clos_coupe@512.jpg',
                'media' => [
                    '1024' => 'chemin-du-clos_coupe@2048.jpg',
                    '512' => 'chemin-du-clos_coupe@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieur 1",
                'src' => 'chemin-du-clos_exterieur-1@512.jpg',
                'media' => [
                    '512' => 'chemin-du-clos_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieur 2",
                'src' => 'chemin-du-clos_exterieur-2@512.jpg',
                'media' => [
                    '512' => 'chemin-du-clos_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieur 3",
                'src' => 'chemin-du-clos_exterieur-3@512.jpg',
                'media' => [
                    '512' => 'chemin-du-clos_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieur 4",
                'src' => 'chemin-du-clos_exterieur-4@512.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Façade Est",
                'src' => 'chemin-du-clos_facade-est@512.jpg',
                'media' => [
                    '1024' => 'chemin-du-clos_facade-est@2048.jpg',
                    '512' => 'chemin-du-clos_facade-est@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Nord",
                'src' => 'chemin-du-clos_facade-nord@512.jpg',
                'media' => [
                    '1024' => 'chemin-du-clos_facade-nord@2048.jpg',
                    '512' => 'chemin-du-clos_facade-nord@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Sud",
                'src' => 'chemin-du-clos_facade-sud@512.jpg',
                'media' => [
                    '1024' => 'chemin-du-clos_facade-sud@2048.jpg',
                    '512' => 'chemin-du-clos_facade-sud@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'chemin-du-clos_plan-1@512.jpg',
                'media' => [
                    '1024' => 'chemin-du-clos_plan-1@2048.jpg',
                    '512' => 'chemin-du-clos_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'chemin-du-clos_plan-2@512.jpg',
                'media' => [
                    '1024' => 'chemin-du-clos_plan-2@2048.jpg',
                    '512' => 'chemin-du-clos_plan-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 3",
                'src' => 'chemin-du-clos_plan-3@512.jpg',
                'media' => [
                    '1024' => 'chemin-du-clos_plan-3@2048.jpg',
                    '512' => 'chemin-du-clos_plan-3@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
