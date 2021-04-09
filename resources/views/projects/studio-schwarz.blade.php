@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Studio Schwarz, Bern",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Détails 1",
                'src' => 'studio-schwarz_details-1@512.jpg',
                'media' => [
                    '1024' => 'studio-schwarz_details-1.jpg',
                    '512' => 'studio-schwarz_details-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Détails 2",
                'src' => 'studio-schwarz_details-2@512.jpg',
                'media' => [
                    '1024' => 'studio-schwarz_details-2.jpg',
                    '512' => 'studio-schwarz_details-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Détails 3",
                'src' => 'studio-schwarz_details-3@512.jpg',
                'media' => [
                    '1024' => 'studio-schwarz_details-3.jpg',
                    '512' => 'studio-schwarz_details-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'studio-schwarz_interieur-1@512.jpg',
                'media' => [
                    '1024' => 'studio-schwarz_interieur-1.jpg',
                    '512' => 'studio-schwarz_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'studio-schwarz_interieur-2@512.jpg',
                'media' => [
                    '512' => 'studio-schwarz_interieur-2.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 3",
                'src' => 'studio-schwarz_interieur-3@512.jpg',
                'media' => [
                    '1024' => 'studio-schwarz_interieur-3.jpg',
                    '512' => 'studio-schwarz_interieur-3@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
