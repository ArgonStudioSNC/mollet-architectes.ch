<div class="reveal full without-overlay" id="reveal-gallery" data-reveal data-animation-in="fade-in fast" data-animation-out="fade-out fast" style="top: 0!important;">
    <div class="orbit" role="region" aria-label="Galerie photo" data-orbit data-options="autoPlay: false; bullets: false; prevClass: my-orbit-previous; nextClass: my-orbit-next;" data-use-m-u-i="false">
        <div class="orbit-wrapper grid-y text-center">
            <div class="cell my-orbit-controls">
                <button class="my-orbit-previous">
                    <span class="show-for-sr">Image précédente</span>
                    <div class="arrow-left"><?php echo Storage::get("/icons/arrow-left.svg"); ?></div>
                </button>
                <button class="my-orbit-close" data-close aria-label="Fermer la galerie" type="button">
                    <span class="show-for-sr">Fermer la galerie</span>
                    <div class="cross"><?php echo Storage::get("/icons/cross.svg"); ?></div>
                </button>
                <button class="my-orbit-next">
                    <span class="show-for-sr">Image suivante</span>
                    <div class="arrow-right"><?php echo Storage::get("/icons/arrow-left.svg"); ?></div>
                </button>
            </div>
            <ul class="cell auto orbit-container">
                @foreach ($figures as $fig)
                <li class="orbit-slide">
                    <figure class="orbit-figure grid-y">
                        <div class="cell auto">
                            <picture>
                                @foreach ($fig['media'] as $size => $path)
                                <source media="(min-width:{{ $size }}px)" srcset="{{ asset($dir.$path) }}"\>
                                @endforeach
                                <img class="centered" src="{{ asset($dir.$fig['src']) }}" alt="{{ $fig['alt'] }}"\>
                            </picture>
                        </div>
                    </figure>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
