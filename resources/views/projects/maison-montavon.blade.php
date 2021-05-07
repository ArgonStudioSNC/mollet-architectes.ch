@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-1-col', [
        'header' => "Maison familiale, Belprahon",
        'subheader' => "",
        'description' => [
            "1962, en stage chez Kleiber Architecte."
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
                    '1024' => 'maison-montavon_exterieur-1.jpg',
                    '512' => 'maison-montavon_exterieur-1@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
