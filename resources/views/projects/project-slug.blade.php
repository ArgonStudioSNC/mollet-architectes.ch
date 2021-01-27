@extends('app')

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="grid-x">
                <button class="cell medium-8 orbit-external-control" data-toggle="reveal-gallery" data-slide=0>
                    <img src="https://via.placeholder.com/1280x720" />
                </button>
            </div>
            <div class="grid-x">
                <div class="cell medium-8">
                    <div class="masonry-css">
                        <div class="masonry-css-item">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio aliquam, corrupti, quis rem beatae quidem, labore, aspernatur nihil distinctio fugit sint facilis sunt eius fugiat iusto blanditiis tenetur alias ut.
                        </div>
                        <button class="masonry-css-item orbit-external-control" data-toggle="reveal-gallery" data-slide=1>
                            <img src="https://via.placeholder.com/1024x768" />
                        </button>
                        <button class="masonry-css-item orbit-external-control" data-toggle="reveal-gallery" data-slide=2>
                            <img src="https://via.placeholder.com/1024" />
                        </button>
                        <button class="masonry-css-item orbit-external-control" data-toggle="reveal-gallery" data-slide=3>
                            <img src="https://via.placeholder.com/768x1024" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reveal full without-overlay" id="reveal-gallery" data-reveal data-animation-in="fade-in fast" data-animation-out="fade-out fast">
        <div class="reveal-close-overlay" data-close></div>
        <div class="reveal-wrapper">

            {{-- <div class="grid-y text-center reveal-content">
                <div class="cell reveal-navigation">

                    <button class="close-button z-10" data-close aria-label="Close reveal" type="button">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>

                <div class="cell auto"> --}}

                    <div class="orbit" role="region" aria-label="Galerie photo du projet" data-orbit data-options="autoPlay: false; bullets: false; prevClass: my-orbit-previous; nextClass: my-orbit-next; animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                        <div class="orbit-wrapper">
                            <div class="orbit-controls">
                                <button class="my-orbit-previous z-rel-10"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
                                <button class="my-orbit-next z-rel-10"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
                            </div>
                            <ul class="orbit-container">
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image centered" src="https://via.placeholder.com/1280x720" alt="Space">
                                        <figcaption class="orbit-caption">Migros 16/9</figcaption>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image centered" src="https://via.placeholder.com/1024x768" alt="Space">
                                        <figcaption class="orbit-caption">Migros 4/3</figcaption>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image centered" src="https://via.placeholder.com/1024" alt="Space">
                                        <figcaption class="orbit-caption">Migros 1_1</figcaption>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image centered" src="https://via.placeholder.com/768x1024" alt="Space">
                                        <figcaption class="orbit-caption">Migros 3_4</figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>

                {{-- </div> --}}

            </div>
        </div>
    </div>
@endsection
