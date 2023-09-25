@extends('layouts.front_end.default')

@section('content')
    <!-- Start Main Banner -->
    <div class="main-banner">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-lg-5">
                            <div class="hero-content">
                                <h1>Secure IT Solutions for a more secure environment</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                                <a href="contact.html" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>

                        <div class="col-lg-6 offset-lg-1">
                            <div class="banner-image">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/man.png')}}" class="wow fadeInDown" data-wow-delay="0.6s"
                                    alt="man">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/code.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                                    alt="code">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/carpet.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s"
                                    alt="carpet">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/bin.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                                    alt="bin">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/book.png')}}" class="wow bounceIn" data-wow-delay="0.6s"
                                    alt="book">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/dekstop.png')}}" class="wow fadeInDown" data-wow-delay="0.6s"
                                    alt="dekstop">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/dot.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                                    alt="dot">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/flower-top-big.png')}}" class="wow fadeInUp"
                                    data-wow-delay="0.6s" alt="flower-top-big">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/flower-top.png')}}" class="wow rotateIn" data-wow-delay="0.6s"
                                    alt="flower-top">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/keyboard.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                                    alt="keyboard">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/pen.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                                    alt="pen">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/table.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                                    alt="table">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/tea-cup.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s"
                                    alt="tea-cup">
                                <img src="{{asset('assets/front_end/assets/img/banner-image/headphone.png')}}" class="wow rollIn" data-wow-delay="0.6s"
                                    alt="headphone">

                                <img src="{{asset('assets/front_end/assets/img/banner-image/main-pic.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                                    alt="main-pic">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{asset('assets/front_end/assets/img/shape1.png')}}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
        <div class="shape3"><img src="{{asset('assets/front_end/assets/img/shape3.svg')}}" alt="shape"></div>
        <div class="shape4"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape5"><img src="{{asset('assets/front_end/assets/img/shape5.png')}}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape7"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
    </div>
    <!-- End Main Banner -->

    <!-- Start Boxes Area -->
    <div class="boxes-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-box">
                        <div class="icon">
                            <i data-feather="server"></i>
                        </div>
                        <h3>Zero Configuration</h3>
                        <p>Lorem ipsum dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut labore dolore
                            magna.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-box bg-f78acb">
                        <div class="icon">
                            <i data-feather="code"></i>
                        </div>
                        <h3>Code Security</h3>
                        <p>Lorem ipsum dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut labore dolore
                            magna.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-box bg-c679e3">
                        <div class="icon">
                            <i data-feather="users"></i>
                        </div>
                        <h3>Team Management</h3>
                        <p>Lorem ipsum dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut labore dolore
                            magna.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-box bg-eb6b3d">
                        <div class="icon">
                            <i data-feather="git-branch"></i>
                        </div>
                        <h3>Access Controlled</h3>
                        <p>Lorem ipsum dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut labore dolore
                            magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Boxes Area -->

    <!-- Start Cloud Hosting Services -->
    <div class="services-area ptb-80 bg-f7fafd">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 services-content">
                    <div class="section-title">
                        <h2>Cloud Hosting Services</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="database"></i> Cloud databases
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="globe"></i> Website hosting
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="file"></i> File storage
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="trending-up"></i> Forex trading
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="folder"></i> File backups
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="monitor"></i> Remote desktop
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="mail"></i> Email servers
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="cloud"></i> Hybrid cloud
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 services-right-image">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/book-self.png')}}" class="wow fadeInDown" data-wow-delay="0.6s"
                        alt="book-self">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/box.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                        alt="box">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/chair.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s"
                        alt="chair">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/cloud.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                        alt="cloud">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/cup.png')}}" class="wow bounceIn" data-wow-delay="0.6s"
                        alt="cup">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/flower-top.png')}}" class="wow fadeInDown"
                        data-wow-delay="0.6s" alt="flower">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/head-phone.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                        alt="head-phone">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/monitor.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                        alt="monitor">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/mug.png')}}" class="wow rotateIn" data-wow-delay="0.6s"
                        alt="mug">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/table.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                        alt="table">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/tissue.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                        alt="tissue">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/water-bottle.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                        alt="water-bottle">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/wifi.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s"
                        alt="wifi">
                    <img src="{{asset('assets/front_end/assets/img/services-right-image/cercle-shape.png')}}" class="bg-image rotateme" alt="shape">

                    <img src="{{asset('assets/front_end/assets/img/services-right-image/main-pic.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                        alt="main-pic">
                </div>
            </div>
        </div>
    </div>
    <!-- End Cloud Hosting Services -->

    <!-- Start Design & Development Services -->
    <div class="services-area ptb-80">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 services-left-image">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/big-monitor.png')}}" class="wow fadeInDown"
                        data-wow-delay="0.6s" alt="big-monitor">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/creative.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                        alt="creative">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/developer.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s"
                        alt="developer">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/flower-top.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                        alt="flower-top">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/small-monitor.png')}}" class="wow bounceIn"
                        data-wow-delay="0.6s" alt="small-monitor">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/small-top.png')}}" class="wow fadeInDown" data-wow-delay="0.6s"
                        alt="small-top">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/table.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                        alt="table">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/target.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                        alt="target">
                    <img src="{{asset('assets/front_end/assets/img/services-left-image/cercle-shape.png')}}" class="bg-image rotateme" alt="shape">

                    <img src="{{asset('assets/front_end/assets/img/services-left-image/main-pic.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                        alt="main-pic">
                </div>

                <div class="col-lg-6 col-md-12 services-content">
                    <div class="section-title">
                        <h2>Design & Development</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="layout"></i> Responsive design
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="code"></i> React web development
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="smartphone"></i> Android apps development
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="code"></i> Laravel web development
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="smartphone"></i> iOS apps development
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="pen-tool"></i> UX/UI design
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="shopping-cart"></i> E-commerce development
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box">
                                <i data-feather="check-circle"></i> Print ready design
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Design & Development Services -->

    <!-- Start Features Area -->
    <div class="features-area ptb-80 bg-f7fafd">
        <div class="container">
            <div class="section-title">
                <h2>Our Features</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="icon">
                            <i data-feather="settings"></i>
                        </div>

                        <h3>Incredible Infrastructure</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="icon">
                            <i data-feather="mail"></i>
                        </div>

                        <h3>Email Notifications</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="icon bg-c679e3">
                            <i data-feather="grid"></i>
                        </div>

                        <h3>Simple Dashboard</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="icon bg-c679e3">
                            <i data-feather="info"></i>
                        </div>

                        <h3>Information Retrieval</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="icon bg-eb6b3d">
                            <i data-feather="mouse-pointer"></i>
                        </div>

                        <h3>Drag and Drop Functionality</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="icon bg-eb6b3d">
                            <i data-feather="bell"></i>
                        </div>

                        <h3>Deadline Reminders</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

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

        <div class="container-fluid p-0">
            <div class="team-slides owl-carousel owl-theme">
                <div class="single-team">
                    <div class="team-image">
                        <img src="{{asset('assets/front_end/assets/img/team-image/1.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/2.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/3.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/4.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/5.jpg')}}" alt="image">
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

                <div class="single-team">
                    <div class="team-image">
                        <img src="{{asset('assets/front_end/assets/img/team-image/1.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/2.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/3.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/4.jpg')}}" alt="image">
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
                        <img src="{{asset('assets/front_end/assets/img/team-image/5.jpg')}}" alt="image">
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
    </div>
    <!-- End Team Area -->

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
                <a href="contact.html" class="btn btn-primary">Contact Us</a>
            </div>

            <div class="map-bg">
                <img src="{{asset('assets/front_end/assets/img/map.png')}}" alt="map">
            </div>
        </div>
    </div>
    <!-- End Fun Facts Area -->

    <!-- Start Works Area -->
    <div class="works-area ptb-80 bg-f7fafd">
        <div class="container">
            <div class="section-title">
                <h2>Our Recent Works</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="works-slides owl-carousel owl-theme">
                <div class="single-works">
                    <img src="{{asset('assets/front_end/assets/img/works-image/1.jpg')}}" alt="image">

                    <a href="#" class="icon"><i data-feather="settings"></i></a>

                    <div class="works-content">
                        <h3><a href="#">Incredible infrastructure</a></h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="single-works">
                    <img src="{{asset('assets/front_end/assets/img/works-image/2.jpg')}}" alt="image">

                    <a href="#" class="icon"><i data-feather="settings"></i></a>

                    <div class="works-content">
                        <h3><a href="#">Incredible infrastructure</a></h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="single-works">
                    <img src="{{asset('assets/front_end/assets/img/works-image/3.jpg')}}" alt="image">

                    <a href="#" class="icon"><i data-feather="settings"></i></a>

                    <div class="works-content">
                        <h3><a href="#">Incredible infrastructure</a></h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="single-works">
                    <img src="{{asset('assets/front_end/assets/img/works-image/4.jpg')}}" alt="image">

                    <a href="#" class="icon"><i data-feather="settings"></i></a>

                    <div class="works-content">
                        <h3><a href="#">Incredible infrastructure</a></h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>

                <div class="single-works">
                    <img src="{{asset('assets/front_end/assets/img/works-image/5.jpg')}}" alt="image">

                    <a href="#" class="icon"><i data-feather="settings"></i></a>

                    <div class="works-content">
                        <h3><a href="#">Incredible infrastructure</a></h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna
                            aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape8 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
        <div class="shape7"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape4"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
    </div>
    <!-- End Works Area -->

    <!-- Start Pricing Area -->
    <div class="pricing-area ptb-80 bg-f9f6f6">
        <div class="container">
            <div class="section-title">
                <h2>Pricing Plans</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing-table">
                        <div class="pricing-header">
                            <h3>Basic Plan</h3>
                        </div>

                        <div class="price">
                            <span><sup>$</sup>15.00 <span>/Mon</span></span>
                        </div>

                        <div class="pricing-features">
                            <ul>
                                <li class="active">5 GB Bandwidth</li>
                                <li class="active">Highest Speed</li>
                                <li class="active">1 GB Storage</li>
                                <li class="active">Unlimited Website</li>
                                <li class="active">Unlimited Users</li>
                                <li class="active">24x7 Great Support</li>
                                <li>Data Security and Backups</li>
                                <li>Monthly Reports and Analytics</li>
                            </ul>
                        </div>

                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Select Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing-table active-plan">
                        <div class="pricing-header">
                            <h3>Advanced Plan</h3>
                        </div>

                        <div class="price">
                            <span><sup>$</sup>35.00 <span>/Mon</span></span>
                        </div>

                        <div class="pricing-features">
                            <ul>
                                <li class="active">10 GB Bandwidth</li>
                                <li class="active">Highest Speed</li>
                                <li class="active">3 GB Storage</li>
                                <li class="active">Unlimited Website</li>
                                <li class="active">Unlimited Users</li>
                                <li class="active">24x7 Great Support</li>
                                <li class="active">Data Security and Backups</li>
                                <li>Monthly Reports and Analytics</li>
                            </ul>
                        </div>

                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Select Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="pricing-table">
                        <div class="pricing-header">
                            <h3>Expert Plan</h3>
                        </div>

                        <div class="price">
                            <span><sup>$</sup>65.00 <span>/Mon</span></span>
                        </div>

                        <div class="pricing-features">
                            <ul>
                                <li class="active">15 GB Bandwidth</li>
                                <li class="active">Highest Speed</li>
                                <li class="active">5 GB Storage</li>
                                <li class="active">Unlimited Website</li>
                                <li class="active">Unlimited Users</li>
                                <li class="active">24x7 Great Support</li>
                                <li class="active">Data Security and Backups</li>
                                <li class="active">Monthly Reports and Analytics</li>
                            </ul>
                        </div>

                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape8 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
        <div class="shape7"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape4"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Feedback Area -->
    <div class="feedback-area ptb-80 bg-f7fafd">
        <div class="container">
            <div class="section-title">
                <h2>What users Saying</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="feedback-slides">
                <div class="client-feedback">
                    <div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/1.jpg')}}" alt="image">
                                </div>

                                <h3>John Lucy</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/2.jpg')}}" alt="image">
                                </div>

                                <h3>John Smith</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/3.jpg')}}" alt="image">
                                </div>

                                <h3>Maxwel Warner</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/4.jpg')}}" alt="image">
                                </div>

                                <h3>Ross Taylor</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/5.jpg')}}" alt="image">
                                </div>

                                <h3>James Anderson</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/1.jpg')}}" alt="image">
                                </div>

                                <h3>Steven Smith</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/2.jpg')}}" alt="image">
                                </div>

                                <h3>Steven Lucy</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="{{asset('assets/front_end/assets/img/client-image/3.jpg')}}" alt="image">
                                </div>

                                <h3>John Terry</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="client-thumbnails">
                    <div>
                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/1.jpg')}}" alt="client"></div>
                        </div>

                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/2.jpg')}}" alt="client"></div>
                        </div>

                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/3.jpg')}}" alt="client"></div>
                        </div>

                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/4.jpg')}}" alt="client"></div>
                        </div>

                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/5.jpg')}}" alt="client"></div>
                        </div>

                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/1.jpg')}}" alt="client"></div>
                        </div>

                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/2.jpg')}}" alt="client"></div>
                        </div>

                        <div class="item">
                            <div class="img-fill"><img src="{{asset('assets/front_end/assets/img/client-image/3.jpg')}}" alt="client"></div>
                        </div>
                    </div>

                    <button class="prev-arrow slick-arrow">
                        <i data-feather="arrow-left"></i>
                    </button>

                    <button class="next-arrow slick-arrow">
                        <i data-feather="arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{asset('assets/front_end/assets/img/shape1.png')}}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
        <div class="shape4"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape5"><img src="{{asset('assets/front_end/assets/img/shape5.png')}}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape7"><img src="{{asset('assets/front_end/assets/img/shape4.svg')}}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{asset('assets/front_end/assets/img/shape2.svg')}}" alt="shape"></div>
    </div>
    <!-- End Feedback Area -->

    <!-- Start Ready To Talk Area -->
    <div class="ready-to-talk">
        <div class="container">
            <h3>Ready to talk?</h3>
            <p>Our team is here to answer your question about StartP</p>
            <a href="contact.html" class="btn btn-primary">Contact Us</a>
            <span><a href="contact.html">Or, get started now with a free trial</a></span>
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
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-1.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover1.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-2.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover2.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-3.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover3.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-4.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover4.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-5.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover5.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-6.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover6.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-7.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover7.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-8.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover8.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-9.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover9.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-10.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover10.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-11.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover11.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-12.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover12.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-13.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover13.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-14.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover14.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-15.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover15.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-16.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover16.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-17.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover17.png')}}" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <a href="#">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-18.png')}}" alt="partner">
                            <img src="{{asset('assets/front_end/assets/img/partner-img/partner-hover18.png')}}" alt="partner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Blog Area -->
    <div class="blog-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>The News from Our Blog</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="single-blog.html">
                                <img src="{{asset('assets/front_end/assets/img/blog-image/1.jpg')}}" alt="image">
                            </a>

                            <div class="date">
                                <i data-feather="calendar"></i> March 15, 2019
                            </div>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="single-blog.html">The security risks of changing package owners</a></h3>

                            <span>by <a href="#">admin</a></span>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                            <a href="#" class="read-more-btn">Read More <i data-feather="arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="single-blog.html">
                                <img src="{{asset('assets/front_end/assets/img/blog-image/2.jpg')}}" alt="image">
                            </a>

                            <div class="date">
                                <i data-feather="calendar"></i> March 17, 2019
                            </div>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="single-blog.html">Tips to Protecting Your Business and Family</a></h3>

                            <span>by <a href="#">smith</a></span>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                            <a href="#" class="read-more-btn">Read More <i data-feather="arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="single-blog.html">
                                <img src="{{asset('assets/front_end/assets/img/blog-image/3.jpg')}}" alt="image">
                            </a>

                            <div class="date">
                                <i data-feather="calendar"></i> March 19, 2019
                            </div>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="single-blog.html">Protect Your Workplace from Cyber Attacks</a></h3>

                            <span>by <a href="#">john</a></span>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                            <a href="#" class="read-more-btn">Read More <i data-feather="arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection
