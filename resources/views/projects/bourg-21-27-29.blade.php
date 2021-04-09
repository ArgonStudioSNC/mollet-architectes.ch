@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Restauration et transformation de bâtiment à vocation publique des 16e, 18e et 19e siècles. Recherche d’une mise en valeur réciproque des interventions historiques successives et des interventions contemporaines par l’expression du matériau et du détail.")

@section('content')

    @include('templates.object-3-col', [
        'header' => "Bâtiment administratif<br>Bourg 21,27, 29, Bienne",
        'subheader' => "",
        'description' => [
            "Restauration et transformation de bâtiment à vocation publique des 16e, 18e et 19e siècles. Recherche d’une mise en valeur réciproque des interventions historiques successives et des interventions contemporaines par l’expression du matériau et du détail.",
            "Bei der Restaurierung und dem Umbau von öffentlichen Gebäuden aus dem 16., 18. und 19. Jahrhundert ging es primär darum, die Wechselwirkung zwischen den verschiedenen historischen Umbauten und den zeitgenössischen Interventionen hervorzuheben. Dies geschah massgeblich durch die Materialwahl und die Pflege des Details.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Zingg+Partner, Biel",
            "" => "&nbsp;",
            __('projects.conception') => "1979 - 1981",
            __('projects.execution') => "1982 - 1989",
        ],
        'figures' => [
            [
                'alt' => "Image intérieure 1",
                'src' => 'bourg-21-27-29_interieur-1@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_interieur-1.jpg',
                    '512' => 'bourg-21-27-29_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'bourg-21-27-29_interieur-2@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_interieur-2.jpg',
                    '512' => 'bourg-21-27-29_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'bourg-21-27-29_plan-1@512.jpg',
                'media' => [
                    '2048' => 'bourg-21-27-29_plan-1.jpg',
                    '1024' => 'bourg-21-27-29_plan-1@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'bourg-21-27-29_plan-1@512.jpg',
                'media' => [
                    '2048' => 'bourg-21-27-29_plan-2.jpg',
                    '1024' => 'bourg-21-27-29_plan-2@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 3",
                'src' => 'bourg-21-27-29_plan-3@512.jpg',
                'media' => [
                    '2048' => 'bourg-21-27-29_plan-3.jpg',
                    '1024' => 'bourg-21-27-29_plan-3@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'bourg-21-27-29_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_exterieur-1.jpg',
                    '512' => 'bourg-21-27-29_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 3",
                'src' => 'bourg-21-27-29_interieur-3@512.jpg',
                'media' => [
                    '2048' => 'bourg-21-27-29_interieur-3.jpg',
                    '1024' => 'bourg-21-27-29_interieur-3@2048.jpg',
                    '512' => 'bourg-21-27-29_interieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 5",
                'src' => 'bourg-21-27-29_plan-5@512.jpg',
                'media' => [
                    '2048' => 'bourg-21-27-29_plan-5.jpg',
                    '1024' => 'bourg-21-27-29_plan-5@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 4",
                'src' => 'bourg-21-27-29_plan-4@512.jpg',
                'media' => [
                    '2048' => 'bourg-21-27-29_plan-4.jpg',
                    '1024' => 'bourg-21-27-29_plan-4@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-4@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
