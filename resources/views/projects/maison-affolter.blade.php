@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-3-col', [
        'header' => "Maison familiale, Schernelz",
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
                'src' => 'maison-affolter_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-1.jpg',
                    '512' => 'maison-affolter_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'maison-affolter_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-2.jpg',
                    '512' => 'maison-affolter_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'maison-affolter_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-3.jpg',
                    '512' => 'maison-affolter_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'maison-affolter_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-4.jpg',
                    '512' => 'maison-affolter_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'maison-affolter_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-5.jpg',
                    '512' => 'maison-affolter_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 6",
                'src' => 'maison-affolter_exterieur-6@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-6.jpg',
                    '512' => 'maison-affolter_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'maison-affolter_exterieur-7@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-7.jpg',
                    '512' => 'maison-affolter_exterieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 8",
                'src' => 'maison-affolter_exterieur-8@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-8.jpg',
                    '512' => 'maison-affolter_exterieur-8@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 9",
                'src' => 'maison-affolter_exterieur-9@512.jpg',
                'media' => [
                    '1024' => 'maison-affolter_exterieur-9.jpg',
                    '512' => 'maison-affolter_exterieur-9@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
