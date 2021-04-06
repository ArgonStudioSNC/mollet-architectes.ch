@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Immeuble commercial et d'habitation \"Dufour\", Biel/Bienne",
        'subheader' => "",
        'description' => [
            "Die Überbauung wird bestimmt durch einen Hauptkörper, der rechtwinklig zur Dufourstrasse steht und die Originalität des -Quartiers unterstreicht. Er wird von einem niederen Baukörper gefasst, der die Schräglage der Brandtstrasse sowie die Längsrichtung der Nelkenstrasse aufnimmt. Der halbrunde Kopf des Hauptbaus trägt der Strassenkreuzung als integrierendes Element Rechnung.<br>Durch die Ausprägung des halbrunden Kopfes wird der sich darin befindenden Schalterhalle der Post ein besonderer Ausdruck verliehen. Läden ergänzen die Erdgeschossnutzung und machen die Passage erlebnisreich. Der Lichthof erlaubt zudem eine optimale Nutzung des 1. Obergeschosses als Bürogeschoss. In den übrigen Geschossen sind unkonventionelle Wohnungen konzipiert, die zum Teil auch als Praxen verwendet werden können und die hauptsächlich auf die ruhige Südostseite ausgerichtet sind. Auf dem Grundstück an der Nelkenstrasse wurden sieben interessante Duplexeigentumswohnungen realisiert.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => "Dufourstrasse/Brandstrasse, Biel/Bienne",
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "H.Katzenstein AG, Solothurn",
            "" => "&nbsp;",
            __('projects.execution') => "1995 - 1997",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'dufour_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'dufour_exterieur-1@2048.jpg',
                    '512' => 'dufour_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'dufour_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'dufour_exterieur-2@2048.jpg',
                    '512' => 'dufour_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'dufour_exterieur-3@512.jpg',
                'media' => [
                    '1024' => 'dufour_exterieur-3@2048.jpg',
                    '512' => 'dufour_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'dufour_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'dufour_exterieur-4@2048.jpg',
                    '512' => 'dufour_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'dufour_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'dufour_exterieur-5@2048.jpg',
                    '512' => 'dufour_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 6",
                'src' => 'dufour_exterieur-6@512.jpg',
                'media' => [
                    '512' => 'dufour_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'dufour_exterieur-7@512.jpg',
                'media' => [
                    '512' => 'dufour_exterieur-7@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
