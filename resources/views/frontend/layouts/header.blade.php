<header class="header header-11">

    <div class="header-top">
        <div class="container-fluid">
                <div class="col-4">
                    <div class="header-left ">
                        <a href="tel:{{ $settings->bannercontact }}"><i class="icon-phone"> </i>{{ $settings->bannercontact }}</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="header-center">
                        <a>{{ $settings->bannermsg }}</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="header-right">
                        <a href="tel:{{ $settings->banneremail }}"><i class="icon-envelope"> </i> {{ $settings->banneremail }}</a>
                    </div>
                </div>
        </div><!-- End .container -->
    </div>
    @include('frontend.layouts.Navbar')
</header><!-- End .header --> <!-- endheader -->
