@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Immeuble commercial et d'habitation\"Migros Marché-Neuf\", Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Situé dans un angle important dans le contexte urbain, le bâtiment relie les deux rues principales par sa façade. Le complexe abrite un magasin Migras, des salles de cours ainsi que des appartements. Des zones de vente extérieures animent la transition entre l’espace public du trottoir et l’intérieur du bâtiment.",
            "An einer städtebaulich bedeutenden Ecke im Stadtzentrum gelegen, verbindet das Gebäude mit seiner umlaufenden Fassade die beiden flankierenden Strassenzüge. Es beinhaltet Laden- und Schulungsräume sowie ein Restaurant. Bei der Sockelgestaltung wurde Wert darauf gelegt, dass rückspringende Zonen mit Aussenverkauf einen fliessenden Übergang zwischen Trottoir und Innenraum bilden.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => "Rue du Canal 36-38, Biel/Bienne",
            __('projects.client') => $project->client,
            __('projects.architects') => "Communauté d'architectes<br>Henri Mollet architectes ass. SA",
            __('projects.engineer') => "A+P Architekten und Planer, Biel",
            "" => "&nbsp;",
            __('projects.competition') => "1992",
            __('projects.realisation') => "1996 - 1998",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'migros-marche-neuf_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'migros-marche-neuf_exterieur-1@2048.jpg',
                    '512' => 'migros-marche-neuf_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'migros-marche-neuf_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'migros-marche-neuf_exterieur-2@2048.jpg',
                    '512' => 'migros-marche-neuf_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'migros-marche-neuf_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'migros-marche-neuf_exterieur-3@2048.jpg',
                    '512' => 'migros-marche-neuf_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'migros-marche-neuf_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'migros-marche-neuf_exterieur-4@2048.jpg',
                    '512' => 'migros-marche-neuf_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'migros-marche-neuf_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'migros-marche-neuf_exterieur-5@2048.jpg',
                    '512' => 'migros-marche-neuf_exterieur-5@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
