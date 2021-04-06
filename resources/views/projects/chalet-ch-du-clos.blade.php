@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

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
                'alt' => "Image extérieure 1",
                'src' => 'chalet-ch-du-clos_exterieur-1@512.jpg',
                'media' => [
                    '512' => 'chalet-ch-du-clos_exterieur-1.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'chalet-ch-du-clos_exterieur-2.jpg',
                'media' => [
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
        ],
    ])

@endsection
