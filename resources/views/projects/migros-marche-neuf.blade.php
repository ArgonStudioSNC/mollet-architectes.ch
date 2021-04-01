@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Immeuble commercial et d'habitation\"Migros Marché-Neuf\", Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Situé dans un angle important dans le contexte urbain, le bâtiment relie les deux rues principales par sa façade. Le complexe abrite un magasin Migras, des salles de cours ainsi que des appartements. Des zones de vente extérieures animent la transition entre l 'espace public du trottoir et l' intérieur du bâtiment.",
            "An einer städtebaulich bedeutenden Ecke im Stadtzentrum gelegen, verbindet das Gebäude mit seiner umlaufenden Fassade die beiden flankierenden Strassenzüge. Es beinhaltet Laden- und Schulungsräume sowie ein Restaurant. Bei der Sockelgestaltung wurde Wert darauf gelegt, dass rückspringende Zonen mit Aussenverkauf einen fliessenden Übergang zwischen Trottoir und Innenraum bilden.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Rue du Canal 36-38, Biel/Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Communauté d'architectes<br>Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "A+P Architekten und Planer, Biel",
            "" => "&nbsp;",
            "Coucours" => "1992",
            "Réalisation" => "1996 - 1998",
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
