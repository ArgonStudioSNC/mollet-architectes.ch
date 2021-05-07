@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Das Projekt nutzt die Vorteile des L-förmigen Gebäudegrund­risses auf optimale Weise, indem die Haupträume der Wohnungen auf Süden, Süd-Westen und Westen ausgerichtet sind. Ein einziges, gut platziertes Treppenhaus ermöglicht die Erschliessung der 8 Wohnungen zu einer Einheit. Ein Duplex-Einfamilienhaus mit Dachgarten, Garten und privatem Zugang bietet eine Alternative zu den Wohnungen. Diese rationelle Zirkulation rechtfertigt finanziell einen Lift pro Einheit, welcher die 8 Wohnungen mit der Garage, den Waschküchen und den Kellern verbindet.")

@section('content')

    @include('templates.object-2-col', [
        'header' => "Wohnpark Seeblick, Bellmund",
        'subheader' => "",
        'description' => [
            "Das Projekt nutzt die Vorteile des L-förmigen Gebäudegrund­risses auf optimale Weise, indem die Haupträume der Wohnungen auf Süden, Süd-Westen und Westen ausgerichtet sind. Ein einziges, gut platziertes Treppenhaus ermöglicht die Erschliessung der 8 Wohnungen zu einer Einheit. Ein Duplex-Einfamilienhaus mit Dachgarten, Garten und privatem Zugang bietet eine Alternative zu den Wohnungen. Diese rationelle Zirkulation rechtfertigt finanziell einen Lift pro Einheit, welcher die 8 Wohnungen mit der Garage, den Waschküchen und den Kellern verbindet.",
            "Das Duplex-Einfamilienhaus am Kopf des Gebäudes weist viele Eigenschaften des freistehenden Einfamilienhauses auf; privates Terrain und Öffnungen auf drei Seiten, direkter Zugang von der Garage her, kein repetitiver Reihenhaus-Charakter. Der lnnenraum kann den Wünschen des zukünftigen Kunden entsprechend orga­nisiert werden.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Kurt Stettler AG , Studen",
            "" => "&nbsp;",
            __('projects.competition') => "1999",
            __('projects.execution') => "2001 - 2003",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 6",
                'src' => 'wohnpark-seeblick_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-6.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-6@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 1",
                'src' => 'wohnpark-seeblick_exterieur-1@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-1.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-1@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'wohnpark-seeblick_exterieur-2@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-2.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-2@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'wohnpark-seeblick_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-3.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-3@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'wohnpark-seeblick_exterieur-4@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-4.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-4@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'wohnpark-seeblick_exterieur-5@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-5.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-5@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 7",
                'src' => 'wohnpark-seeblick_exterieur-7@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-7.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-7@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-7@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 8",
                'src' => 'wohnpark-seeblick_exterieur-8@512.jpg',
                'media' => [
                    '2048' => 'wohnpark-seeblick_exterieur-8.jpg',
                    '1024' => 'wohnpark-seeblick_exterieur-8@2048.jpg',
                    '512' => 'wohnpark-seeblick_exterieur-8@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
