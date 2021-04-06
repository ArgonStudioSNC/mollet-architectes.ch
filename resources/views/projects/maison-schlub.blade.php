@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

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
                    '1024' => 'maison-schlub_exterieur-1@2048.jpg',
                    '512' => 'maison-schlub_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'maison-schlub_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'maison-schlub_exterieur-2@2048.jpg',
                    '512' => 'maison-schlub_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'maison-schlub_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'maison-schlub_exterieur-3@2048.jpg',
                    '512' => 'maison-schlub_exterieur-3@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
