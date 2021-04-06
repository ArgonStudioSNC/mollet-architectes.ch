@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Maison familial, Moutier",
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
                'src' => 'maison-baruselli-coulery_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'maison-baruselli-coulery_exterieur-1@2048.jpg',
                    '512' => 'maison-baruselli-coulery_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'maison-baruselli-coulery_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'maison-baruselli-coulery_exterieur-2@2048.jpg',
                    '512' => 'maison-baruselli-coulery_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'maison-baruselli-coulery_interieur-1@512.jpg',
                'media' => [
                    '512' => 'maison-baruselli-coulery_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'maison-baruselli-coulery_interieur-2@512.jpg',
                'media' => [
                    '512' => 'maison-baruselli-coulery_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 3",
                'src' => 'maison-baruselli-coulery_interieur-3@512.jpg',
                'media' => [
                    '512' => 'maison-baruselli-coulery_interieur-3.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 4",
                'src' => 'maison-baruselli-coulery_interieur-4@512.jpg',
                'media' => [
                    '512' => 'maison-baruselli-coulery_interieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Plans et coupes",
                'src' => 'maison-baruselli-coulery_plans-et-coupes@512.jpg',
                'media' => [
                    '512' => 'maison-baruselli-coulery_plans-et-coupes@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
