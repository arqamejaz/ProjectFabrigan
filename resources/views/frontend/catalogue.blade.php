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
                        <div class="entry-item col-sm-6 col-md-4">
                            <div class="product product-3">
                                <article class="entry entry-grid text-center">

                                <figure class="entry-media">
                                    <a href="{{ asset('uploads/catalogues/' . $catalogue->file_path) }}">
                                        <img src="{{ url('frontend/images/demos/img/category2.jpg') }}" alt="catalogue"
                                            class="product-image">
                                    </a>
                                </figure><!-- End .product-media -->
                                <div class="entry-body">
                                    <div class="product-action">
                                        {{ $catalogue->file_path }}
                                    </div><!-- End .product-action -->
                                    <h3 class="product-title"><a href="#">{{ $catalogue->name }}</a></h3>
                                    <!-- End .product-title -->
                                </div><!-- End .product-body -->
                            </article><!-- End .entry -->

                            </div><!-- End .product -->
                        </div><!-- End .col-6 col-md-4 col-lg-3 -->
                    @endforeach
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .banner-group -->
    </main><!-- End .main -->
    <!-- </main> -->
@endsection
