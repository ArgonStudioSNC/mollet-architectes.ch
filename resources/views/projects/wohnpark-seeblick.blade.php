@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Wohnpark Seeblick",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
            __('projects.location') => "Bellmund",
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
        ],
        'figures' => [
            [
                'alt' => "Coupe 1",
                'src' => 'wohnpark-seeblick_coupe-1@512.jpg',
                'media' => [
                    '512' => 'wohnpark-seeblick_coupe-1.jpg',
                ],
            ],
            [
                'alt' => "Façades",
                'src' => 'wohnpark-seeblick_facades@512.jpg',
                'media' => [
                    '512' => 'wohnpark-seeblick_facades.jpg',
                ],
            ],
            [
                'alt' => "Maquette 1",
                'src' => 'wohnpark-seeblick_maquette-1@512.jpg',
                'media' => [
                    '512' => 'wohnpark-seeblick_maquette-1.jpg',
                ],
            ],
            [
                'alt' => "Maquette 2",
                'src' => 'wohnpark-seeblick_maquette-2@512.jpg',
                'media' => [
                    '512' => 'wohnpark-seeblick_maquette-2.jpg',
                ],
            ],
        ],
    ])

@endsection
