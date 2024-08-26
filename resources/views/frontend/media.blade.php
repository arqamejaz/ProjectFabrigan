@extends('frontend.layouts.main')

@section('title')
    {{ 'Media' }}
@endsection

@section('main-container')
    <!-- <main class="main"> -->

    <main class="main">
        <div class="container-fluid page-header text-center">
            <div class="container">
                <h1 class="page-title">{{ $settings->mediah }}<span>{{ $settings->mediash }}</span></h1>
            </div>
        </div>
        <div class="page-content pt-3">
            <div class="container">

                <div class="entry-container row max-col-2">

                    @foreach ($media as $mItem)
                        @if ($mItem->featured)
                        @php
                            $parts = explode('/', $mItem->video);
                            $videoId = end($parts);
                        @endphp
                            <div class="entry-item-new  col-sm-6">
                                <article class="entry entry-grid text-center border_radios">
                                    <figure class="entry-media-new border_radios">
                                            <iframe src="{{ "https://player.vimeo.com/video/".$videoId }}"
                                                frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                                 allowfullscreen>
                                            </iframe>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">

                                        <h2 class="entry-title">
                                            <a href="#">{{ $mItem->name }}</a>
                                        </h2><!-- End .entry-title -->

                                        <div class="entry-cats">
                                            {{ $mItem->description }}
                                        </div><!-- End .entry-cats -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->
                            </div><!-- End .entry-item -->
                        @endif
                    @endforeach
                </div><!-- End .entry-container -->

                <div class="entry-container row max-col-3 mt-10">
                    @foreach ($media as $item)
                        @if (!$item->featured)
                        @php
                            $parts = explode('/', $item->video);
                            $videoId = end($parts);
                        @endphp
                            <div class="entry-item col-sm-6 col-md-4">
                                <article class="entry entry-grid text-center">

                                    <figure class="entry-media">

                                            <iframe id="" src="{{ "https://player.vimeo.com/video/". $videoId }}"
                                                frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                                 allowfullscreen>
                                            </iframe>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">

                                        <div class="entry-cats">
                                            {{ $item->name }}
                                        </div><!-- End .entry-cats -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->
                            </div><!-- End .entry-item -->
                        @endif
                    @endforeach
                </div><!-- End .entry-container -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->


    <!-- </main> -->
    <script>
        function playVideo(videoId) {
    var video = document.getElementById(videoId);
    var playButton = video.nextElementSibling;

    if (video.paused) {
        video.play();
        playButton.style.display = 'none';
    } else {
        video.pause();
        playButton.style.display = 'block';
    }
}
    </script>
@endsection
