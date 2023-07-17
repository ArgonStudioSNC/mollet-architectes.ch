@extends('app')

@section('page-title', __('main.office').' - '.__('main.office-full-name'))
@section('page-description', __('main.description-office'))

@php
$dir = 'storage'.DIRECTORY_SEPARATOR.'office'.DIRECTORY_SEPARATOR;
$figures = [
    [
        'alt' => "Photo du bureau",
        'src' => 'cover@512.jpg',
        'media' => [
            '1024' => 'cover@2048.jpg',
            '512' => 'cover@1024.jpg'
        ],
    ],
    [
        'alt' => "Dessin Bastian",
        'src' => 'bastian@512.jpg',
        'media' => [
            '1024' => 'bastian.jpg',
            '512' => 'bastian@1024.jpg'
        ],
    ],
]



@endphp

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="object-lead grid-x grid-margin-x">
            @for ($i=1; $i < count($figures); $i++)
            <button class="cell xxlarge-8 reveal-external-control" data-toggle="reveal-gallery" data-slide={{ $i }}>
                <picture>
                    @foreach ($figures[$i]['media'] as $size => $path)
                    <source media="(min-width:{{ $size }}px)" srcset="{{ asset($dir.$path) }}"\>
                    @endforeach
                    <img src="{{ asset($dir.$figures[$i]['src']) }}" alt="{{ $figures[$i]['alt'] }}"\>
                </picture>
            </button>
            @endfor
            </div>
            <div class="grid-x grid-margin-x">
                <div class="cell xxlarge-8">
                    <div class="masonry-css">
                        <div class="masonry-css-item">
                            <div class="object-content">
                                <h3>@lang('main.office-full-name')</h3>
                                <h3 class="subheader">1968 - 2018</h3>

                                <div class="object-description">
                                    <p>@lang('office.intro-1')</p>
                                    <p>@lang('office.intro-2')</p>
                                </div>
                                <div class="object-data grid-x grid-margin-x">
                                    <div class="cell small-8 medium-4">Henri Mollet</div>
                                    <div class="cell small-4 medium-8">1939</div>
                                    <div class="cell small-8 medium-4">@lang('office.graduate')</div>
                                    <div class="cell small-4 medium-8">1966</div>
                                    <div class="cell small-8 medium-4">@lang('office.assistant')</div>
                                    <div class="cell small-4 medium-8">1966 – 1970</div>
                                    <div class="cell small-12">&nbsp;</div>
                                    <div class="cell small-8 medium-4">@lang('office.agency-lausanne')</div>
                                    <div class="cell small-4 medium-8">1969</div>
                                    <div class="cell small-8 medium-4">@lang('office.agency-biel')</div>
                                    <div class="cell small-4 medium-8">1971</div>
                                </div>
                                <div class="object-data grid-x grid-margin-x">
                                    <div class="cell medium-4 text-lowercase">@lang('office.partners').</div>
                                    <div class="cell small-8 medium-3">François Michaud</div>
                                    <div class="cell small-4 medium-5">1969 – 1971</div>
                                    <div class="cell medium-4 text-lowercase"></div>
                                    <div class="cell small-8 medium-3">Jean-Pierre Bechtel</div>
                                    <div class="cell small-4 medium-5">1970 – 1995</div>
                                    <div class="cell small-12">&nbsp;</div>
                                    <div class="cell medium-4 text-lowercase">@lang('office.main-collaborators').</div>
                                    <div class="cell medium-8">Eric Fahrer, Jean-Paul Léchot, Giovanni Zoppe, Rolf Weber, Lucien Miserez, Michèle Mollet, Christina Moldovan, Pierre-Alain Chanez, Andrew Dardel, David Reber, Paolo Santoianni, Bernadette Kaelin, Tomaso Baviera</div>
                                </div>
                            </div>
                        </div>
                        <button class="masonry-css-item reveal-external-control" data-toggle="reveal-gallery" data-slide=0>
                            <picture>
                                @foreach ($figures[0]['media'] as $size => $path)
                                <source media="(min-width:{{ $size }}px)" srcset="{{ asset($dir.$path) }}"\>
                                @endforeach
                                <img class=flex-img src="{{ asset($dir.$figures[0]['src']) }}" alt="{{ $figures[0]['alt'] }}"\>
                            </picture>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared/orbit-gallery', [
        'dir' => $dir,
        'figures' => $figures,
    ])

@endsection
