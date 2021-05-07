@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Fluhhaecker, Ipsach",
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
                'alt' => "Image extérieure 6",
                'src' => 'fluhaecker-ipsach_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'fluhaecker-ipsach_exterieur-6.jpg',
                    '1024' => 'fluhaecker-ipsach_exterieur-6@2048.jpg',
                    '512' => 'fluhaecker-ipsach_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'fluhaecker-ipsach_exterieur-4@512.jpg',
                'media' => [
                    '2048' => 'fluhaecker-ipsach_exterieur-4.jpg',
                    '1024' => 'fluhaecker-ipsach_exterieur-4@2048.jpg',
                    '512' => 'fluhaecker-ipsach_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'fluhaecker-ipsach_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'fluhaecker-ipsach_exterieur-1.jpg',
                    '1024' => 'fluhaecker-ipsach_exterieur-1@2048.jpg',
                    '512' => 'fluhaecker-ipsach_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'fluhaecker-ipsach_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'fluhaecker-ipsach_exterieur-2.jpg',
                    '1024' => 'fluhaecker-ipsach_exterieur-2@2048.jpg',
                    '512' => 'fluhaecker-ipsach_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'fluhaecker-ipsach_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'fluhaecker-ipsach_exterieur-3.jpg',
                    '1024' => 'fluhaecker-ipsach_exterieur-3@2048.jpg',
                    '512' => 'fluhaecker-ipsach_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'fluhaecker-ipsach_exterieur-5@512.jpg',
                'media' => [
                    '2048' => 'fluhaecker-ipsach_exterieur-5.jpg',
                    '1024' => 'fluhaecker-ipsach_exterieur-5@2048.jpg',
                    '512' => 'fluhaecker-ipsach_exterieur-5@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
