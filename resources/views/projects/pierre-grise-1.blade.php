@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Maison familiale Pierre Grise 1, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "La maison occupe la dernière parcelle avant la forêt. Malgré une surface de terrain d'env. 1'200 m2, la surface constructible possible au sol n'atteint qu'environ 66 m2 du fait des alignements obligatoires existants (route, forêt, maison voisine). Le parti architectural, e@ plan et en coupe, tient compte de cette situation ainsi que de la géométrie irrégulière des alignements. Un plan en forme de L composé d'une juxtaposition de trois carrés de 4,78 par 4,78 m exploite rationnellement la surface constructible. La surface restreinte constructible au sol a conditionné un développement sur 3 étages.<br>La répartition sur 3 étages permet de hiérarchiser les fonctions et de nuancer le degré d'intimité des lieux. Le caractère de la parcelle ainsi que la présence voisine d'un authentique chalet du début du siècle a dicté le choix d'une construction en bois.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Laurent Chablais, Estavayer-le-Lac",
            "" => "&nbsp;",
            "Exécution" => "1992 - 1993",
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
