@extends('layouts.front_end.default')

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Products</h2>
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
    <!-- End Page Title -->

    <!-- Start Shop Area -->
    <div class="shop-area ptb-80">
        <div class="container">
            <div class="woocommerce-topbar">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-7 col-sm-7">
                        <div class="woocommerce-result-count">
                            <p>Showing 1-8 of 14 results</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="woocommerce-topbar-ordering">
                            <select class="form-select">
                                <option value="1">Sort by Popularity</option>
                                <option value="2">Sort by Average Rating</option>
                                <option value="0">Sort by Latest</option>
                                <option value="3">Sort by price: Low to High</option>
                                <option value="4">Sort by price: High to Low</option>
                                <option value="5">Sort by New</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/1.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Wood Pencil</a></h3>
                            <span>$191.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/2.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">T-Shirt</a></h3>
                            <span>$111.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/3.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Casual Shoe</a></h3>
                            <span>$100.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>

                        <div class="sale-btn">
                            Sale
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/4.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Coffee Bag</a></h3>
                            <span>$414.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/5.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Single Chair</a></h3>
                            <span>$132.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/6.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Business Card</a></h3>
                            <span>$214.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/7.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Book Cover</a></h3>
                            <span>$500.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/8.jpg')}}" alt="image">

                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                            data-feather="search"></i></a></li>
                                <li><a href="#"><i data-feather="heart"></i></a></li>
                                <li><a href="#"><i data-feather="link"></i></a></li>
                            </ul>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Wall Watch</a></h3>
                            <span>$129.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-2"></i></li>
                            </ul>
                            <a href="#" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">

                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>

                                <li class="page-item active"><a class="page-link" href="#">1</a></li>

                                <li class="page-item"><a class="page-link" href="#">2</a></li>

                                <li class="page-item"><a class="page-link" href="#">3</a></li>

                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Area -->

    <!-- Start Products Modal -->
    <div class="modal fade" id="productsModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="products-image">
                            <img src="{{asset('assets/front_end/assets/img/shop-image/1.jpg')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="products-content">
                            <h3>Wood Pencil</h3>

                            <div class="price">
                                <span>$200.00</span> $191.00
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                                libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.</p>

                            <form>
                                <div class="quantity">
                                    <div class="input-counter">
                                        <span class="minus-btn"><i data-feather="minus"></i></span>
                                        <input type="text" min="1" value="1">
                                        <span class="plus-btn"><i data-feather="plus"></i></span>
                                    </div>
                                </div>

                                <button type="submit">Add to Cart</button>
                            </form>

                            <div class="product-meta">
                                <span>Category: <a href="#">Pencil</a></span>
                                <span>Tag: <a href="#">Prints</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products Modal -->
@endsection
