@extends('frontend.layouts.main')

@section('title') {{ 'Event' }} @endsection

@section('main-container')
    <!-- <main class="main"> -->

 <main class="main">
    <div class="container-fluid page-header text-center">
        <div class="container">
            <h1 class="page-title">{{ $settings->eventh }}<span>{{ $settings->eventsh }}</span></h1>
        </div>
    </div>

    <div class="page-content pt-3">
        <div class="container">
            <div class="entry-container row max-col-3">
                @foreach ($events as $event)
                <div class="entry-item col-sm-6 col-md-4">
                    <article class="entry entry-grid text-center">

                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('uploads/events/' . $event->image) }}" alt="Event Image"">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">{{ $event->date }}</a>
                                <span class="meta-separator">|</span>
                                <a href="#">{{ $event->location }}</a>
                            </div><!-- End .entry-meta -->


                            <div class="entry-cats">
                                {{ $event->description }}
                            </div><!-- End .entry-cats -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->
                @endforeach
            </div><!-- End .entry-container -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->


    <!-- </main> -->
@endsection
