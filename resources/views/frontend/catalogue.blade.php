@extends('frontend.layouts.main')

@section('title')
    {{ 'Catalogue' }}
@endsection

@section('main-container')
    <!-- <main class="main"> -->
    <main>
        <div class="container-fluid page-header text-center">
            <div class="container">
                <h1 class="page-title">{{ $settings->catalogueh }}<span>{{ $settings->cataloguesh }}</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="banner-group pt-3">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($catalogues as $catalogue)
                        <div class="entry-item col-sm-6 col-md-4 mb-2">
                            <div class="category-feed banner banner-hover">
                                <a href="{{ asset('uploads/catalogues/' . $catalogue->file_path) }}">
                                    <img src="{{ url('frontend/images/demos/img/test1.jpg') }}" alt="catalogue"
                                        class="product-image">
                                </a>
                            </div>
                            <div class="product-body text-center">
                                <h2 class="product-title"><a href="#">{{ $catalogue->name }}</a></h2>
                                <!-- End .product-title -->
                            </div>
                        </div><!-- End .col-6 col-md-4 col-lg-3 -->
                    @endforeach
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .banner-group -->
    </main><!-- End .main -->
    <!-- </main> -->
@endsection
