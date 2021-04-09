@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Le bâtiment comporte deux secteurs distincts, ateliers et classes, articulés entre eux par une zone de services. Les dispositions volumétriques et de surface proposées permettent en tout temps, grâce aux parois mobiles, des modifications d’organisation intérieure. Ces modifications peuvent être fondamentales, la construction permettant de définir des salles de classe dans les zones d’ateliers et inversement. Le secteur des ateliers comprend tous les locaux nécessaires à l’enseignement pratique pour diverses professions des branches de la mécanique et du bâtiment. Il se compose d’une série de 4 tranches de 13,20 m sur deux étages décalés afin d’obtenir une meilleure intégration au terrain. L’espace libre sous les ateliers est utilisé comme parking et voie de desserte. La zone de liaison entre ateliers et classes, constituée par une tranche de 6,60 m, comprend les vestiaires, les installations sanitaires et les services techniques.")

@section('content')

    @include('templates.object-3-col', [
        'header' => "Centre professionnel, Moutier",
        'subheader' => "",
        'description' => [
            "Le bâtiment comporte deux secteurs distincts, ateliers et classes, articulés entre eux par une zone de services. Les dispositions volumétriques et de surface proposées permettent en tout temps, grâce aux parois mobiles, des modifications d’organisation intérieure. Ces modifications peuvent être fondamentales, la construction permettant de définir des salles de classe dans les zones d’ateliers et inversement. Le secteur des ateliers comprend tous les locaux nécessaires à l’enseignement pratique pour diverses professions des branches de la mécanique et du bâtiment. Il se compose d’une série de 4 tranches de 13,20 m sur deux étages décalés afin d’obtenir une meilleure intégration au terrain. L’espace libre sous les ateliers est utilisé comme parking et voie de desserte. La zone de liaison entre ateliers et classes, constituée par une tranche de 6,60 m, comprend les vestiaires, les installations sanitaires et les services techniques.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "B. Mertenat et L. Chablais<br>Moutier et Estavayer-le-lac",
            "" => "&nbsp;",
            __('projects.execution') => "1976 - 1980",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'cp-moutier_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_exterieur-1.jpg',
                    '1024' => 'cp-moutier_exterieur-1@2048.jpg',
                    '512' => 'cp-moutier_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'cp-moutier_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'cp-moutier_exterieur-2.jpg',
                    '512' => 'cp-moutier_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'cp-moutier_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_exterieur-3.jpg',
                    '1024' => 'cp-moutier_exterieur-3@2048.jpg',
                    '512' => 'cp-moutier_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'cp-moutier_exterieur-4@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_exterieur-4.jpg',
                    '1024' => 'cp-moutier_exterieur-4@2048.jpg',
                    '512' => 'cp-moutier_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 1",
                'src' => 'cp-moutier_interieur-1@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_interieur-1.jpg',
                    '1024' => 'cp-moutier_interieur-1@2048.jpg',
                    '512' => 'cp-moutier_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 2",
                'src' => 'cp-moutier_interieur-2@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_interieur-2.jpg',
                    '1024' => 'cp-moutier_interieur-2@2048.jpg',
                    '512' => 'cp-moutier_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 3",
                'src' => 'cp-moutier_interieur-3@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_interieur-3.jpg',
                    '1024' => 'cp-moutier_interieur-3@2048.jpg',
                    '512' => 'cp-moutier_interieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieure 4",
                'src' => 'cp-moutier_interieur-4@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_interieur-4.jpg',
                    '1024' => 'cp-moutier_interieur-4@2048.jpg',
                    '512' => 'cp-moutier_interieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'cp-moutier_plan-1@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_plan-1.jpg',
                    '1024' => 'cp-moutier_plan-1@2048.jpg',
                    '512' => 'cp-moutier_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Structure 1",
                'src' => 'cp-moutier_structure-1@512.jpg',
                'media' => [
                    '1024' => 'cp-moutier_structure-1.jpg',
                    '512' => 'cp-moutier_structure-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Structure 2",
                'src' => 'cp-moutier_structure-2@512.jpg',
                'media' => [
                    '1024' => 'cp-moutier_structure-2.jpg',
                    '512' => 'cp-moutier_structure-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Structure 3",
                'src' => 'cp-moutier_structure-3@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_structure-3.jpg',
                    '1024' => 'cp-moutier_structure-3@2048.jpg',
                    '512' => 'cp-moutier_structure-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Structure 4",
                'src' => 'cp-moutier_structure-4@512.jpg',
                'media' => [
                    '2048' => 'cp-moutier_structure-4.jpg',
                    '1024' => 'cp-moutier_structure-4@2048.jpg',
                    '512' => 'cp-moutier_structure-4@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
