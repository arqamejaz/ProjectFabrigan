@extends('frontend.layouts.main')

@section('title') {{ 'Event' }} @endsection

@section('main-container')
    <!-- <main class="main"> -->

 <main class="main">
            <div class="container-fluid page-header text-center" style="background-image: url(assets/front/images/page-header-bg.jpg);">
                <div class="container">
                    <h1 class="page-title">{{ $settings->eventh }}<span>{{ $settings->eventsh }}</span></h1>
                </div>
            </div>
            <!-- <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.fabrigans.com/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events</li>
                    </ol>
                </div>
            </nav>  -->


             <!-- <div class="container pt-3">
                <div class="page-header page-header-big text-center" style="background-image: url(https://www.fabrigans.com/assets/front/images/about-header-bg.jpg);">
                    <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
                </div>
            </div> -->

            <div class="page-content pt-3">
                <div class="container">
                    <div class="entry-container max-col-2">
                        @foreach ($events as $event)
                        <div class="entry-item  col-sm-6">
                            <article class="entry entry-grid text-center">

                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{ asset('uploads/events/' . $event->image) }}" alt="Event Image"">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">{{ $event->date }}</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">{{ $event->location }}</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html"></a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-cats">
                                        {{ $event->description }}
                                    </div><!-- End .entry-cats -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->
                        @endforeach

                    </div><!-- End .entry-container -->

                    {{-- <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav> --}}
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->


    <!-- </main> -->
@endsection
