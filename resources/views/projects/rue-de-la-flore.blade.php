@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Rue de la Flore, Biel/Bienne",
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
                'src' => 'rue-de-la-flore_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'rue-de-la-flore_exterieur-1.jpg',
                    '1024' => 'rue-de-la-flore_exterieur-1@2048.jpg',
                    '512' => 'rue-de-la-flore_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plans",
                'src' => 'rue-de-la-flore_plans@512.jpg',
                'media' => [
                    '2048' => 'rue-de-la-flore_plans.jpg',
                    '1024' => 'rue-de-la-flore_plans@2048.jpg',
                    '512' => 'rue-de-la-flore_plans@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
