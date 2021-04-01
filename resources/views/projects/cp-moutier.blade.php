@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Centre professionnel, Moutier",
        'subheader' => "",
        'description' => [
            "Le bâtiment comporte deux secteurs distincts, ateliers et classes, articulés entre eux par une zone de services. Les dispositions volumétriques et de surface proposées permettent en tout temps, grâce aux parois mobiles, des modifications d'organisation intérieure. Ces modifications peuvent être fondamentales, la construction permettant de définir des salles de classes dans les zones d'ateliers et inversement. Le secteur des ateliers comprend tous les locaux nécessaires à l'enseignement pratique pour diverses professions des branches de la mécanique et du bâtiment. Il se compose d'une série de 4 tranches de 13.20 m sur deux étages décalés afin d'obtenir une meilleure intégration au terrain. L'espace libre sous les ateliers est utilisé comme parking et voie de desserte. La zone de liaison entre ateliers et classes, constituée par une tranche de 6.60 m, comprend les vestiaires, les installations sanitaires et les services techniques.",
            "",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Moutier",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "B. Mertenat et L. Chablais,<br>Moutier et Estavayer-le-lac",
            "" => "&nbsp;",
            "Exécution" => "1976 - 1980",
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
