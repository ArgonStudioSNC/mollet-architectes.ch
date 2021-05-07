@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Maison familiale, Longeau",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'maison-schlub_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'maison-schlub_exterieur-1.jpg',
                    '1024' => 'maison-schlub_exterieur-1@2048.jpg',
                    '512' => 'maison-schlub_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'maison-schlub_exterieur-4@512.jpg',
                'media' => [
                    '2048' => 'maison-schlub_exterieur-4.jpg',
                    '1024' => 'maison-schlub_exterieur-4@2048.jpg',
                    '512' => 'maison-schlub_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'maison-schlub_exterieur-2@512.jpg',
                'media' => [
                    '2048' => 'maison-schlub_exterieur-2.jpg',
                    '1024' => 'maison-schlub_exterieur-2@2048.jpg',
                    '512' => 'maison-schlub_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan Erdgeschoss",
                'src' => 'maison-schlub_plans-erdgeschoss@512.jpg',
                'media' => [
                    '2048' => 'maison-schlub_plans-erdgeschoss.jpg',
                    '1024' => 'maison-schlub_plans-erdgeschoss@2048.jpg',
                    '512' => 'maison-schlub_plans-erdgeschoss@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan Obergeschoss",
                'src' => 'maison-schlub_plans-obergeschoss@512.jpg',
                'media' => [
                    '2048' => 'maison-schlub_plans-obergeschoss.jpg',
                    '1024' => 'maison-schlub_plans-obergeschoss@2048.jpg',
                    '512' => 'maison-schlub_plans-obergeschoss@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'maison-schlub_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'maison-schlub_exterieur-3.jpg',
                    '1024' => 'maison-schlub_exterieur-3@2048.jpg',
                    '512' => 'maison-schlub_exterieur-3@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
