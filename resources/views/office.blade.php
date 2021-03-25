@extends('app')

@php
$figures = [
    ["timg" => asset('storage/office/mollet-architectes_cover@1024.jpg'), "img" => asset('storage/office/mollet-architectes_cover@2048.jpg'), "caption" => ""],
    ["timg" => asset('storage/office/mollet-architectes_bastian@1024.jpg'), "img" => asset('storage/office/mollet-architectes_bastian.jpg'), "caption" => ""],
];
@endphp

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell large-6">
                    <div class="object-content">
                        <h3>Henri Mollet Architectes Associés SA</h3>
                        <h3 class="subheader">1988 - 2018</h3>
                        <div class="object-description">
                            <p>
                                La fonction architecturale, devenue de plus èn plus complexe, nécessite l'intervention de compétences techniques diverses de plus en plus nombreuses auxquelles l'architecte ne prétend en aucun cas se substituer. Cependant l'architecte demeure, quelle que soit l'évolution des techniques, le seul professionnel directement préparé à l'appréhension globale des problèmes de l'aménagement de l'espace et à la conception des projets, c'est-à-dire à la traduction en volume des programmes définis par le maître d'ouvrage. Le fait même que l'établissement des projets soit devenu un acte pluridiscipli­naire nécessite plus que jamais l'intervention d'une imagination créatrice seule capable de donner au projet son sens et sa valeur, acte qui doit, après avoir fait avec l'ensemble des disciplines concernées l'examen des moyens, donner une réponse globale aux problèmes posés.
                            </p><p>
                                Cette mission de création et de synthèse constitue le rôle spécifique de l'architecte. Agir sur les conditions de la qualité architecturale, c'est exiger d'abord que la conception des constructions soit assurée par des professionnels compétents et mettre la profession d'architecte en mesure d'exercer sa responsabilité sociale.
                            </p>
                            <p>
                                <button class="cell xxlarge-8 reveal-external-control" data-toggle="reveal-gallery" data-slide=1>
                                    <img src="{{ $figures[1]['timg'] }}" />
                                </button>
                            </p>
                            <p>
                                Die immer komplexer werdenden Anforderungen an die Architektur verlangen den Beizug zahlreicher Fachleute, die durch den Architekten keinesfalls ersetzt werden können. Dennoch bleibt der Architekt, unabhängig von der technischen Entwicklung, die einzige Fachkraft, die direkt für eine umfassende Beurteilung der Probleme im Zusammenhang mit der räumlichen Gestaltung und der Konzeption von Projekten befähigt ist, also für die Umsetzung des vom Bauherrn vorge­gebenen Raumprogramms. Die Tatsache, dass die Erarbeitung von Projekten zu einer interdisziplinären Tätigkeit geworden ist, erfordert mehr denn je kreative Vorstellungskraft. Nur sie ist imstande, dem Projekt Sinn und Wert zu vermitteln, aber erst nachdem mit sämtlichen Spezialisten alle zur Verfügung stehenden Mittel geprüft wurden, die eine gesamtheitliche Beantwortung der gestellten Fragen ermöglichen.
                            </p><p>
                                Diese Kreations- und Synthesearbeit ist Aufgabe des Architekten. Auf die architektonische Qualität Einfluss nehmen heisst vor allem fordern, dass die Projekt-Konzeption durch kompetente Fachleute erfolgt und dem Architekten die Grundlagen für die Wahrnehmung seiner sozialen Verantwortung liefert.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cell large-6">
                    <button class="cell xxlarge-8 reveal-external-control" data-toggle="reveal-gallery" data-slide=0>
                        <img src="{{ $figures[0]['timg'] }}" />
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('shared/orbit-gallery')

@endsection
