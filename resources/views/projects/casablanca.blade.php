@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Transformation et rehaussement de la maison familiale construite en 1930 par l'architecte municipal de la ville de Bienne (Otto Schaub).<br>Le projet tente de maintenir la lisibilité du bâtiment d'origine par une interprétation nuancée du détail constructif des parties nouvelles, tout en respectant le langage architectural des années 30.")

@section('content')

    @include('templates.object-2-col', [
        'header' => "Casablanca - Bureau Cortesi, Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Transformation et rehaussement de la maison familiale construite en 1930 par l'architecte municipal de la ville de Bienne (Otto Schaub).<br>Le projet tente de maintenir la lisibilité du bâtiment d'origine par une interprétation nuancée du détail constructif des parties nouvelles, tout en respectant le langage architectural des années 30.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Mathys & Wysseier, Bienne",
            "" => "&nbsp;",
            __('projects.execution') => "1994 - 1995",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'casablanca_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'casablanca_exterieur-1.jpg',
                    '512' => 'casablanca_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'casablanca_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'casablanca_exterieur-2.jpg',
                    '512' => 'casablanca_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'casablanca_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'casablanca_exterieur-3.jpg',
                    '512' => 'casablanca_exterieur-3@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
