@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Rue Alex-Schöni, Biel/Bienne",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 3",
                'src' => 'alex-schoeni_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_exterieur-3.jpg',
                    '1024' => 'alex-schoeni_exterieur-3@2048.jpg',
                    '512' => 'alex-schoeni_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'alex-schoeni_exterieur-5@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_exterieur-5.jpg',
                    '1024' => 'alex-schoeni_exterieur-5@2048.jpg',
                    '512' => 'alex-schoeni_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'alex-schoeni_exterieur-7@512.jpg',
                'media' => [
                    '1024' => 'alex-schoeni_exterieur-7@2048.jpg',
                    '512' => 'alex-schoeni_exterieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'alex-schoeni_interieur-1@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_interieur-1.jpg',
                    '1024' => 'alex-schoeni_interieur-1@2048.jpg',
                    '512' => 'alex-schoeni_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'alex-schoeni_interieur-2@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_interieur-2.jpg',
                    '1024' => 'alex-schoeni_interieur-2@2048.jpg',
                    '512' => 'alex-schoeni_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 6",
                'src' => 'alex-schoeni_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_exterieur-6.jpg',
                    '1024' => 'alex-schoeni_exterieur-6@2048.jpg',
                    '512' => 'alex-schoeni_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'alex-schoeni_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_exterieur-1.jpg',
                    '1024' => 'alex-schoeni_exterieur-1@2048.jpg',
                    '512' => 'alex-schoeni_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'alex-schoeni_exterieur-2@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_exterieur-2.jpg',
                    '1024' => 'alex-schoeni_exterieur-2@2048.jpg',
                    '512' => 'alex-schoeni_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'alex-schoeni_exterieur-4@512.jpg',
                'media' => [
                    '2048' => 'alex-schoeni_exterieur-4.jpg',
                    '1024' => 'alex-schoeni_exterieur-4@2048.jpg',
                    '512' => 'alex-schoeni_exterieur-4@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
