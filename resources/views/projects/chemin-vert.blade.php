@extends('app')

@php
$figures = [
    ["timg" => "ext-1@1024.jpg", "img" => "ext-1@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-2@1024.jpg", "img" => "ext-2@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-3@1024.jpg", "img" => "ext-3@2048.jpg", "caption" => "Image d'archive"],
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
                                <h3>Chemin Vert, Bienne</h3>
                                <h3 class="subheader"></h3>
                                <div class="object-description">
                                </div>
                                <div class="object-data grid-x">
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
