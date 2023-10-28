@extends('layouts.front_end.default')

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>FAQ</h2>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('assets/front_end/assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape"></div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape5"><img src="{{ asset('assets/front_end/assets/img/shape5.png') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape"></div>
    </div>
    <!-- End Page Title -->

    <!-- Start FAQ Area -->
    <div class="faq-area ptb-80">
        <div class="container">
            <div class="faq-accordion">
                <ul class="accordion">
                    <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)"><i class="flaticon-plus"></i> How do
                            permissions work in Google Play Instant?</a>
                        <p class="accordion-content show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna
                            aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Is Smart Lock
                            required for instant apps?</a>
                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Can I have
                            multiple activities in a single feature?</a>
                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Can I share
                            resources between features?</a>
                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Is multidex
                            supported for instant apps?</a>
                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Can I share
                            resources between features?</a>
                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>
                </ul>
            </div>

            <div class="faq-contact">
                <h3>Ask Your Question</h3>
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Subject" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="6" placeholder="Message" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button class="btn btn-primary" type="submit">Submit Now!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End FAQ Area -->
@endsection
