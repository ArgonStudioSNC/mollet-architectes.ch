@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Grand Magasin LOEB, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Côté rue de Nidau, le projet maintient le bâtiment fin XIXème existant dans la mesure ou il constitue un témoin important du passé. Les parties nouvelles donnant sur la rue Neuve, la rue de la Flore et la ruelle du Feu respectent spatialement l'échelle des bâtiments existants. Il se crée ainsi par des moyens simples des tensions mettant en valeur une architecture qui se veut simple. L'élément principal de la composition en plan et en coupe est constitué par un vide de forme conique situé au centre de gravité du complexe, perceptible depuis les trois entrées, et incluant les circulations verticales. Ce cône renversé assure à tous les niveaux une part d'éclairage naturel non négligeable et dégage une impression de grand magasin.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Rue de Nidau 50, Biel/Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Schmid & Pletscher AG, Nidau",
            "" => "&nbsp;",
            "Coucours" => "Décembre 1996",
            "Réalisation" => "1997 - 2000",
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
