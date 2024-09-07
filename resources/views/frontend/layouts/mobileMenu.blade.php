<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div>

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li><a href="{{ url('/catalogue') }}">Catalogue</a></li>
                <li><a href="{{ url('/event') }}">Event</a></li>
                <li><a href="{{ url('/media') }}">Media</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>

            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons" style="margin-left: 15%">
            <a href="{{ $settings->footerfb }}" class="social-icon-mob mr-2" title="Facebook"><i
                class="icon-facebook-f"></i></a>
            <a href="{{ $settings->footertwitter }}" class="social-icon-mob mr-2" title="Twitter"><i
                    class="icon-twitter"></i></a>
            <a href="{{ $settings->footerinsta }}" class="social-icon-mob mr-2" title="Instagram"><i
                    class="icon-instagram"></i></a>
            <a href="{{ $settings->footeryoutube }}" class="social-icon-mob mr-2" title="Youtube"><i
                    class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<div class="mobile-menu-overlay"></div>

<div class="mobile-menu-container-right">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close-right text-right"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li>
                    <a href="#">Categories</a>
                    <ul>
                        @foreach ($categories as $category)
                            <li><a style="color:black;" href="{{ url('/category', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#" class="sf-with-ul">Accessories</a>
                    <ul>
                        @foreach ($accessories as $accessory)
                            <li><a style="color: black;" href="{{ url('/accessory', $accessory->id) }}">{{ $accessory->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons" style="margin-left: 15%">
            <a href="{{ $settings->footerfb }}" class="social-icon-mob mr-2" title="Facebook"><i
                    class="icon-facebook-f"></i></a>
            <a href="{{ $settings->footertwitter }}" class="social-icon-mob mr-2" title="Twitter"><i
                    class="icon-twitter"></i></a>
            <a href="{{ $settings->footerinsta }}" class="social-icon-mob mr-2" title="Instagram"><i
                    class="icon-instagram"></i></a>
            <a href="{{ $settings->footeryoutube }}" class="social-icon-mob mr-2" title="Youtube"><i
                    class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
