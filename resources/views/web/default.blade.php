@extends('layouts.front_end.default')

@section('content')
    <!-- Start ML Main Banner -->
    <div class="ml-main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="ml-banner-content">
                        <h1>Tháng 4 năm 2022, Cửa hàng Eunoia cho ra mắt các sản phẩm thời trang cao cấp nhập khẩu từ Hàn
                            Quốc.</h1>
                        <p>Luôn hướng tới sự mới mẻ , vươn tới cái đẹp duy mỹ, cửa hàng Eunoi by AN mong muốn ra mắt những
                            bộ sưu tập có tính chủ đề - được nhập khẩu và
                            chọn lọc ý tưởng từ những câu chuyện đầy cảm xúc từ những bộ sưu tập của các nhãn hàng có mặt ở
                            hàn quốc. Mỗi bộ sưu tập là 1 câu chuyện khác nhau .</p>

                        <a href="contact.html" class="btn btn-secondary">Get Started</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="ml-banner-image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/1.png') }}" class="wow fadeIn"
                            data-wow-delay="2s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/2.png') }}" class="wow fadeInUp"
                            data-wow-delay="1s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/3.png') }}" class="wow fadeInUp"
                            data-wow-delay="0.5s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/4.png') }}" class="wow fadeInUp"
                            data-wow-delay="2s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/5.png') }}" class="wow fadeInDown"
                            data-wow-delay="2.5s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/6.png') }}" class="wow fadeInDown"
                            data-wow-delay="1.9s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/7.png') }}" class="wow fadeInDown"
                            data-wow-delay="2.1s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/8.png') }}" class="wow fadeInDown"
                            data-wow-delay="1.9s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/9.png') }}" class="wow fadeInDown"
                            data-wow-delay="1.7s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/10.png') }}" class="wow fadeInDown"
                            data-wow-delay="1.5s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/11.png') }}" class="wow fadeInUp"
                            data-wow-delay="0.4s" alt="image">
                        <img src="{{ asset('assets/front_end/assets/img/ml-banner-image/main-pic.png') }}"
                            class="wow fadeInUp" data-wow-delay="0.5s" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('assets/front_end/assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape"></div>
    </div>
    <!-- End ML Main Banner -->

    <!-- Start ML Partner Area -->
    <div class="ml-partner-area mt-minus-top ptb-80 pb-0">
        <div class="container">
            <div class="partner-slides owl-carousel owl-theme">
                @foreach ($brands as $item => $brand)
                    <div class="single-ml-partner">
                        <a href="#">
                            @if ($brand->logo = 'logo.png')
                                <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-1.png') }}"
                                    alt="image">
                                <img src="{{ asset('assets/front_end/assets/img/partner-img/partner-hover1.png') }}"
                                    alt="image">
                            @else
                                <img src="{{ asset('/file/brands/' . $brand->logo)  }}" alt="image">
                                <img src="{{ asset('/file/brands/' . $brand->logo)  }}" alt="image">
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End ML Partner Area -->

    <!-- Start Our Solutions Area -->
    <div class="solutions-area ptb-80">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">What We Offer</span>
                <h2>Các tiện ích chúng tôi có</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-solutions-box">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/assets/img/icon4.png') }}" alt="image">
                        </div>
                        <h3><a href="#">Hàng triệu sản phẩm cho người dùng</a></h3>
                        <p>Khám phá sản phẩm và nhà cung cấp cho các bạn từ hàng triệu sản phẩm được bày bán trên website
                            của Eunoia.</p>
                        <a href="single-services.html" class="learn-more-btn"><i data-feather="plus-circle"></i> Learn
                            More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-solutions-box">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/assets/img/icon5.png') }}" alt="image">
                        </div>
                        <h3><a href="#">Giao dịch và chất lượng đảm bảo</a></h3>
                        <p>Đảm bảo chất lượng sản xuất từ các nhà cung cấp đã được xác minh,
                            bảo vệ đơn hàng của bạn từ khâu thanh toán đến giao hàng..</p>
                        <a href="single-services.html" class="learn-more-btn"><i data-feather="plus-circle"></i> Learn
                            More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-solutions-box">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/assets/img/icon6.png') }}" alt="image">
                        </div>
                        <h3><a href="#">Giải pháp giao dịch toàn diện</a></h3>
                        <p>Đặt hàng trơn tru từ bước tìm kiếm sản phẩm/nhà cung cấp đến quản lý, thanh toán và thực hiện đơn
                            hàng.</p>
                        <a href="single-services.html" class="learn-more-btn"><i data-feather="plus-circle"></i> Learn
                            More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-solutions-box">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/assets/img/icon7.png') }}" alt="image">
                        </div>
                        <h3><a href="#">Trải nghiệm giao dịch cá nhân hóa</a></h3>
                        <p>Nhận quyền lợi chọn lọc, như hàng mẫu giảm giá và hỗ trợ chuyên biệt,
                            phù hợp với gian đoạn phát triển của doanh nghiệp bạn..</p>
                        <a href="single-services.html" class="learn-more-btn"><i data-feather="plus-circle"></i> Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('assets/front_end/assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape">
        </div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
    </div>
    <!-- End Our Solutions Area -->

    <!-- Start ML About Area -->
    <div class="about-area pt-0 ptb-80">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="ml-about-img">
                        <img src="//file.hstatic.net/200000685745/file/eunoia_s_wonderland_campaign_ngua_resize_web_721c4f40ba804a6aa178ba1d0eb4fd74.jpg"
                            alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="ml-about-content">
                        <span class="sub-title">About Us</span>
                        <h2>Thu hút khán giả mới thông qua phương pháp tiếp cận thông minh</h2>
                        <div class="bar"></div>
                        <p>Eunoia (xuất xứ là một danh từ tiếng Hy Lạp) mang ý nghĩa về một tâm hồn thuần khiết.</p>
                        <p>Chúng tôi thực hiện điều này bằng cách cung cấp cho nhà cung cấp những công cụ cần thiết để tiếp
                            cận đối tượng toàn cầu cho sản phẩm của họ
                            và bằng cách giúp người mua tìm thấy sản phẩm và nhà cung cấp một cách nhanh chóng và hiệu quả.
                        </p>

                        <a href="contact.html" class="btn btn-secondary">Discover More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('assets/front_end/assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
    </div>
    <!-- End ML About Area -->

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
                <img src="{{ asset('assets/front_end/assets/img/map.png') }}" alt="map">
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('assets/front_end/assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
    </div>
    <!-- End Fun Facts Area -->

    <!-- Start ML Projects Area -->
    <div class="ml-projects-area pt-0 ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Proud Projects That Make Us Stand Out</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="ml-projects-slides owl-carousel owl-theme">
                <div class="single-ml-projects-box">
                    <img src="{{ asset('assets/front_end/assets/img/projects-img1.jpg') }}" alt="image">

                    <div class="plus-icon">
                        <a href="single-project.html">
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="single-ml-projects-box">
                    <img src="{{ asset('assets/front_end/assets/img/projects-img2.jpg') }}" alt="image">

                    <div class="plus-icon">
                        <a href="single-project.html">
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="single-ml-projects-box">
                    <img src="{{ asset('assets/front_end/assets/img/projects-img3.jpg') }}" alt="image">

                    <div class="plus-icon">
                        <a href="single-project.html">
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="single-ml-projects-box">
                    <img src="{{ asset('assets/front_end/assets/img/projects-img4.jpg') }}" alt="image">

                    <div class="plus-icon">
                        <a href="single-project.html">
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="single-ml-projects-box">
                    <img src="{{ asset('assets/front_end/assets/img/projects-img5.jpg') }}" alt="image">

                    <div class="plus-icon">
                        <a href="single-project.html">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape">
        </div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
    </div>
    <!-- End ML Projects Area -->

    <!-- Start Pricing Area -->
    <div class="pricing-area ptb-80 pt-0">
        <div class="container">
            <div class="section-title">
                <h2>Our Pricing Plan</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="tab pricing-tab bg-color">
                <ul class="tabs">
                    <li><a href="#">
                            Monthly Plan
                        </a></li>

                    <li><a href="#">
                            Yearly Plan
                        </a></li>
                </ul>

                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing-box">
                                    <div class="pricing-header">
                                        <h3>Free</h3>
                                        <p>Get your business up <br>and running</p>
                                    </div>

                                    <div class="price">
                                        $0 <span>/m</span>
                                    </div>

                                    <div class="buy-btn">
                                        <a href="contact.html" class="btn btn-primary">Get Started Free</a>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i data-feather='check'></i> Drag & Drop Builder</li>
                                        <li><i data-feather='check'></i> Lead Generation & Sales</li>
                                        <li><i data-feather='check'></i> Boot & Digital Assistants</li>
                                        <li><i data-feather='check'></i> Customer Service</li>
                                        <li><i data-feather='check'></i> Up to 1000 Subscribers</li>
                                        <li><i data-feather='check'></i> Unlimited Broadcasts</li>
                                        <li><i data-feather='check'></i> Landing Pages & Web Widgets</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing-box">
                                    <div class="pricing-header">
                                        <h3>Pro</h3>
                                        <p>Get your business up <br>and running</p>
                                    </div>

                                    <div class="price">
                                        $149 <span>/m</span>
                                    </div>

                                    <div class="buy-btn">
                                        <a href="contact.html" class="btn btn-primary">Start 3 Days Free Trial</a>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i data-feather='check'></i> Drag & Drop Builder</li>
                                        <li><i data-feather='check'></i> Lead Generation & Sales</li>
                                        <li><i data-feather='check'></i> Boot & Digital Assistants</li>
                                        <li><i data-feather='check'></i> Customer Service</li>
                                        <li><i data-feather='check'></i> Up to 3300 Subscribers</li>
                                        <li><i data-feather='check'></i> Unlimited Broadcasts</li>
                                        <li><i data-feather='check'></i> Landing Pages & Web Widgets</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                                <div class="pricing-box">
                                    <div class="pricing-header">
                                        <h3>Premium</h3>
                                        <p>Get your business up <br>and running</p>
                                    </div>

                                    <div class="price">
                                        $179 <span>/m</span>
                                    </div>

                                    <div class="buy-btn">
                                        <a href="contact.html" class="btn btn-primary">Start 6 Days Free Trial</a>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i data-feather='check'></i> Drag & Drop Builder</li>
                                        <li><i data-feather='check'></i> Lead Generation & Sales</li>
                                        <li><i data-feather='check'></i> Boot & Digital Assistants</li>
                                        <li><i data-feather='check'></i> Customer Service</li>
                                        <li><i data-feather='check'></i> Up to 10000 Subscribers</li>
                                        <li><i data-feather='check'></i> Unlimited Broadcasts</li>
                                        <li><i data-feather='check'></i> Landing Pages & Web Widgets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing-box">
                                    <div class="pricing-header">
                                        <h3>Free</h3>
                                        <p>Get your business up <br>and running</p>
                                    </div>

                                    <div class="price">
                                        $0 <span>/y</span>
                                    </div>

                                    <div class="buy-btn">
                                        <a href="contact.html" class="btn btn-primary">Get Started Free</a>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i data-feather='check'></i> Drag & Drop Builder</li>
                                        <li><i data-feather='check'></i> Lead Generation & Sales</li>
                                        <li><i data-feather='check'></i> Boot & Digital Assistants</li>
                                        <li><i data-feather='check'></i> Customer Service</li>
                                        <li><i data-feather='check'></i> Up to 1000 Subscribers</li>
                                        <li><i data-feather='check'></i> Unlimited Broadcasts</li>
                                        <li><i data-feather='check'></i> Landing Pages & Web Widgets</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing-box">
                                    <div class="pricing-header">
                                        <h3>Pro</h3>
                                        <p>Get your business up <br>and running</p>
                                    </div>

                                    <div class="price">
                                        $249 <span>/y</span>
                                    </div>

                                    <div class="buy-btn">
                                        <a href="contact.html" class="btn btn-primary">Start 3 Days Free Trial</a>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i data-feather='check'></i> Drag & Drop Builder</li>
                                        <li><i data-feather='check'></i> Lead Generation & Sales</li>
                                        <li><i data-feather='check'></i> Boot & Digital Assistants</li>
                                        <li><i data-feather='check'></i> Customer Service</li>
                                        <li><i data-feather='check'></i> Up to 3300 Subscribers</li>
                                        <li><i data-feather='check'></i> Unlimited Broadcasts</li>
                                        <li><i data-feather='check'></i> Landing Pages & Web Widgets</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                                <div class="pricing-box">
                                    <div class="pricing-header">
                                        <h3>Premium</h3>
                                        <p>Get your business up <br>and running</p>
                                    </div>

                                    <div class="price">
                                        $279 <span>/y</span>
                                    </div>

                                    <div class="buy-btn">
                                        <a href="contact.html" class="btn btn-primary">Start 6 Days Free Trial</a>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i data-feather='check'></i> Drag & Drop Builder</li>
                                        <li><i data-feather='check'></i> Lead Generation & Sales</li>
                                        <li><i data-feather='check'></i> Boot & Digital Assistants</li>
                                        <li><i data-feather='check'></i> Customer Service</li>
                                        <li><i data-feather='check'></i> Up to 10000 Subscribers</li>
                                        <li><i data-feather='check'></i> Unlimited Broadcasts</li>
                                        <li><i data-feather='check'></i> Landing Pages & Web Widgets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape">
        </div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start ML Feedback Area -->
    <div class="ml-feedback-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Our Clients Feedback</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="ml-feedback-slides owl-carousel owl-theme">
                <div class="single-ml-feedback-item">
                    <div class="client-info">
                        <img src="{{ asset('assets/front_end/assets/img/client-image/1.jpg') }}" alt="image">
                        <h3>Sarah Taylor</h3>
                        <span>CEO at Envato</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ullam harum sit. Accusantium
                        veritatis dolore ducimus illum, cumque excepturi, autem rerum illo amet placeat odit corporis!</p>
                    <div class="rating">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                </div>

                <div class="single-ml-feedback-item">
                    <div class="client-info">
                        <img src="{{ asset('assets/front_end/assets/img/client-image/3.jpg') }}" alt="image">
                        <h3>Steven Smith</h3>
                        <span>CEO at Envato</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ullam harum sit. Accusantium
                        veritatis dolore ducimus illum, cumque excepturi, autem rerum illo amet placeat odit corporis!</p>
                    <div class="rating">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                </div>

                <div class="single-ml-feedback-item">
                    <div class="client-info">
                        <img src="{{ asset('assets/front_end/assets/img/client-image/2.jpg') }}" alt="image">
                        <h3>James Eva</h3>
                        <span>CEO at Envato</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ullam harum sit. Accusantium
                        veritatis dolore ducimus illum, cumque excepturi, autem rerum illo amet placeat odit corporis!</p>
                    <div class="rating">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('assets/front_end/assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape">
        </div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
    </div>
    <!-- End ML Feedback Area -->

    <!-- Start Blog Area -->
    <div class="blog-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Our Recent Story</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post-box">
                        <div class="entry-thumbnail">
                            <a href="#"><img src="{{ asset('assets/front_end/assets/img/blog-image/9.jpg') }}"
                                    alt="image"></a>
                        </div>

                        <div class="entry-post-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="blog-1.html">Admin</a></li>
                                    <li>August 15, 2019</li>
                                </ul>
                            </div>

                            <h3><a href="single-blog.html">Making Peace With The Feast Or Famine Of Freelancing</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
                            <a href="single-blog.html" class="learn-more-btn">Read Story <i data-feather="plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post-box">
                        <div class="entry-thumbnail">
                            <a href="#"><img src="{{ asset('assets/front_end/assets/img/blog-image/10.jpg') }}"
                                    alt="image"></a>
                        </div>

                        <div class="entry-post-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="blog-1.html">Admin</a></li>
                                    <li>August 18, 2019</li>
                                </ul>
                            </div>

                            <h3><a href="single-blog.html">I Used The Web For A Day On A 50 MB Budget</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
                            <a href="single-blog.html" class="learn-more-btn">Read Story <i data-feather="plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-blog-post-box">
                        <div class="entry-thumbnail">
                            <a href="#"><img src="{{ asset('assets/front_end/assets/img/blog-image/11.jpg') }}"
                                    alt="image"></a>
                        </div>

                        <div class="entry-post-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="blog-1.html">Admin</a></li>
                                    <li>August 15, 2019</li>
                                </ul>
                            </div>

                            <h3><a href="single-blog.html">Here are the 5 most telling signs of micromanagement</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
                            <a href="single-blog.html" class="learn-more-btn">Read Story <i data-feather="plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('assets/front_end/assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
        <div class="shape3"><img src="{{ asset('assets/front_end/assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape">
        </div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Free Trial Area -->
    <div class="free-trial-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="free-trial-image">
                        <img src="{{ asset('assets/front_end/assets/img/free-trial-img.png') }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="free-trial-content">
                        <h2>Start your free trial</h2>

                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="Enter your business email here">
                            <button type="submit">Sign Up Free</button>
                        </form>

                        <p>Test out the Machine Learning features for 14 days, no credit card required.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape2 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape">
        </div>
        <div class="shape7"><img src="{{ asset('assets/front_end/assets/img/shape4.svg') }}" alt="shape"></div>
        <div class="shape8 rotateme"><img src="{{ asset('assets/front_end/assets/img/shape2.svg') }}" alt="shape">
        </div>
    </div>
    <!-- End Free Trial Area -->
@endsection
