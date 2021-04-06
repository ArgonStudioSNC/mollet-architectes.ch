@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
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
                'alt' => "Coupes et façades",
                'src' => 'ried-de-madretsch_coupes-et-facades@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_coupes-et-facades@2048.jpg',
                    '512' => 'ried-de-madretsch_coupes-et-facades@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'ried-de-madretsch_plan-1@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_plan-1@2048.jpg',
                    '512' => 'ried-de-madretsch_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'ried-de-madretsch_plan-2@512.jpg',
                'media' => [
                    '1024' => 'ried-de-madretsch_plan-2@2048.jpg',
                    '512' => 'ried-de-madretsch_plan-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
