@extends('frontend.layouts.main')

@section('title')
    {{ 'Accessories' }}
@endsection

@section('main-container')
    <main class="main">
        <div class="container-fluid page-header text-center">
            <div class="container">
                <h1 class="page-title">{{ $settings->accessoryh }}<span>{{ $settings->accessorysh }}</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="swiper mySwiper container-fluid pt-3">
            <div class="swiper-wrapper">
                @foreach (explode(',', $accessory->sliderImages) as $image)
                    <div class="swiper-slide">
                        <img src="{{ asset('uploads/accessories/sliderImages/' . $image) }}" alt="{{ $accessory->name }}" class="product-image">
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <div class="page-content pb-3">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text text-center mt-3">
                            <h2 class="title text-center mb-2">Description</h2><!-- End .title text-center mb-2 -->
                            {{ $accessory->description }}
                        </div><!-- End .about-text -->
                    </div><!-- End .col-lg-10 offset-1 -->
                </div><!-- End .row -->
            </div>

            <div class="mb-5"></div><!-- End .mb-2 -->


        </div><!-- End .page-content -->


        <div class="container-fluid featured mt-4 pb-2">
            <div class="heading mb-3">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Services</h2><!-- End .title -->
                </div><!-- End .heading-left -->


            </div><!-- End .heading -->

            <div class="row">

                <div class="col-md-12">
                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel"
                            aria-labelledby="featured-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl"
                                data-owl-options='{
                                        "nav": false,
                                        "dots": false,
                                        "margin": 20,
                                        "loop": true,
                                        "autoplay": true,
                                        "autoplayTimeout": 4500,
                                        "autoplaySpeed": 1000,
                                        "responsive": {
                                            "0": {
                                                "items":3
                                            },
                                            "480": {
                                                "items":3
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":3,
                                                "nav": false,
                                                "dots": false
                                            }
                                        }
                                    }'>
                                    @foreach (explode(',', $accessory->serviceImages) as $image)
                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <img src="{{ asset('uploads/accessories/serviceImages/' . $image) }}"
                                        alt="" class="product-image">
                                        </figure>
                                    </div><!-- End .product -->
                                    @endforeach
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel"
                            aria-labelledby="featured-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl"
                                data-owl-options='{
                                        "nav": false,
                                        "dots": false,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":3,
                                                "dots": false
                                            }
                                        }
                                    }'>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->





    </main><!-- End .main -->


    <!-- </main> -->
@endsection
