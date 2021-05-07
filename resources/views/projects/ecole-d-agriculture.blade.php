@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-3-col', [
        'header' => "École d'Agriculture, Loveresse",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 8",
                'src' => 'ecole-d-agriculture_exterieur-8@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_exterieur-8.jpg',
                    '1024' => 'ecole-d-agriculture_exterieur-8@2048.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-8@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 9",
                'src' => 'ecole-d-agriculture_exterieur-9@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_exterieur-9.jpg',
                    '1024' => 'ecole-d-agriculture_exterieur-9@2048.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-9@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'ecole-d-agriculture_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_exterieur-7.jpg',
                    '1024' => 'ecole-d-agriculture_exterieur-7@2048.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'ecole-d-agriculture_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'ecole-d-agriculture_exterieur-2.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Détails 1",
                'src' => 'ecole-d-agriculture_details-1@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_details-1.jpg',
                    '1024' => 'ecole-d-agriculture_details-1@2048.jpg',
                    '512' => 'ecole-d-agriculture_details-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Détails 2",
                'src' => 'ecole-d-agriculture_details-2@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_details-2.jpg',
                    '1024' => 'ecole-d-agriculture_details-2@2048.jpg',
                    '512' => 'ecole-d-agriculture_details-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'ecole-d-agriculture_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'ecole-d-agriculture_exterieur-3.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'ecole-d-agriculture_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'ecole-d-agriculture_exterieur-4.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'ecole-d-agriculture_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'ecole-d-agriculture_exterieur-5.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 6",
                'src' => 'ecole-d-agriculture_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_exterieur-6.jpg',
                    '1024' => 'ecole-d-agriculture_exterieur-6@2048.jpg',
                    '512' => 'ecole-d-agriculture_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'ecole-d-agriculture_interieur-1@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_interieur-1.jpg',
                    '1024' => 'ecole-d-agriculture_interieur-1@2048.jpg',
                    '512' => 'ecole-d-agriculture_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'ecole-d-agriculture_plan-1@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_plan-1.jpg',
                    '1024' => 'ecole-d-agriculture_plan-1@2048.jpg',
                    '512' => 'ecole-d-agriculture_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'ecole-d-agriculture_plan-2@512.jpg',
                'media' => [
                    '2048' => 'ecole-d-agriculture_plan-2.jpg',
                    '1024' => 'ecole-d-agriculture_plan-2@2048.jpg',
                    '512' => 'ecole-d-agriculture_plan-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
