@extends('frontend.layouts.main')

@section('title') {{ 'Contact Us' }} @endsection

@section('main-container')
    <!-- <main class="main"> -->


    <main class="main">

            <div class="container-fluid">
                <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('uploads/contactus/' . $contact->contact_page_image) }}');">
                    <h1 class="page-title text-white">{{ $settings->contacth }}<span class="text-white">{{ $settings->contactsh }}</span></h1>
                </div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-2 mb-lg-0">
                            <h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                            {{ $contact->contact_information }}
                            <div class="row mt-3">
                                <div class="col-sm-7">
                                    <div class="contact-info">
                                        <h3>The Office</h3>

                                        <ul class="contact-list">
                                            <li>
                                                <i class="icon-map-marker"></i>
                                                {{ $contact->address }}
                                            </li>
                                            <li>
                                                <i class="icon-phone"></i>
                                                <a href="tel:{{ $contact->phone_no }}">{{ $contact->phone_no }}</a>
                                            </li>
                                            <li>
                                                <i class="icon-envelope"></i>
                                                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                            </li>
                                        </ul><!-- End .contact-list -->
                                    </div><!-- End .contact-info -->
                                </div><!-- End .col-sm-7 -->

                                <div class="col-sm-5">
                                    <div class="contact-info">
                                        <h3>The Office</h3>

                                        <ul class="contact-list">
                                            <li>
                                                <i class="icon-clock-o"></i>
                                                <span class="text-dark">{{ $contact->timing }}</span>
                                            </li>
                                            <li>
                                                <i class="icon-calendar"></i>
                                                <span class="text-dark">{{ $contact->days }}</span>
                                            </li>
                                        </ul><!-- End .contact-list -->
                                    </div><!-- End .contact-info -->
                                </div><!-- End .col-sm-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-6 -->
                        <div class="col-lg-6">
                            <h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->

                            <form action="#" class="contact-form mb-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="cname" class="sr-only">Name</label>
                                        <input type="text" class="form-control" id="cname" placeholder="Name *" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label for="cemail" class="sr-only">Email</label>
                                        <input type="email" class="form-control" id="cemail" placeholder="Email *" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="cphone" class="sr-only">Phone</label>
                                        <input type="tel" class="form-control" id="cphone" placeholder="Phone">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label for="csubject" class="sr-only">Subject</label>
                                        <input type="text" class="form-control" id="csubject" placeholder="Subject">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label for="cmessage" class="sr-only">Message</label>
                                <textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                                <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                    <span>SUBMIT</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form><!-- End .contact-form -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->


                </div><!-- End .container -->
                <div class="container-fluid">
                    <iframe src="{{ $contact->map_link }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End #map -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->


    <!-- </main> -->
@endsection
