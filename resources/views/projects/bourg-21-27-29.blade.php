@extends('app')

@php
$figures = [
    ["timg" => "plan-1b@1024.jpg", "img" => "plan-1b@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "int-1@1024.jpg", "img" => "int-1@1024.jpg", "caption" => "Image d'archive"],
    ["timg" => "plan-1a@1024.jpg", "img" => "plan-1a@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "brochure@1024.jpg", "img" => "brochure@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "int-2@1024.jpg", "img" => "int-2@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "plan-2a@1024.jpg", "img" => "plan-2a@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "plan-2b@1024.jpg", "img" => "plan-2b@2048.jpg", "caption" => "Image d'archive"]
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
                <div class="cell">
                    <div class="masonry-css col-3">
                        <div class="masonry-css-item">
                            <div class="object-content">
                                <h3>Bâtiment administratif<br>Bourg 21,27, 29, Bienne</h3>
                                <h3 class="subheader"></h3>
                                <div class="object-description">
                                    <p>Restauration et transformation de bâtiment à vocation publique des 16ème, 18ème et 19ème siècles. Recherche d'une mise en valeur réciproque des interventions historiques successives et des interventions contemporaines par l'expression du matériau et du détail.</p>
                                    <p>Bei der Restaurierung und dem Umbau von öffentlichen Gebäuden aus dem 16., 18. und 19. Jahrhundert ging es primär darum, die Wechselwirkung zwischen den verschiedenen historischen Umbauten und den zeitgenössischen Interventionen hervorzuheben. Dies geschah massgeblich durch die Materialwahl und die Pflege des Details.</p>
                                </div>
                                <div class="object-data grid-x">
                                    <div class="cell small-5">Maître de l'ouvrage</div>
                                    <div class="cell small-7">{{ $project->client }}</div>
                                    <div class="cell small-5">Ingénieur civil</div>
                                    <div class="cell small-7">Zingg+Partner, Biel</div>
                                    <div class="cell small-5">Conception</div>
                                    <div class="cell small-7">1979 - 1981</div>
                                    <div class="cell small-5">Exécution</div>
                                    <div class="cell small-7">1982 - 1989</div>
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
