@extends('layouts.front_end.default')

@section('content')
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Cart</h2>
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

    <!-- Start Cart Area -->
    <div class="cart-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    {{-- <form> --}}
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- {{ dd(Cart::content()) }}; --}}
                                @foreach (Cart::content() as $item)
                                    {{-- {{ dd($item->options['image']) }} --}}
                                    <form action="{{ route('updateCart', $item->rowId) }}" method="post">
                                        @csrf
                                        <tr>
                                            <td class="product-thumbnail">
                                                @if ($item->options['image'] == 'product.jpg')
                                                    <a href="#">
                                                        <img src="{{ asset('assets/front_end/assets/img/shop-image/1.jpg') }}"
                                                            alt="item">
                                                    </a>
                                                @else
                                                    @php
                                                        $data = json_decode($item->options['image']);
                                                    @endphp
                                                    <a href="#">
                                                        <img src="{{ asset('posts/image/' . $data[0]) }}" alt="item">
                                                    </a>
                                                @endif
                                            </td>

                                            <td class="product-name">
                                                <a href="#">{{ $item->name }}</a>
                                            </td>

                                            <td class="product-price">
                                                <span class="unit-amount">{{ $item->price }} vnđ</span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn"><i data-feather="minus"></i></span>
                                                    <input type="text" min="1" name="qty"
                                                        value="{{ $item->qty }}">
                                                    <span class="plus-btn"><i data-feather="plus"></i></span>
                                                </div>
                                            </td>
                                            {{-- {{dd($item->id)}} --}}
                                            <input type="number" name="product_" value="{{ $item->id }}" hidden>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount"
                                                    id="subtotal_amount">{{ number_format($item->price * $item->qty, 0, '', ',') }}
                                                    vnđ</span>

                                                <a href="{{ route('deleteCart', $item->rowId) }}" class="remove"><i
                                                        data-feather="trash-2"></i></a>
                                            </td>
                                            <td>
                                                <div style="margin-left: 25px;"
                                                    class="col-lg-5 col-md-5 col-sm-5 text-start">
                                                    <button type="submit" class="btn btn-light">Update Cart</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="continue-shopping-box">
                                    <a href="{{ route('home.product') }}" class="btn btn-light">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $price = Cart::content();
                        $total = 0;
                        foreach ($price as $key => $value) {
                            $total += $value->price * $value->qty;
                        }
                    @endphp
                    <div class="cart-totals">
                        <h3>Cart Totals</h3>

                        <ul>
                            <li>Total <span><b>{{ number_format($total, 0, '', ',') }} Vnđ</b></span></li>
                        </ul>
                        <a href="{{ route('checkout') }}" class="btn btn-primary">Tiến hành thanh toán</a>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart Area -->
@endsection
@push('footer_js')
    <script>
        let total = document.querySelectorAll('#subtotal_amount')
        console.log(total);
    </script>
@endpush
