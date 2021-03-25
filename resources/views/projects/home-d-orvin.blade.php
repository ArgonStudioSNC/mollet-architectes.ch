@extends('app')

@php
$figures = [
    ["timg" => "ext-1@1024.jpg", "img" => "ext-1.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-2@1024.jpg", "img" => "ext-2.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-3@1024.jpg", "img" => "ext-3.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-4@1024.jpg", "img" => "ext-4.jpg", "caption" => "Image d'archive"],
    ["timg" => "brochure@1024.jpg", "img" => "brochure@2048.jpg", "caption" => "Image d'archive"],
];
foreach ($figures as &$figure) {
    $figure['timg'] = asset('storage/projects/'.$project->slug.'/mollet-architectes_'.$project->slug.'_'.$figure['timg']);
    $figure['img'] = asset('storage/projects/'.$project->slug.'/mollet-architectes_'.$project->slug.'_'.$figure['img']);
}
unset($figure);
@endphp

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="object-lead grid-x grid-margin-x">
                <button class="cell xxlarge-8 reveal-external-control" data-toggle="reveal-gallery" data-slide=0>
                    <img src="{{ $figures[0]['timg'] }}" />
                </button>
            </div>
            <div class="grid-x grid-margin-x">
                <div class="cell xxlarge-8">
                    <div class="masonry-css col-2">
                        <div class="masonry-css-item">
                            <div class="object-content">
                                <h3>Home pour personnes âgées "Les Roches", Orvin</h3>
                                <h3 class="subheader"></h3>
                                <div class="object-description">
                                    <p>
                                        Le projet de ce home pour personnes âgées exploite au maximum les avantages d'une position dominante sur un léger contrefort du Jura en site dégagé hors du village. Les oriels des façades latérales captent obliquement la vue, tandis que frontalement, les espaces d'accueil formés par le bel enchaînement spatial de la plate-forme d'accès, de la réception, de la cafétéria et de la salle à manger, s'ouvrent au paysage sous la forme d'une vaste véranda logée dans le soubassement du corps central.
                                    </p>
                                    <p>
                                        Die prominente Lage an einem flach geneigten Hang der Juralandschaft ausserhalb des Dorfes mit entsprechender Aussicht wurde bei diesem Altersheim zum entwurfsbestimmenden Thema. Dies zeigt sich in den schräg ausgestellen, die Aussicht einholenden Erkern an den Seitenfassaden, vor allem aber im schönräumlichen zusammenhängenden Gemeinschaftsbereich von seitlicher Zugangsplattform, Reception, Cafeteria und Speisesaal, der wie eine verglaste Terrasse die Basis des talseitigen Querflügels bildet.
                                    </p>
                                </div>
                                <div class="object-data grid-x">
                                    <div class="cell small-5">Maître de l'ouvrage</div>
                                    <div class="cell small-7">{{ $project->client }}</div>
                                    <div class="cell small-5">Ingénieur civil</div>
                                    <div class="cell small-7">Zimmermann + Tellenbach SA, Bern</div>
                                    <div class="cell small-5">Concours</div>
                                    <div class="cell small-7">1989</div>
                                    <div class="cell small-5">Exécution</div>
                                    <div class="cell small-7">1989 - 1991</div>
                                </div>
                            </div>
                        </div>
                        @for ($i=1; $i < count($figures); $i++)
                        <button class="masonry-css-item reveal-external-control" data-toggle="reveal-gallery" data-slide={{ $i }}>
                            <img src="{{ $figures[$i]['timg'] }}" />
                        </button>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared/orbit-gallery')

@endsection
