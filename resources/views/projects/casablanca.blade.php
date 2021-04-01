@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Casablanca - Bureau Cortesi, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Transformation et rehaussement de la maison familiale construite en 1930 par l'architecte municipal de la ville de Bienne (Otto Schaub).<br>Le projet tente de maintenir la lisibilité du bâtiment d'origine par une interprétation nuancée du détail constructif des parties nouvelles, tout en respectant le langage architectural des années 30.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Rue du débarcadère 1 , Biel/Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Mathys & Wysseier, Bienne",
            "" => "&nbsp;",
            "Exécution" => "1994 - 1995",
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
