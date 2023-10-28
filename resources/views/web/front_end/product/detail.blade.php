@extends('layouts.front_end.default')

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Products Details</h2>
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
    @php
        $dataImages = json_decode($product->pro_image);

    @endphp
    <!-- Start Shop Details Area -->
    <div class="shop-details-area ptb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="products-details-image products-details-image-slides owl-carousel owl-theme">
                        @if ($product->pro_image == 'product.jpg')
                            <div class="single-image-box">
                                <img src="{{ asset('assets/front_end/assets/img/shop-image/2.jpg') }}" alt="img">
                            </div>
                        @else
                            @foreach ($dataImages as $item => $dataImage)
                                <div class="single-image-box">
                                    <img src="{{ asset('/posts/image/' . $dataImage) }}" alt="img">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="products-details">
                        <h3>{{ $product->name }}l</h3>

                        <div class="price">
                            <a id="price">{{ rmat($product->price, 0, '', ',') }}</a>
                            <a>vnđ</a> <br>

                            <a>Giá Sale :</a><a id="sale-price"
                                style="color: brown">{{ number_format($product->sale_price, 0, '', ',') }}</a>
                            <a>vnđ </a>
                        </div>
                        <ul class="rating">
                            <li><i class="flaticon-star-1"></i></li>
                            <li><i class="flaticon-star-1"></i></li>
                            <li><i class="flaticon-star-1"></i></li>
                            <li><i class="flaticon-star-1"></i></li>
                            <li><i class="flaticon-star-1"></i></li>
                        </ul>

                        <p>{{ $product->description }}</p>
                        @if ($product->quantity > 0)
                            <div class="availability">
                                Availability: <span>In Stock</span>
                            </div>
                        @else
                            <div class="availability">
                                Availability: <span>Out Of Stock</span>
                            </div>
                        @endif
                        <form>
                            <div class="quantity d-flex align-items-center">
                                <span>Quantity:</span>
                                <div class="input-counter">
                                    <span class="minus-btn"><i data-feather="minus"></i></span>
                                    <input type="text" min="1"  value="1">
                                    <span class="plus-btn"><i data-feather="plus"></i></span>
                                </div>
                            </div>
                            <button type="submit">Add to Cart</button>
                            <a href="#" class="add-to-wishlist-btn" title="Add to Wishlist"><i
                                    data-feather="heart"></i></a>

                            <div class="buy-btn">
                                <a href="#" class="btn btn-primary">Buy it Now</a>
                            </div>
                        </form>

                        <div class="custom-payment-options">
                            <span>Guaranteed safe checkout:</span>

                            <div class="payment-methods">
                                <img src="{{ asset('assets/front_end/assets/img/payment-image/1.svg') }}" alt="image">
                                <img src="{{ asset('assets/front_end/assets/img/payment-image/2.svg') }}" alt="image">
                                <img src="{{ asset('assets/front_end/assets/img/payment-image/3.svg') }}" alt="image">
                                <img src="{{ asset('assets/front_end/assets/img/payment-image/4.svg') }}" alt="image">
                                <img src="{{ asset('assets/front_end/assets/img/payment-image/5.svg') }}" alt="image">
                                <img src="{{ asset('assets/front_end/assets/img/payment-image/6.svg') }}" alt="image">
                                <img src="{{ asset('assets/front_end/assets/img/payment-image/7.svg') }}" alt="image">
                            </div>
                        </div>

                        <div class="products-share-social">
                            <span>Share:</span>

                            <ul>
                                <li><a href="#" class="facebook" target="_blank"><i data-feather="facebook"></i></a>
                                </li>
                                <li><a href="#" class="twitter" target="_blank"><i data-feather="twitter"></i></a>
                                </li>
                                <li><a href="#" class="linkedin" target="_blank"><i data-feather="linkedin"></i></a>
                                </li>
                                <li><a href="#" class="instagram" target="_blank"><i
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="products-details-tabs">
                        <ul id="tabs">
                            <li class="active" id="tab_1">Description</li>
                            <li class="inactive" id="tab_2">Additional Information</li>
                            <li class="inactive" id="tab_3">Review</li>
                        </ul>

                        <div class="content show" id="tab_1_content">
                            <div class="products-description">
                                <p>{{$product->description}}</p>
                            </div>
                        </div>

                        <div class="content" id="tab_2_content">
                            <div class="products-description">
                                <ul class="additional-information">
                                    <li><span>Brand</span> {{$product->branch->name}}</li>
                                    <li><span>Category</span> {{$product->category->name}}</li>
                                    <li><span>Size</span> Large, Medium</li>
                                    <li><span>Cân nặng</span> 27 kg</li>
                                    <li><span>Kích thước mẫu </span> 16 x 22 x 123 cm</li>
                                </ul>
                            </div>
                        </div>

                        <div class="content" id="tab_3_content">
                            <div class="products-reviews">
                                <h3>Customer Reviews</h3>
                                <p>There are no reviews yet.</p>

                                <form class="review-form">
                                    <p>Rate this item</p>

                                    <div class="star-source">
                                        <svg>
                                            <linearGradient x1="50%" y1="5.41294643%" x2="87.5527344%"
                                                y2="65.4921875%" id="grad">
                                                <stop stop-color="#f2b01e" offset="0%"></stop>
                                                <stop stop-color="#f2b01e" offset="60%"></stop>
                                                <stop stop-color="#f2b01e" offset="100%"></stop>
                                            </linearGradient>
                                            <symbol id="star" viewBox="153 89 106 108">
                                                <polygon id="star-shape" stroke="url(#grad)" stroke-width="5"
                                                    fill="currentColor"
                                                    points="206 162.5 176.610737 185.45085 189.356511 150.407797 158.447174 129.54915 195.713758 130.842203 206 95 216.286242 130.842203 253.552826 129.54915 222.643489 150.407797 235.389263 185.45085">
                                                </polygon>
                                            </symbol>
                                        </svg>
                                    </div>

                                    <div class="star-rating">
                                        <input type="radio" name="star" id="five">
                                        <label for="five">
                                            <svg class="star">
                                                <use xlink:href="#star" />
                                            </svg>
                                        </label>

                                        <input type="radio" name="star" id="four">
                                        <label for="four">
                                            <svg class="star">
                                                <use xlink:href="#star" />
                                            </svg>
                                        </label>

                                        <input type="radio" name="star" id="three">
                                        <label for="three">
                                            <svg class="star">
                                                <use xlink:href="#star" />
                                            </svg>
                                        </label>

                                        <input type="radio" name="star" id="two">
                                        <label for="two">
                                            <svg class="star">
                                                <use xlink:href="#star" />
                                            </svg>
                                        </label>

                                        <input type="radio" name="star" id="one">
                                        <label for="one">
                                            <svg class="star">
                                                <use xlink:href="#star" />
                                            </svg>
                                        </label>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="review-message" id="message" cols="30" rows="4" placeholder="Write your review*"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Name*" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email*" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Details Area -->
@endsection
