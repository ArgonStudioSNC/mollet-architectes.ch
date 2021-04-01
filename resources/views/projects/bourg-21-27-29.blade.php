@extends('app')

@section('content')

    @include('templates.object-3-col', [
        'header' => "Bâtiment administratif<br>Bourg 21,27, 29, Bienne",
        'subheader' => "",
        'description' => [
            "Restauration et transformation de bâtiment à vocation publique des 16e, 18e et 19e siècles. Recherche d’une mise en valeur réciproque des interventions historiques successives et des interventions contemporaines par l’expression du matériau et du détail.",
            "Bei der Restaurierung und dem Umbau von öffentlichen Gebäuden aus dem 16., 18. und 19. Jahrhundert ging es primär darum, die Wechselwirkung zwischen den verschiedenen historischen Umbauten und den zeitgenössischen Interventionen hervorzuheben. Dies geschah massgeblich durch die Materialwahl und die Pflege des Details.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Burggasse 21,27,29, Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Zingg+Partner, Biel",
            "" => "&nbsp;",
            "Conception" => "1979 - 1981",
            "Exécution" => "1982 - 1989",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'bourg-21-27-29_exterieur-1@512.jpg',
                'media' => [
                    '512' => 'bourg-21-27-29_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'bourg-21-27-29_interieur-1@512.jpg',
                'media' => [
                    '512' => 'bourg-21-27-29_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'bourg-21-27-29_interieur-2@512.jpg',
                'media' => [
                    '512' => 'bourg-21-27-29_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 3",
                'src' => 'bourg-21-27-29_interieur-3@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_interieur-3@2048.jpg',
                    '512' => 'bourg-21-27-29_interieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'bourg-21-27-29_plan-1@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_plan-1@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'bourg-21-27-29_plan-1@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_plan-2@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 3",
                'src' => 'bourg-21-27-29_plan-3@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_plan-3@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 4",
                'src' => 'bourg-21-27-29_plan-4@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_plan-4@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 5",
                'src' => 'bourg-21-27-29_plan-5@512.jpg',
                'media' => [
                    '1024' => 'bourg-21-27-29_plan-5@2048.jpg',
                    '512' => 'bourg-21-27-29_plan-5@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
