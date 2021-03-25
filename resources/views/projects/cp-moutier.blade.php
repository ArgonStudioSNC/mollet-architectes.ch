@extends('app')

@php
$figures = [
    ["timg" => "ext-3@1024.jpg", "img" => "ext-3.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-1@1024.jpg", "img" => "ext-1@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-2@1024.jpg", "img" => "ext-2@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "int-1@1024.jpg", "img" => "int-1@2048.jpg", "caption" => "Image d'archive"],
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
                                <h3>Centre professionnel à Moutier</h3>
                                <h3 class="subheader"></h3>
                                <div class="object-description">
                                    <p>
                                        Le bâtiment comporte deux secteurs distincts, ateliers et classes, articulés entre eux par une zone de services. Les dispositions volumétriques et de surface proposées permettent en tout temps, grâce aux parois mobiles, des modifications d'organisation intérieure. Ces modifications peuvent être fondamentales, la construction permettant de définir des salles de classes dans les zones d'ateliers et inversement. Le secteur des ateliers comprend tous les locaux nécessaires à l'enseignement pratique pour diverses professions des branches de la mécanique et du bâtiment. Il se compose d'une série de 4 tranches de 13.20 m sur deux étages décalés afin d'obtenir une meilleure intégration au terrain. L'espace libre sous les ateliers est utilisé comme parking et voie de desserte. La zone de liaison entre ateliers et classes, constituée par une tranche de 6.60 m, comprend les vestiaires, les installations sanitaires et les services techniques.
                                    </p>
                                </div>
                                <div class="object-data grid-x">
                                    <div class="cell small-5">Maître de l'ouvrage</div>
                                    <div class="cell small-7">{{ $project->client }}</div>
                                    <div class="cell small-5">Ingénieur civil</div>
                                    <div class="cell small-7">B. Mertenat et L. Chablais,<br>Moutier et Estavayer-le-lac</div>
                                    <div class="cell small-5">Exécution</div>
                                    <div class="cell small-7">1976 - 1980</div>
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
