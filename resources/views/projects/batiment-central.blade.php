@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Bâtiment commercial et d’habitation. Le projet répond à la hiérarchie des espaces extérieurs existants par une arcade côté rue de la Gare, une tour vitrée sur la place Centrale, une façade alignée sur toute la hauteur côté rue de Morat. La nature et l’expression des percements expriment le contenu et l’organisation intérieure.")

@section('content')

    @include('templates.object-2-col', [
        'header' => "Central, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Bâtiment commercial et d’habitation. Le projet répond à la hiérarchie des espaces extérieurs existants par une arcade côté rue de la Gare, une tour vitrée sur la place Centrale, une façade alignée sur toute la hauteur côté rue de Morat. La nature et l’expression des percements expriment le contenu et l’organisation intérieure.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
            __('projects.see-the-drawings') => asset('storage/projects/'.$project->slug.'/plans.pdf'),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Zingg + Partner, Biel",
            "" => "&nbsp;",
            __('projects.execution') => "2000 - 2002",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 2",
                'src' => 'batiment-central_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'batiment-central_exterieur-2.jpg',
                    '512' => 'batiment-central_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'batiment-central_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'batiment-central_exterieur-1.jpg',
                    '512' => 'batiment-central_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'batiment-central_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'batiment-central_exterieur-3.jpg',
                    '512' => 'batiment-central_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'batiment-central_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'batiment-central_exterieur-4.jpg',
                    '512' => 'batiment-central_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'batiment-central_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'batiment-central_exterieur-5.jpg',
                    '512' => 'batiment-central_exterieur-5@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
