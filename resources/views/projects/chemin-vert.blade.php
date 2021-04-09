@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Ensemble composé de 5 maisons individuelles en rangées sur 3 étages et demi (largeur 4,50 m) d’une maison centrale avec locaux communs et petit duplex ainsi que d’une série de 8 duplex superposés deux à deux (largeur 6 m). Plans développés en fonction de besoins individuels de chaque famille avec pour seule contrainte les murs coupe-feu. Construction traditionnelle en briques; planchers en bois; façades modulaires permettant l’utilisation d’une vingtaine de types différents de fenêtres.")

@section('content')

    @include('templates.object-2-col', [
        'header' => "Chemin Vert, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Ensemble composé de 5 maisons individuelles en rangées sur 3 étages et demi (largeur 4,50 m) d’une maison centrale avec locaux communs et petit duplex ainsi que d’une série de 8 duplex superposés deux à deux (largeur 6 m). Plans développés en fonction de besoins individuels de chaque famille avec pour seule contrainte les murs coupe-feu. Construction traditionnelle en briques; planchers en bois; façades modulaires permettant l’utilisation d’une vingtaine de types différents de fenêtres.",
        ],
        'files' => [
            __('projects.read-the-sheet') => asset('storage/projects/'.$project->slug.'/fiche.pdf'),
        ],
        'details' => [
            __('projects.client') => "Communauté de propriétaires, Chemin Vert, Bienne",
            __('projects.architects') => "Atelier Cooplan<br>H. Mollet BSA/SIA<br>J.-P. Bechtel, Bienne",
            __('projects.engineer') => "Mertenat & Chablais, Ing. EPFL<br>Moutier et Estavayer-le-Lac",
            "" => "&nbsp;",
            __('projects.construction-start') => "Avril 1982",
            __('projects.realisation') => "Juillet 1983",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'chemin-vert_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'chemin-vert_exterieur-1.jpg',
                    '1024' => 'chemin-vert_exterieur-1@2048.jpg',
                    '512' => 'chemin-vert_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'chemin-vert_exterieur-2@512.jpg',
                'media' => [
                    '2048' => 'chemin-vert_exterieur-2.jpg',
                    '1024' => 'chemin-vert_exterieur-2@2048.jpg',
                    '512' => 'chemin-vert_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'chemin-vert_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'chemin-vert_exterieur-3.jpg',
                    '1024' => 'chemin-vert_exterieur-3@2048.jpg',
                    '512' => 'chemin-vert_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'chemin-vert_interieur-1@512.jpg',
                'media' => [
                    '2048' => 'chemin-vert_interieur-1.jpg',
                    '1024' => 'chemin-vert_interieur-1@2048.jpg',
                    '512' => 'chemin-vert_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'chemin-vert_interieur-2@512.jpg',
                'media' => [
                    '2048' => 'chemin-vert_interieur-2.jpg',
                    '1024' => 'chemin-vert_interieur-2@2048.jpg',
                    '512' => 'chemin-vert_interieur-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
