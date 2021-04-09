@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "La maison occupe la dernière parcelle avant la forêt. Malgré une surface de terrain d’environ 1'200 m2, la surface constructible possible au sol n’atteint qu’environ 66 m2 du fait des alignements obligatoires existants (route, forêt, maison voisine). Le parti architectural, en plan et en coupe, tient compte de cette situation ainsi que de la géométrie irrégulière des alignements. Un plan en forme de L composé d’une juxtaposition de trois carrés de 4,78 par 4,78 m exploite rationnellement la surface constructible. La surface restreinte constructible au sol a conditionné un développement sur 3 étages.<br>La répartition sur 3 étages permet de hiérarchiser les fonctions et de nuancer le degré d’intimité des lieux. Le caractère de la parcelle ainsi que la présence voisine d’un authentique chalet du début du siècle ont dicté le choix d’une construction en bois.")

@section('content')

    @include('templates.object-3-col', [
        'header' => "Maison familiale Pierre Grise 1, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "La maison occupe la dernière parcelle avant la forêt. Malgré une surface de terrain d’environ 1'200 m<sup>2</sup>, la surface constructible possible au sol n’atteint qu’environ 66 m<sup>2</sup> du fait des alignements obligatoires existants (route, forêt, maison voisine). Le parti architectural, en plan et en coupe, tient compte de cette situation ainsi que de la géométrie irrégulière des alignements. Un plan en forme de L composé d’une juxtaposition de trois carrés de 4,78 par 4,78 m exploite rationnellement la surface constructible. La surface restreinte constructible au sol a conditionné un développement sur 3 étages.<br>La répartition sur 3 étages permet de hiérarchiser les fonctions et de nuancer le degré d’intimité des lieux. Le caractère de la parcelle ainsi que la présence voisine d’un authentique chalet du début du siècle ont dicté le choix d’une construction en bois.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Laurent Chablais, Estavayer-le-Lac",
            "" => "&nbsp;",
            __('projects.execution') => "1992 - 1993",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'pierre-grise-1_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_exterieur-1.jpg',
                    '512' => 'pierre-grise-1_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'pierre-grise-1_exterieur-2@512.jpg',
                'media' => [
                    '2048' => 'pierre-grise-1_exterieur-2.jpg',
                    '1024' => 'pierre-grise-1_exterieur-2@2048.jpg',
                    '512' => 'pierre-grise-1_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'pierre-grise-1_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_exterieur-3.jpg',
                    '512' => 'pierre-grise-1_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'pierre-grise-1_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_exterieur-4.jpg',
                    '512' => 'pierre-grise-1_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'pierre-grise-1_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_exterieur-5.jpg',
                    '512' => 'pierre-grise-1_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'pierre-grise-1_interieur-1@512.jpg',
                'media' => [
                    '2048' => 'pierre-grise-1_interieur-1.jpg',
                    '1024' => 'pierre-grise-1_interieur-1@2048.jpg',
                    '512' => 'pierre-grise-1_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'pierre-grise-1_interieur-2@512.jpg',
                'media' => [
                    '2048' => 'pierre-grise-1_interieur-2.jpg',
                    '1024' => 'pierre-grise-1_interieur-2@2048.jpg',
                    '512' => 'pierre-grise-1_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 3",
                'src' => 'pierre-grise-1_interieur-3@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_interieur-3.jpg',
                    '512' => 'pierre-grise-1_interieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 4",
                'src' => 'pierre-grise-1_interieur-4@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_interieur-4.jpg',
                    '512' => 'pierre-grise-1_interieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 5",
                'src' => 'pierre-grise-1_interieur-5@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_interieur-5.jpg',
                    '512' => 'pierre-grise-1_interieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 6",
                'src' => 'pierre-grise-1_interieur-6@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_interieur-6.jpg',
                    '512' => 'pierre-grise-1_interieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 7",
                'src' => 'pierre-grise-1_interieur-7@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_interieur-7.jpg',
                    '512' => 'pierre-grise-1_interieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 8",
                'src' => 'pierre-grise-1_interieur-8@512.jpg',
                'media' => [
                    '1024' => 'pierre-grise-1_interieur-8.jpg',
                    '512' => 'pierre-grise-1_interieur-8@1024.jpg',
                ],
            ],
            [
                'alt' => "Plans 1",
                'src' => 'pierre-grise-1_plans-1@512.jpg',
                'media' => [
                    '2048' => 'pierre-grise-1_plans-1.jpg',
                    '1024' => 'pierre-grise-1_plans-1@2048.jpg',
                    '512' => 'pierre-grise-1_plans-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plans 2",
                'src' => 'pierre-grise-1_plans-2@512.jpg',
                'media' => [
                    '2048' => 'pierre-grise-1_plans-2.jpg',
                    '1024' => 'pierre-grise-1_plans-2@2048.jpg',
                    '512' => 'pierre-grise-1_plans-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
