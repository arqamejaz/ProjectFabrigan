@extends('frontend.layouts.main')

@section('title')
    {{ 'About Us' }}
@endsection

@section('main-container')
    <main class="main">

        <div class="container-fluid page-header text-center">
            <div class="container">
                <h1 class="page-title">{{ $settings->abouth }}<span>{{ $settings->aboutsh }}</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <div class="container-fluid mt-2">
            <div class="page-header page-header-big text-center"
                style="background-image: url('{{ asset('uploads/aboutus/' . $about->image1) }}');">
            </div> <!-- End .page-header -->
        </div><!-- End .container -->

        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text text-center mt-3">
                            <h2 class="title text-center mb-2">Who We Are</h2><!-- End .title text-center mb-2 -->
                            <p class="dark-paragraph-about">{!! nl2br(e($about->WhoWeAre)) !!}</p>
                        </div><!-- End .about-text -->
                    </div><!-- End .col-lg-10 offset-1 -->
                    <div>
                        <div class="wrapper about-wrapper">
                            <div class="pt-3 col-lg-6 text-center about-div" id="item-2">
                                <h2>From Director</h2>
                                <p class="dark-paragraph-about">{!! nl2br(e($about->directorMessage)) !!}</p>
                            </div>
                            <div class="col-lg-6 about-div" id="item-1">
                                <img src={{ asset('uploads/aboutus/' . $about->image2) }} alt="">
                            </div>
                            <div class="col-lg-6 about-div" id="item-3">
                                <img src={{ asset('uploads/aboutus/' . $about->image3) }} alt="">
                            </div>
                            <div class="pt-5 col-lg-6 text-center about-div" id="item-4">
                                <h2>About Fabrigan</h2>
                                <p class="dark-paragraph-about">{!! nl2br(e($about->about)) !!}</p>
                            </div>
                            <div class="pt-5 col-lg-6 text-center about-div" id="item-6">
                                <h2>Our Journey</h2>
                                <p class="dark-paragraph-about">{!! nl2br(e($about->journey)) !!}</p>
                            </div>
                            <div class="col-lg-6 about-div" id="item-5">
                                <img src={{ asset('uploads/aboutus/' . $about->image4) }} alt="">
                            </div>
                            <div class="col-lg-6 about-div" id="item-7">
                                <img src={{ asset('uploads/aboutus/' . $about->image5) }} alt="">
                            </div>
                            <div class="pt-5 col-lg-6 text-center about-div" id="item-8">
                                <h2>Our Vision</h2>
                                <p class="dark-paragraph-about">{!! nl2br(e($about->vision)) !!}</p>
                            </div>
                            <div class="pt-5 col-lg-6 text-center about-div" id="item-10">
                                <h2>Our Mission</h2>
                                <p class="dark-paragraph-about">{!! nl2br(e($about->mission)) !!}</p>
                            </div>
                            <div class="col-lg-6" id="item-9">
                                <img src={{ asset('uploads/aboutus/' . $about->image6) }} alt="">
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
