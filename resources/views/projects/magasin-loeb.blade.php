@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Côté rue de Nidau, le projet maintient le bâtiment fin XIXe existant dans la mesure ou il constitue un témoin important du passé. Les parties nouvelles donnant sur la rue Neuve, la rue de la Flore et la ruelle du Feu respectent spatialement l’échelle des bâtiments existants. Il se crée ainsi par des moyens simples des tensions mettant en valeur une architecture qui se veut simple. L’élément principal de la composition en plan et en coupe est constitué par un vide de forme conique situé au centre de gravité du complexe, perceptible depuis les trois entrées, et incluant les circulations verticales. Ce cône renversé assure à tous les niveaux une part d’éclairage naturel non négligeable et dégage une impression de grand magasin.")

@section('content')

    @include('templates.object-3-col', [
        'header' => "Grand Magasin LOEB, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Côté rue de Nidau, le projet maintient le bâtiment fin XIXe existant dans la mesure ou il constitue un témoin important du passé. Les parties nouvelles donnant sur la rue Neuve, la rue de la Flore et la ruelle du Feu respectent spatialement l’échelle des bâtiments existants. Il se crée ainsi par des moyens simples des tensions mettant en valeur une architecture qui se veut simple. L’élément principal de la composition en plan et en coupe est constitué par un vide de forme conique situé au centre de gravité du complexe, perceptible depuis les trois entrées, et incluant les circulations verticales. Ce cône renversé assure à tous les niveaux une part d’éclairage naturel non négligeable et dégage une impression de grand magasin.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Schmid & Pletscher AG, Nidau",
            "" => "&nbsp;",
            __('projects.competition') => "Décembre 1996",
            __('projects.realisation') => "1997 - 2000",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'magasin-loeb_exterieur-1@512.jpg',
                'media' => [
                    '512' => 'magasin-loeb_exterieur-1.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'magasin-loeb_interieur-1@512.jpg',
                'media' => [
                    '512' => 'magasin-loeb_interieur-1.jpg',
                ],
            ],
            [
                'alt' => "2e Obergeschoss",
                'src' => 'magasin-loeb_2-obergeschoss@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_2-obergeschoss.jpg',
                    '1024' => 'magasin-loeb_2-obergeschoss@2048.jpg',
                    '512' => 'magasin-loeb_2-obergeschoss@1024.jpg',
                ],
            ],
            [
                'alt' => "3e Obergeschoss",
                'src' => 'magasin-loeb_3-obergeschoss@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_3-obergeschoss.jpg',
                    '1024' => 'magasin-loeb_3-obergeschoss@2048.jpg',
                    '512' => 'magasin-loeb_3-obergeschoss@1024.jpg',
                ],
            ],
            [
                'alt' => "4e Obergeschoss",
                'src' => 'magasin-loeb_4-obergeschoss@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_4-obergeschoss.jpg',
                    '1024' => 'magasin-loeb_4-obergeschoss@2048.jpg',
                    '512' => 'magasin-loeb_4-obergeschoss@1024.jpg',
                ],
            ],
            [
                'alt' => "Erdgeschoss",
                'src' => 'magasin-loeb_erdgeschoss@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_erdgeschoss.jpg',
                    '1024' => 'magasin-loeb_erdgeschoss@2048.jpg',
                    '512' => 'magasin-loeb_erdgeschoss@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'magasin-loeb_exterieur-2.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'magasin-loeb_exterieur-3.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Kuppel 1",
                'src' => 'magasin-loeb_kuppel-1.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Kuppel 2",
                'src' => 'magasin-loeb_kuppel-2.jpg',
                'media' => [
                ],
            ],
            [
                'alt' => "Schnitt",
                'src' => 'magasin-loeb_schnitt@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_schnitt.jpg',
                    '1024' => 'magasin-loeb_schnitt@2048.jpg',
                    '512' => 'magasin-loeb_schnitt@1024.jpg',
                ],
            ],
            [
                'alt' => "Fassade Feuergasse",
                'src' => 'magasin-loeb_fassade-feuergasse@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_fassade-feuergasse.jpg',
                    '1024' => 'magasin-loeb_fassade-feuergasse@2048.jpg',
                    '512' => 'magasin-loeb_fassade-feuergasse@1024.jpg',
                ],
            ],
            [
                'alt' => "Fassade Florastrasse",
                'src' => 'magasin-loeb_fassade-florastrasse@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_fassade-florastrasse.jpg',
                    '1024' => 'magasin-loeb_fassade-florastrasse@2048.jpg',
                    '512' => 'magasin-loeb_fassade-florastrasse@1024.jpg',
                ],
            ],
            [
                'alt' => "Fassade Neuengasse",
                'src' => 'magasin-loeb_fassade-neuengasse@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_fassade-neuengasse.jpg',
                    '1024' => 'magasin-loeb_fassade-neuengasse@2048.jpg',
                    '512' => 'magasin-loeb_fassade-neuengasse@1024.jpg',
                ],
            ],
            [
                'alt' => "Fassade Nidaugasse",
                'src' => 'magasin-loeb_fassade-nidaugasse@512.jpg',
                'media' => [
                    '2048' => 'magasin-loeb_fassade-nidaugasse.jpg',
                    '1024' => 'magasin-loeb_fassade-nidaugasse@2048.jpg',
                    '512' => 'magasin-loeb_fassade-nidaugasse@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
