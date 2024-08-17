@extends('frontend.layouts.main')

@section('title') {{ 'Products' }} @endsection

@section('main-container')
    <main class="main">
        <div class="container-fluid page-header text-center" style="background-image: url('frontend/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">{{ $settings->producth }}<span>{{ $settings->productsh }}</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="banner-group pt-3">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-3">
                            <figure class="product-media">
                                <img src="{{ asset('uploads/products/'.$product->image) }}" alt="Product" class="product-image">
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">{{ $product->name }}</a></h3>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-6 col-md-4 col-lg-3 -->
                    @endforeach
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .banner-group -->
    </main><!-- End .main -->
@endsection
