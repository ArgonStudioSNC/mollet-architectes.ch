@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Agrandissement du chalet au Ch. du Clos",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 6",
                'src' => 'chalet-ch-du-clos_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'chalet-ch-du-clos_exterieur-6.jpg',
                    '1024' => 'chalet-ch-du-clos_exterieur-6@2048.jpg',
                    '512' => 'chalet-ch-du-clos_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'chalet-ch-du-clos_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'chalet-ch-du-clos_exterieur-1.jpg',
                    '1024' => 'chalet-ch-du-clos_exterieur-1@2048.jpg',
                    '512' => 'chalet-ch-du-clos_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'chalet-ch-du-clos_plan-1.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'chalet-ch-du-clos_plan-2.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Plan 3",
                'src' => 'chalet-ch-du-clos_plan-3.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'chalet-ch-du-clos_exterieur-2@512.jpg',
                'media' => [
                    '2048' => 'chalet-ch-du-clos_exterieur-2.jpg',
                    '1024' => 'chalet-ch-du-clos_exterieur-2@2048.jpg',
                    '512' => 'chalet-ch-du-clos_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'chalet-ch-du-clos_exterieur-7@512.jpg',
                'media' => [
                    '2048' => 'chalet-ch-du-clos_exterieur-7.jpg',
                    '1024' => 'chalet-ch-du-clos_exterieur-7@2048.jpg',
                    '512' => 'chalet-ch-du-clos_exterieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'chalet-ch-du-clos_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'chalet-ch-du-clos_exterieur-3.jpg',
                    '1024' => 'chalet-ch-du-clos_exterieur-3@2048.jpg',
                    '512' => 'chalet-ch-du-clos_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'chalet-ch-du-clos_exterieur-4@512.jpg',
                'media' => [
                    '2048' => 'chalet-ch-du-clos_exterieur-4.jpg',
                    '1024' => 'chalet-ch-du-clos_exterieur-4@2048.jpg',
                    '512' => 'chalet-ch-du-clos_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'chalet-ch-du-clos_exterieur-5@512.jpg',
                'media' => [
                    '2048' => 'chalet-ch-du-clos_exterieur-5.jpg',
                    '1024' => 'chalet-ch-du-clos_exterieur-5@2048.jpg',
                    '512' => 'chalet-ch-du-clos_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 8",
                'src' => 'chalet-ch-du-clos_exterieur-2@512.jpg',
                'media' => [
                    '512' => 'chalet-ch-du-clos_exterieur-8.jpg',
                ],
            ],
        ],
    ])

@endsection
