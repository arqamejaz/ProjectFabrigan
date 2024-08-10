@extends('frontend.layouts.main')

@section('title') {{ 'About Us' }} @endsection

@section('main-container')
    <main class="main">

        <div class="container-fluid">
            <div class="page-header page-header-big text-center"
                style="background-image: url('{{ asset('storage/' . $about->image1) }}');">
                <h1 class="page-title text-white">{{ $settings->abouth }}<span class="text-white">{{ $settings->aboutsh }}</span></h1>
            </div> <!-- End .page-header -->
        </div><!-- End .container -->

        <div class="page-content pb-0">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text text-center mt-3">
                            <h2 class="title text-center mb-2">Who We Are</h2><!-- End .title text-center mb-2 -->
                            <p>{{ $about->WhoWeAre }}</p>
                        </div><!-- End .about-text -->
                    </div><!-- End .col-lg-10 offset-1 -->
                    <div class="mt-5">
                        <div class="wrapper about-wrapper">
                            <div class="pt-5 col-lg-6 text-center about-div">
                                <h2>From Director</h2>
                                <p>{{ $about->directorMessage  }}</p>
                            </div>
                            <div class="col-lg-6 about-div">
                                <img src={{ asset('storage/' . $about->image2) }} alt="">
                            </div>
                        </div>
                        <div class="wrapper about-wrapper">
                            <div class="col-lg-6 about-div">
                                <img src={{ asset('storage/' . $about->image3) }} alt="">
                            </div>
                            <div class="pt-5 col-lg-6 text-center about-div">
                                <h2>About Fabrigan</h2>
                                <p>{{ $about->about }}</p>
                            </div>
                        </div>
                        <div class="wrapper about-wrapper">
                            <div class="pt-5 col-lg-6 text-center about-div">
                                <h2>Our Journey</h2>
                                <p>{{ $about->journey }}</p>
                            </div>
                            <div class="col-lg-6 about-div">
                                <img src={{ asset('storage/' . $about->image4) }} alt="">
                            </div>
                        </div>
                        <div class="wrapper about-wrapper">
                            <div class="col-lg-6 about-div">
                                <img src={{ asset('storage/' . $about->image5) }} alt="">
                            </div>
                            <div class="pt-5 col-lg-6 text-center about-div">
                                <h2>Our Vision</h2>
                                <p>{{ $about->vision }}</p>
                            </div>
                        </div>
                        <div class="wrapper about-wrapper">
                            <div class="pt-5 col-lg-6 text-center about-div">
                                <h2>Our Mission</h2>
                                <p>{{ $about->mission }}</p>
                            </div>
                            <div class="col-lg-6">
                                <img src={{ asset('storage/' . $about->image6) }} alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- End .row -->
            </div>

            <div class="mb-2"></div><!-- End .mb-2 -->


        </div><!-- End .page-content -->
    </main><!-- End .main -->
    <!-- </main> -->
@endsection
