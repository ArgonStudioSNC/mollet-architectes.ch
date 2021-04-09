@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "«Architecture entre utopie et politique: expériences biennoises». Présentation au Nouveau Musée Bienne. Deux fois par an, l'Association des Amis invite des personnalités biennoise, dans le cadre de la série de manifestations «Bienne, tes souvenirs» de parler des souvenirs personnels. De cette façon, on crée une image historique vivante avec une coloration personnelle, qui ne peut être trouvée dans aucun livre d'histoire.")

@php
$dir = 'storage'.DIRECTORY_SEPARATOR.'projects'.DIRECTORY_SEPARATOR.$project->slug.DIRECTORY_SEPARATOR;
$figures = [
    [
        'alt' => "Henri Mollet en 2010",
        'src' => 'nmb-bienne-tes-souvenirs_henri@512.jpg',
        'media' => [
            '2048' => 'nmb-bienne-tes-souvenirs_henri.jpg',
            '1024' => 'nmb-bienne-tes-souvenirs_henri@2048.jpg',
            '512' => 'nmb-bienne-tes-souvenirs_henri@1024.jpg'
        ],
    ],
]
@endphp

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="object-lead grid-x grid-margin-x">
                <div class="cell xxlarge-8">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/j51zEqtMvY4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="grid-x grid-margin-x">
                <div class="cell xxlarge-8">
                    <div class="masonry-css col-2">
                        <div class="masonry-css-item">
                            <div class="object-content">
                                <h3>«Architecture entre utopie et politique: expériences biennoises»</h3>
                                <h3 class="subheader">@lang('projects.nmb-bienne-tes-souvenirs-subheader')</h3>
                                <div class="object-description">
                                    <p>14.11.2019</p>
                                    <p>Bienne, tes souvenirs. Deux fois par an, l'Association des Amis invite des personnalités biennoise, dans le cadre de la série de manifestations «Bienne, tes souvenirs» de parler des souvenirs personnels. De cette façon, on crée une image historique vivante avec une coloration personnelle, qui ne peut être trouvée dans aucun livre d'histoire.
                                    </p>
                                    <p>Zweimal im Jahr lädt der Verein der Freunde des NMB Neues Museum Biel Persönlichkeiten aus der Region Biel ein, im Rahmen der Veranstaltungsreihe «Biel, erzählt» aus ihren persönlichen Erinnerungen zu berichten. So entsteht puzzelartig ein lebendiges Geschichtsbild mit persönlichem Kolorit, das in keinem Geschichtsbuch zu finden ist.
                                    </p>
                                </div>
                            </div>
                        </div>
                        @for ($i=0; $i < count($figures); $i++)
                        <button class="masonry-css-item reveal-external-control" data-toggle="reveal-gallery" data-slide={{ $i }}>
                            <picture>
                                @foreach ($figures[$i]['media'] as $size => $path)
                                <source media="(min-width:{{ $size }}px)" srcset="{{ asset($dir.$path) }}"\>
                                @endforeach
                                <img src="{{ asset($dir.$figures[$i]['src']) }}" alt="{{ $figures[$i]['alt'] }}"\>
                            </picture>
                        </button>
                        @endfor
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
