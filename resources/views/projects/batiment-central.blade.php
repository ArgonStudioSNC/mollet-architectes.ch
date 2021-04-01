@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Central, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Bâtiment commercial et d'habitation. Le projet répond à la hiérarchie des espaces extérieurs existants par une arcade côté rue de la Gare, une tour vitrée sur la place Centrale, une façade alignée sur toute la hauteur côté rue de Morat. La nature et l'expression des percements expriment le contenu et l'organisation intérieure.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Bahnhofstrasse, Biel",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Zingg + Partner, Biel",
            "" => "&nbsp;",
            "Exécution" => "2000 - 2002",
        ],
        'figures' => [
            [
                'alt' => "Image",
                'src' => '',
                'media' => [
                    '1024' => '@2048.jpg',
                    '512' => '@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
