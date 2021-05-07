@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Atuprix Bernischer Kulturpreis 1991. Intégration dans un quartier typique de villas, sur une parcelle minimale de 800 m2, d’un groupe de quatre maisons en rangée à plans individualisés. Recherche d’un langage architectural riche en événements dans les limites d’un petit budget.")

@section('content')

    @include('templates.object-3-col', [
        'header' => "Maisons en rangée \"Chemin du Clos\", Biel/Bienne",
        'subheader' => "Atuprix Bernischer Kulturpreis 1991",
        'description' => [
            "Intégration dans un quartier typique de villas, sur une parcelle minimale de 800 m<sup>2</sup>, d’un groupe de quatre maisons en rangée à plans individualisés. Recherche d’un langage architectural riche en événements dans les limites d’un petit budget.",
            "Die vier Reihenhäuser mit individuellen Grundrissen auf einer minimalen Parzellengrösse von 800 m<sup>2</sup> sind in einem typischen Villenquartier integriert. Bei der Realisierung suchte man nach einer vielfältigen, reichen Architektursprache im Rahmen eines kleinen Budgets.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
            __('projects.chemin-du-clos-review') => asset('storage/projects/'.$project->slug.'/architecture-suisse.pdf'),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Chablais & Poffet, Estavayer-le-Lac",
            "" => "&nbsp;",
            __('projects.execution') => "1988 - 1989",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 10",
                'src' => 'chemin-du-clos_exterieur-10@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_exterieur-10.jpg',
                    '1024' => 'chemin-du-clos_exterieur-10@2048.jpg',
                    '512' => 'chemin-du-clos_exterieur-10@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'chemin-du-clos_exterieur-7@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_exterieur-7.jpg',
                    '1024' => 'chemin-du-clos_exterieur-7@2048.jpg',
                    '512' => 'chemin-du-clos_exterieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 8",
                'src' => 'chemin-du-clos_exterieur-8@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_exterieur-8.jpg',
                    '1024' => 'chemin-du-clos_exterieur-8@2048.jpg',
                    '512' => 'chemin-du-clos_exterieur-8@1024.jpg',
                ],
            ],
            [
                'alt' => "Coupe",
                'src' => 'chemin-du-clos_coupe@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_coupe.jpg',
                    '1024' => 'chemin-du-clos_coupe@2048.jpg',
                    '512' => 'chemin-du-clos_coupe@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Est",
                'src' => 'chemin-du-clos_facade-est@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_facade-est.jpg',
                    '1024' => 'chemin-du-clos_facade-est@2048.jpg',
                    '512' => 'chemin-du-clos_facade-est@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'chemin-du-clos_exterieur-5@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_exterieur-5.jpg',
                    '1024' => 'chemin-du-clos_exterieur-5@2048.jpg',
                    '512' => 'chemin-du-clos_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image interieure 2",
                'src' => 'chemin-du-clos_interieur-2@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_interieur-2.jpg',
                    '1024' => 'chemin-du-clos_interieur-2@2048.jpg',
                    '512' => 'chemin-du-clos_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image interieure 3",
                'src' => 'chemin-du-clos_interieur-3@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_interieur-3.jpg',
                    '1024' => 'chemin-du-clos_interieur-3@2048.jpg',
                    '512' => 'chemin-du-clos_interieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image interieure 1",
                'src' => 'chemin-du-clos_interieur-1@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_interieur-1.jpg',
                    '1024' => 'chemin-du-clos_interieur-1@2048.jpg',
                    '512' => 'chemin-du-clos_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Nord",
                'src' => 'chemin-du-clos_facade-nord@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_facade-nord.jpg',
                    '1024' => 'chemin-du-clos_facade-nord@2048.jpg',
                    '512' => 'chemin-du-clos_facade-nord@1024.jpg',
                ],
            ],
            [
                'alt' => "Façade Sud",
                'src' => 'chemin-du-clos_facade-sud@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_facade-sud.jpg',
                    '1024' => 'chemin-du-clos_facade-sud@2048.jpg',
                    '512' => 'chemin-du-clos_facade-sud@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'chemin-du-clos_plan-1@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_plan-1.jpg',
                    '1024' => 'chemin-du-clos_plan-1@2048.jpg',
                    '512' => 'chemin-du-clos_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'chemin-du-clos_plan-2@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_plan-2.jpg',
                    '1024' => 'chemin-du-clos_plan-2@2048.jpg',
                    '512' => 'chemin-du-clos_plan-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 3",
                'src' => 'chemin-du-clos_plan-3@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_plan-3.jpg',
                    '1024' => 'chemin-du-clos_plan-3@2048.jpg',
                    '512' => 'chemin-du-clos_plan-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'chemin-du-clos_exterieur-4@512.jpg',
                'media' => [
                    '512' => 'chemin-du-clos_exterieur-4.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 6",
                'src' => 'chemin-du-clos_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_exterieur-6.jpg',
                    '1024' => 'chemin-du-clos_exterieur-6@2048.jpg',
                    '512' => 'chemin-du-clos_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 9",
                'src' => 'chemin-du-clos_exterieur-9@512.jpg',
                'media' => [
                    '2048' => 'chemin-du-clos_exterieur-9.jpg',
                    '1024' => 'chemin-du-clos_exterieur-9@2048.jpg',
                    '512' => 'chemin-du-clos_exterieur-9@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
