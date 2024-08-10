@extends('frontend.layouts.main')
@section('main-container')
 <main class="main">
    <div class="page-header text-center" style="background-image: url('frontend/images/page-header-bg.jpg">
        <div class="container">
            <h1 class="page-title">Categories <span>Pages</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
            <div class="container pt-3">
                <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('frontend/images/category.jpg') }}');">
                    <!-- <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1> -->
                </div>
            </div>

            <div class="page-content pb-3">

                <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text text-center mt-3">
                            <h2 class="title text-center mb-2">Product Detail</h2><!-- End .title text-center mb-2 -->
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p> <br>

                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p> <br>


                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>


                        </div><!-- End .about-text -->
                    </div><!-- End .col-lg-10 offset-1 -->
                </div><!-- End .row -->
                </div>

                <div class="mb-5"></div><!-- End .mb-2 -->


            </div><!-- End .page-content -->


              <div class="container-fluid featured mt-4 pb-2">
                <div class="heading mb-3">
                    <div class="heading heading-center mb-3">
                        <h2 class="title">Related Products</h2><!-- End .title -->
                    </div><!-- End .heading-left -->


                </div><!-- End .heading -->

                <div class="row">

                    <div class="col-md-12">
                        <div class="tab-content tab-content-carousel">
                            <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                    data-owl-options='{
                                        "nav": false,
                                        "dots": false,
                                        "margin": 20,
                                        "loop": true,
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
                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/3.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h2 class="product-title"><a href="#">Trainers</a></h2><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                   <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                 <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/4.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->


                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/3.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>

                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->



                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/4.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                       <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->




                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/4.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->




                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/3.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->




                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/4.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->



                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/3.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->



                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/4.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->



                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/3.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                        <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->



                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src={{url("frontend/images/demos/demo-18/images/2.jpg")}} alt="Product image" class="product-image">
                                                <!-- <img src="assets/front/images/demos/demo-18/images/3.jpg" alt="Product image" class="product-image-hover"> -->
                                            </a>


                                        </figure><!-- End .product-media -->

                                       <div class="product-body text-center">
                                            <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel" aria-labelledby="featured-men-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
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
