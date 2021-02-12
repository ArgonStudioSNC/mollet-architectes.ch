@extends('app')

@php
$figures = [
    ["timg" => "ext-1@1024.jpg", "img" => "ext-1@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-2@1024.jpg", "img" => "ext-2@2048.jpg", "caption" => "Image d'archive"],
    ["timg" => "ext-3@1024.jpg", "img" => "ext-3@2048.jpg", "caption" => "Image d'archive"],
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
                                <h3>Chemin Vert, Bienne</h3>
                                <h3 class="subheader"></h3>
                                <div class="project-description">
                                </div>
                                <div class="project-data grid-x">
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
