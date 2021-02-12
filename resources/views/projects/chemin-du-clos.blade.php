@extends('app')

@php
$figures = [
    ["timg" => "ext-1@1024.jpg", "img" => "ext-1@1024.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-2@1024.jpg", "img" => "ext-2.jpg", "caption" => "Image d'archive"],
    ["timg" => "brochure@1024.jpg", "img" => "brochure@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-4.jpg", "img" => "ext-4.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-3.jpg", "img" => "ext-3.jpg", "caption" => "Image d'archive"],
]
@endphp

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="project-lead grid-x grid-margin-x">
                <button class="cell xxlarge-8 reveal-external-control" data-toggle="reveal-gallery" data-slide=0>
                    <img src="{{ asset('storage/projects/'.$project->slug.'/mollet-architectes_'.$project->slug.'_'.$figures[0]['timg']) }}" />
                </button>
            </div>
            <div class="grid-x grid-margin-x">
                <div class="cell xxlarge-8">
                    <div class="masonry-css col-2">
                        <div class="masonry-css-item">
                            <div class="project-content">
                                <h3>Maisons en rangée "Chemin du Clos", Bienne</h3>
                                <h3 class="subheader">Atuprix Bernischer Kulturpreis 1991</h3>
                                <div class="project-description">
                                    <p>
                                        Intégration dans un quartier typique de villas, sur une parcelle minimale de 800 m2, d'un groupe de quatre maisons en rangée à plans individualisés. Recherche d'un langage architectural riche en événements dans les limites d'un petit budget.
                                    </p>
                                    <p>
                                        Die vier Reihenhäuser mit individuellen Grundrissen auf einer minimalen Parzellengrösse von 800 m2 sind in einem typischen Villenquartier integriert. Bei der Realisierung suchte man nach einer vielfältigen, reichen Architektursprache im Rahmen eines kleinen Budgets.
                                    </p>
                                </div>
                                <div class="project-data grid-x">
                                    <div class="cell small-5">Maître de l'ouvrage</div>
                                    <div class="cell small-7">{{ $project->client }}</div>
                                    <div class="cell small-5">Ingénieur civil</div>
                                    <div class="cell small-7">Chablais & Poffet, Estavayer-le-Lac</div>
                                    <div class="cell small-5">Exécution</div>
                                    <div class="cell small-7">1988 - 1989</div>
                                </div>
                            </div>
                        </div>
                        @for ($i=1; $i < count($figures); $i++)
                        <button class="masonry-css-item reveal-external-control" data-toggle="reveal-gallery" data-slide={{ $i }}>
                            <img src="{{ asset('storage/projects/'.$project->slug.'/mollet-architectes_'.$project->slug.'_'.$figures[$i]['timg']) }}" />
                        </button>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared/orbit-gallery')

@endsection
