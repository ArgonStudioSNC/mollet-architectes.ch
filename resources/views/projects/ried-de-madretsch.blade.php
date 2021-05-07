@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-3-col', [
        'header' => "Ried de Madretsch, Biel/Bienne",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 5",
                'src' => 'ried-de-madretsch_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-5.jpg',
                    '512' => 'ried-de-madretsch_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'ried-de-madretsch_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-1.jpg',
                    '512' => 'ried-de-madretsch_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'ried-de-madretsch_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-2.jpg',
                    '512' => 'ried-de-madretsch_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'ried-de-madretsch_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-3.jpg',
                    '512' => 'ried-de-madretsch_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'ried-de-madretsch_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-4.jpg',
                    '512' => 'ried-de-madretsch_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 6",
                'src' => 'ried-de-madretsch_exterieur-6@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-6.jpg',
                    '512' => 'ried-de-madretsch_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'ried-de-madretsch_exterieur-7@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-7.jpg',
                    '512' => 'ried-de-madretsch_exterieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 8",
                'src' => 'ried-de-madretsch_exterieur-8@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-8.jpg',
                    '512' => 'ried-de-madretsch_exterieur-8@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 9",
                'src' => 'ried-de-madretsch_exterieur-9@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_exterieur-9.jpg',
                    '512' => 'ried-de-madretsch_exterieur-9@1024.jpg',
                ],
            ],
            [
                'alt' => "Coupes et façades",
                'src' => 'ried-de-madretsch_coupes-et-facades@512.jpg',
                'media' => [
                    '2048' => 'ried-de-madretsch_coupes-et-facades.jpg',
                    '1024' => 'ried-de-madretsch_coupes-et-facades@2048.jpg',
                    '512' => 'ried-de-madretsch_coupes-et-facades@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'ried-de-madretsch_plan-1@512.jpg',
                'media' => [
                    '2048' => 'ried-de-madretsch_plan-1.jpg',
                    '1024' => 'ried-de-madretsch_plan-1@2048.jpg',
                    '512' => 'ried-de-madretsch_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'ried-de-madretsch_plan-2@512.jpg',
                'media' => [
                    '2048' => 'ried-de-madretsch_plan-2.jpg',
                    '1024' => 'ried-de-madretsch_plan-2@2048.jpg',
                    '512' => 'ried-de-madretsch_plan-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
