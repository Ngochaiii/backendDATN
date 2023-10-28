@extends('layouts.front_end.default')

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>About Us</h2>
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

    <!-- Start About Area -->
    <div class="about-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="{{ asset('assets/front_end/assets/img/1.png') }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>About Us</h2>
                            <div class="bar"></div>
                            <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                                viverra nunc tinci dunt nec elei fend et tiram.</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis egestas ante, sed viverra
                            nunc tincidunt nec nteger nonsed condimntum elit, sit amet feugiat lorem. Proin tempus sagittis
                            velit vitae scelerisque.</p>

                        <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra
                            nunc tinci dunt nec elei fend et tiram.</p>

                        <p>Business-to-business metrics analytics value proposition funding angel investor entrepreneur
                            alpha ramen equity gamification. Social proof partner network research.</p>
                    </div>
                </div>
            </div>

            <div class="about-inner-area">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about-text">
                            <h3>Our History</h3>
                            <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                                viverra nunc tinci dunt nec elei fend et tiram.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about-text">
                            <h3>Our Mission</h3>
                            <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                                viverra nunc tinci dunt nec elei fend et tiram.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="about-text">
                            <h3>Who we are</h3>
                            <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed
                                viverra nunc tinci dunt nec elei fend et tiram.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Team Area -->
    <div class="team-area ptb-80 bg-f9f6f6">
        <div class="container">
            <div class="section-title">
                <h2>Our Awesome Team</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>
        </div>

        <div class="team-slides owl-carousel owl-theme">
            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/1.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Josh Buttler</h3>
                        <span>CEO & Founder</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/2.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Alex Maxwel</h3>
                        <span>Marketing Manager</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/3.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Janny Cotller</h3>
                        <span>Nhân viên bán hàng</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/4.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Jason Statham</h3>
                        <span>Designer</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/5.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Corey Anderson</h3>
                        <span>Manager Shop</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/1.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Josh Buttler</h3>
                        <span>CEO & Founder</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/2.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Alex Maxwel</h3>
                        <span>Marketing Manager</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/3.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Janny Cotller</h3>
                        <span>Web Developer</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/4.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Jason Statham</h3>
                        <span>UX/UI Designer</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="{{ asset('assets/front_end/assets/img/team-image/5.jpg') }}" alt="image">
                </div>

                <div class="team-content">
                    <div class="team-info">
                        <h3>Corey Anderson</h3>
                        <span>Project Manager</span>
                    </div>

                    <ul>
                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
                    </ul>

                    <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Ready To Talk Area -->
    <div class="ready-to-talk">
        <div class="container">
            <h3>Ready to talk?</h3>
            <p>Our team is here to answer your question about StartP</p>
            <a href="{{route('contact')}}" class="btn btn-primary">Contact Us</a>
            <span><a href="{{route('contact')}}">Or, get started now with a free trial</a></span>
        </div>
    </div>
    <!-- End Ready To Talk Area -->

    <!-- Start Partner Area -->
    <div class="partner-area partner-section">
        <div class="container">
            <h5>More that 1.5 million businesses and organizations use StartP</h5>

            <div class="partner-inner">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-1.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover1.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-2.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover2.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-3.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover3.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-4.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover4.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-5.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover5.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-6.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover6.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-7.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover7.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-8.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover8.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-9.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover9.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-10.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover10.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-11.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover11.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-12.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover12.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-13.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover13.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-14.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover14.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-15.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover15.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-16.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover16.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-17.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover17.png') }}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-18.png') }}" alt="partner">
                            <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover18.png') }}" alt="partner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Fun Facts Area -->
    <div class="funfacts-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>We always try to understand users expectation</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="180">00</span>K</h3>
                        <p>Downloaded</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="20">00</span>K</h3>
                        <p>Feedback</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="500">00</span>+</h3>
                        <p>Workers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="70">00</span>+</h3>
                        <p>Contributors</p>
                    </div>
                </div>
            </div>

            <div class="contact-cta-box">
                <h3>Have any question about us?</h3>
                <p>Don't hesitate to contact us</p>
                <a href="{{route('contact')}}" class="btn btn-primary">Contact Us</a>
            </div>

            <div class="map-bg">
                <img src="{{ asset('assets/front_end/assets/img/map.png') }}" alt="map">
            </div>
        </div>
    </div>
    <!-- End Fun Facts Area -->
@endsection
