@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Maison familiale, Le Landeron",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
            __('projects.see-the-drawings') => asset('storage/projects/'.$project->slug.'/plans.pdf'),
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 3",
                'src' => 'maison-muri_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'maison-muri_exterieur-3.jpg',
                    '512' => 'maison-muri_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'maison-muri_exterieur-5@512.jpg',
                'media' => [
                    '2048' => 'maison-muri_exterieur-5.jpg',
                    '1024' => 'maison-muri_exterieur-5@2048.jpg',
                    '512' => 'maison-muri_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'maison-muri_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'maison-muri_exterieur-1.jpg',
                    '512' => 'maison-muri_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'maison-muri_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'maison-muri_exterieur-2.jpg',
                    '512' => 'maison-muri_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'maison-muri_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'maison-muri_exterieur-4.jpg',
                    '512' => 'maison-muri_exterieur-4@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
