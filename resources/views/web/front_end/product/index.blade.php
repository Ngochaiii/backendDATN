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

    <!-- Start Shop Area -->
    <div class="shop-area ptb-80">
        <div class="container">
            <div class="woocommerce-topbar">
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="woocommerce-result-count">
                            <p>Showing 1-8 of {{count($allProducts)}} results</p>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="woocommerce-topbar-ordering">
                            @include('web.front_end.product._blocks.filter')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $item => $product)
                    @php
                        $dataImages = json_decode($product->pro_image, true);
                    @endphp
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products">
                            <div class="products-image">
                                @if ($product->pro_image == 'product.jpg')
                                    <img src="{{ asset('assets/front_end/assets/img/shop-image/1.jpg') }}" alt="image">
                                @else
                                    <img style="width: 250px; height: 300px;"
                                        src="{{ asset('posts/image/' . $dataImages[0]) }}" alt="image">
                                @endif
                                <ul>
                                    {{-- <li><a href="#" href="javascript:void(0)" id="show-product"
                                            data-url="{{ route('home.product.show', $product->product_id) }}"
                                            data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i
                                                data-feather="search"></i></a></li> --}}
                                    <li><a href="{{ route('wishlists', $product->product_id) }}"><i
                                                data-feather="heart"></i></a></li>

                                </ul>
                            </div>

                            <div class="products-content">
                                <h3><a
                                        href="{{ route('home.product.detail', $product->product_id) }}">{{ $product->name }}</a>
                                </h3>
                                @if (isset($product->sale_price))
                                    <span
                                        style="color: brown;font-size:15px">{{ number_format($product->sale_price, 0, '', ',') }}
                                        vnđ</span> <br>
                                    <span
                                        style="text-decoration: line-through;">{{ number_format($product->price, 0, '', ',') }}
                                        vnđ</span>
                                @else
                                    <span>{{ number_format($product->price, 0, '', ',') }} vnđ</span>
                                @endif
                                <ul>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                </ul>
                                <form action="{{ route('addCart') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                    <button type="submit" class="add-to-cart-btn">
                                        Thêm vào giỏ hàng
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </form>
                            </div>
                            @if (isset($product->sale_price))
                                <div class="sale-btn">
                                    Sale
                                </div>
                            @endif

                        </div>
                    </div>
                    {{-- <!-- Start Products Modal -->
                    <div class="modal fade" id="productsModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="products-image">
                                            <img id="image" src="" alt="image">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="products-content">
                                            <h3 id="name">{{ $product->name }}</h3>

                                            <div class="price">
                                                <a id="price">{{ number_format($product->price, 0, '', ',') }}</a>
                                                <a>vnđ</a> <br>

                                                <a>Giá Sale :</a><a id="sale-price"
                                                    style="color: brown">{{ number_format($product->sale_price, 0, '', ',') }}</a>
                                                <a>vnđ </a>
                                            </div>
                                            <p id="description"></p>

                                            <form>
                                                <div class="quantity">
                                                    <div class="input-counter">
                                                        <span class="minus-btn"><i data-feather="minus"></i></span>
                                                        <input type="text" id="quantity" min="1"
                                                            value="1">
                                                        <span class="plus-btn"><i data-feather="plus"></i></span>
                                                    </div>
                                                </div>

                                                <button type="submit">Add to Cart</button>
                                            </form>

                                            <div class="product-meta">
                                                <span>Số lượng còn: <a id="cate"></a></span>
                                                <span>Tag: <a href="#">Prints</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Products Modal --> --}}
                @endforeach

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">

                                <li>{!! $products->links() !!}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Area -->
@endsection
@push('footer_js')
    {{-- <script type="text/javascript">
        $(document).ready(function() {

            /* When click show user */
            $('body').on('click', '#show-product', function() {
                var userURL = $(this).data('url');
                $.get(userURL, function(data) {
                    let dataImages = JSON.parse(data.pro_image)
                    console.log(data)
                    $('#productsModalCenter').modal('show');
                    if (Array.isArray(dataImages)) {
                        console.log(1);
                        $('#image')[0].src = "http://127.0.0.1:8000/posts/image/" + dataImages[0];
                    }
                    // if (data.pro_image == "product.jpg") {
                    //     console.log(2);
                    //     $('#image')[0].src =
                    //         "http://127.0.0.1:8000/assets/front_end/assets/img/shop-image/1.jpg";
                    // }
                    $('#name').text(data.name);
                    $('#price').text(data.price);
                    $('#sale-price').text(data.sale_price)
                    $('#description').text(data.description)
                    $('#cate').text(data.quantity);
                })
            });
        });
    </script> --}}
@endpush
