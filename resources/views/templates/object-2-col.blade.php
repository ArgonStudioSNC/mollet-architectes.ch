@php
$dir = 'storage'.DIRECTORY_SEPARATOR.'projects'.DIRECTORY_SEPARATOR.$project->slug.DIRECTORY_SEPARATOR;
@endphp

<div class="site-content">
    <div class="grid-container">
        <div class="object-lead grid-x grid-margin-x">
            <button class="cell xxlarge-8 reveal-external-control" data-toggle="reveal-gallery" data-slide=0>
                <picture>
                    @foreach ($figures[0]['media'] as $size => $path)
                    <source media="(min-width:{{ $size }}px)" srcset="{{ asset($dir.$path) }}"\>
                    @endforeach
                    <img class=flex-img src="{{ asset($dir.$figures[0]['src']) }}" alt="{{ $figures[0]['alt'] }}"\>
                </picture>
            </button>
        </div>
        <div class="grid-x grid-margin-x">
            <div class="cell xxlarge-8">
                <div class="masonry-css col-2">
                    <div class="masonry-css-item">
                        <div class="object-content">
                            <h3>{!! $header !!}</h3>
                            <h3 class="subheader">{!! $subheader !!}</h3>
                            <div class="object-description">
                                @foreach ($description as $val)
                                    <p>{!! $val !!}</p>
                                @endforeach
                            </div>
                            <div class="object-brochure">
                                @foreach ($files as $key => $value)
                                    <div>
                                        <a href="{{ $value }}" target="_blank"><i class="fas fa-file-pdf"></i>&nbsp;<span class="underline">{{ $key }}</span></a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="object-data grid-x">
                                @foreach ($details as $key => $value)
                                    <div class="cell small-5">{{ $key }}.</div>
                                    <div class="cell small-7">{!! $value !!}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @for ($i=1; $i < count($figures); $i++)
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
