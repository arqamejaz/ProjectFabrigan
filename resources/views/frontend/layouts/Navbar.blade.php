<div class="header-middle sticky-header">
    <div class="container" style="height:90px;">
        <div class="header-left">
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li><a href={{ url('/') }}>Home</a></li>

                    <li>
                        <a href="#" class="sf-with-ul">Categories</a>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ url('/category', $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="sf-with-ul">Accessories</a>
                        <ul>
                            @foreach ($accessories as $accessory)
                                <li><a href="{{ url('/accessory', $accessory->id) }}">{{ $accessory->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href={{ url('/catalogue') }}>Catalogue</a></li>

                </ul><!-- End .menu -->
            </nav><!-- End .main-nav -->

            <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
            </button>
        </div><!-- End .header-left -->

        <div class="header-center">

            <a href="{{ url('/') }}" class="logo-desktop justify-content-center">
                <img src={{ asset('frontend/images/logo-dark-desktop.png') }} alt="Desktop Logo" class="logo-image">
            </a>
            <a href="{{ url('/') }}" class="logo-mobile">
                <img src={{ asset('frontend/images/logo-dark-mobile.png') }} alt="Desktop Logo" class="logo-image">
            </a>

        </div><!-- End .header-center -->

        <div class="header-right">

            <nav class="main-nav">
                <ul class="menu sf-arrows">

                    <li><a href={{ url('/media') }}>Media</a></li>

                    <li><a href={{ url('/event') }}>Event</a></li>

                    <li><a href={{ url('/about') }}>About Us</a></li>

                    <li><a href={{ url('/contact') }}>Contact Us</a></li>

                </ul><!-- End .menu -->
            </nav><!-- End .main-nav -->
            <button class="mobile-menu-toggler-right">
                <span class="sr-only">Toggle mobile menu (Right)</span>
                <i class="icon-bars"></i>
            </button>
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-middle -->
