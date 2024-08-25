@extends('frontend.layouts.main')

@section('title')
    {{ 'Home' }}
@endsection

@section('main-container')
    <!-- <main class="main"> -->
    <main class="main">
        <div class="swiper mySwiper context-center mb-3 mb-lg-5">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <img src={{ asset('uploads/sliders/' . $slider->image) }} alt="Slider">
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="container-fluid banners">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-6 col-md-3 col-sm-2">
                        <div class="category-feed banner banner-hover">
                            <a href="{{ url('/category/' . $category->id) }}">
                                <img src={{ asset('uploads/categories/' . $category->LPImage) }} alt="{{ $category->name }}">
                            </a>
                            <div class="banner-content">
                                <h2 class="banner-title text-white"><a href="#">{{ $category->name }}</a></h2>
                                <a href="{{ url('/category/' . $category->id) }}"
                                    class="banner-link btn btn-outline-darker btn-more text-white"
                                    style="border-radius:2rem;"><span>Explore More</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="container-fluid video-banner video-banner-bg bg-image text-center">
            <!-- Video Background -->
            {{-- <video loop muted autoplay id="background-video">
                <source src="{{ asset('/frontend/images/demos/demo-18/images/Dummy.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video> --}}
            <iframe id="background-video" src="{{ "https://player.vimeo.com/video/".$settings->videoId."?autoplay=1&muted=1&loop=1&background=1" }}"
            width="940" height="660" frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen>
            </iframe>

            <!-- Content on top of the video -->
            <div class="container-fluid text-center content-overlay">
                <h3 class="video-banner-title h1 text-white">
                    <span>{{ $settings->LPVheading }}</span>
                    <strong>{{ $settings->LPVdescription }}</strong>
                </h3><!-- End .video-banner-title -->

            </div>
        </div>

        <div class="container-fluid featured mt-4 pb-2">
            <div class="heading-more-container">
                <div class="heading text-left">
                    <h2 class="title instagram">Featured Products</h2><!-- End .title -->
                </div><!-- End .heading -->
                <div class="more-container text-center">
                    <a href="{{ url('/products') }}" class="btn btn-outline-darker btn-more"><span>View All</span><i
                            class="icon-long-arrow-right"></i></a>
                </div>
            </div>

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
                                                "items":4
                                            },
                                            "768": {
                                                "items":5
                                            },
                                            "992": {
                                                "items":5,
                                                "nav": false,
                                                "dots": false
                                            }
                                        }
                                    }'>
                                @foreach ($products as $product)
                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{ asset('uploads/products/'.$product->image) }}
                                                    alt="Product image" class="product-image">
                                            </a>
                                        </figure><!-- End .product-media -->
                                        <div class="product-body text-center">
                                            <h2 class="product-title"><a href="#">{{ $product->name }}</a></h2>
                                            <!-- End .product-title -->
                                        </div><!-- End .product-body -->
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
                                        "loop": true,
                                        "autoplay": true,
                                        "autoplayTimeout": 4500,
                                        "autoplaySpeed": 1000,
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
                                                 "items":5,
                                                "nav": false,
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

        <div class="blog-posts pb-1">
            <div class="container-fluid">
                <div class="heading-more-container">
                    <div class="heading text-left">
                        <h2 class="title instagram">Fabrigan Production</h2><!-- End .title -->
                    </div><!-- End .heading -->
                    <div class="more-container text-center">
                        <a href="#" class="btn btn-outline-darker btn-more"><span>View All</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="owl-carousel owl-simple carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{

                            "items": 2,
                            "nav": false,
                            "dots": false,
                            "margin": 20,
                            "loop": true,
                            "autoplay": true,
                            "autoplayTimeout": 6000,
                            "autoplaySpeed": 4500,


                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":2
                                }
                            }
                        }'>
                    @foreach ($media as $item)
                        @if ($item->featured)
                        @php
                            $parts = explode('/', $item->video);
                            $videoId = end($parts);
                        @endphp
                            <article class="entry-item-new entry-display">
                                <figure class="entry-media-new">
                                        <iframe id="" src="{{ "https://player.vimeo.com/video/". $videoId ."?autoplay=1&muted=1&loop=1&background=1" }}" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen></iframe>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body text-center">

                                    <h3 class="entry-title">
                                        <a href="{{ url('/media') }}">{{ $item->name }}</a>
                                    </h3>
                                </div>
                            </article><!-- End .entry -->
                        @endif
                    @endforeach
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .blog-posts -->

        <div class="pt-1 pb-1">
            <div class="container-fluid">
                <div class="heading-more-container">
                    <div class="heading text-left">
                        <h2 class="title instagram">Why Choose Us</h2><!-- End .title -->
                    </div><!-- End .heading -->
                    <div class="more-container text-center">
                        <a href="{{ $settings->footerinsta }}" class="btn btn-outline-darker btn-more"><span>View
                                Instagram</span><i class="icon-long-arrow-right"></i></a>
                    </div>
                </div>

                <div class="owl-carousel owl-simple mb-3" data-toggle="owl"
                    data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "items":3,
                            "margin": 20,
                            "loop": true,
                            "autoplay": true,
                            "autoplayTimeout": 6000,
                            "autoplaySpeed": 4500,

                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "360": {
                                    "items":3
                                },
                                "600": {
                                    "items":3
                                },
                                "992": {
                                    "items":3
                                },
                                "1200": {
                                    "items":3
                                }
                            }
                        }'>

                    @foreach ($whychooseus as $wcu)
                        <div class="instagram-feed">
                            <img src={{ asset('uploads/whychooseus/' . $wcu->image) }} alt="img">

                            <div class="instagram-feed-content">
                                <a href="{{ $settings->footerinsta }}"></i>{{ $wcu->image_text }}</a>
                            </div><!-- End .instagram-feed-content -->

                        </div><!-- End .instagram-feed -->
                    @endforeach
                </div><!-- End .owl-carousel -->


            </div><!-- End .container -->
        </div><!-- End .bg-lighter pt-5 pb-5 -->
    </main><!-- End .main -->
@endsection
