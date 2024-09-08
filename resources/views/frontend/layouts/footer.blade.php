<footer class="container-fluid text-center" style="background-color: black">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-lg-2" id="item-1">
                    <div class="text-center">
                        <a href={{ url('/') }}>
                            <img src={{ asset('frontend/images/logo-light-desktop.png') }} alt="logo"
                                style="height: 100px; width: 100px; display: inline">
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-5 text-center" id="item-2">
                    <div>
                        <p><b>Join the movement!</b></p>
                    </div>
                    <div>
                        <p> Follow us on social media and become a part of FABRIGAN family.</p>
                    </div>
                    <div class="widget widget-about text-center">
                        <div class="social-icons">
                            <a href="{{ $settings->footerfb }}" class="social-icon" title="Facebook"><i
                                    class="icon-facebook-f"></i></a>
                            <a href="{{ $settings->footerinsta }}" class="social-icon" title="Instagram"><i class="icon-instagram"></i></a>
                            <a href="{{ $settings->footertwitter }}" class="social-icon" title="twitter"><i class="icon-twitter"></i></a>
                            <a href="{{ $settings->footeryoutube }}" class="social-icon" title="Youtube"><i class="icon-youtube"></i></a>
                        </div>
                        <div class="widget widget-about text-center">
                            <p class="footer-copyright text-center">Copyright © 2024 Fabrigan. All Rights Reserved.</p>
                        </div>
                    </div>
                </div><!-- End .col-sm-6 col-lg-3 -->
                <div class="col-sm-6 col-lg-5" id="item-3">
                    <div>
                        <p><b>Newsletter</b></p>
                    </div>
                    <div>
                        <p>Subscribe to our newsletter for updates about offers and events</p>
                    </div>
                    <div>
                        <form action="#">
                            <div class="col-sm-12 col-lg-12">
                                <input type="email" class="form-control" placeholder="Enter Email">
                                <button class="btn btn-outline-light" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->
</footer>
