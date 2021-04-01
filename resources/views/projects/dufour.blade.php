@extends('app')

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
            "Lieu" => "Dufourstrasse/Brandstrasse, Biel/Bienne",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "H.Katzenstein AG, Solothurn",
            "" => "&nbsp;",
            "Exécution" => "1995 - 1997",
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
