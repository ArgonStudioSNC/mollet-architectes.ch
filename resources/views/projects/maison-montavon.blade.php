@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Maison familiale, Belprahon",
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
                'src' => 'maison-montavon_exterieur-1@512.jpg',
                'media' => [
                    '512' => 'maison-montavon_exterieur-1@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
