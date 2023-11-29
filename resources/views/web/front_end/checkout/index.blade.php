@extends('layouts.front_end.default')

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Checkout</h2>
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

    <!-- Start Checkout Area -->
    <div class="checkout-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="user-actions">
                        <i data-feather="edit"></i>
                        <span>Returning customer? <a href="#">Click here to login</a></span>
                    </div>
                </div>
            </div>

            <form action="{{ route('order.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">Billing Details</h3>

                            <div class="row">

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Tên khách hàng <span class="required">*</span></label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>City <span class="required">*</span></label>
                                        <input type="text" name="city" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>District <span class="required">*</span></label>
                                        <input type="text" name="district" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label> Địa chỉ cụ thể <span class="required">*</span></label>
                                        <input type="text" name="specific_address" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="col-lg-12 services-details">
                                        <div class="services-details-desc">
                                            <div class="services-details-accordion">
                                                <ul class="accordion">
                                                    <li class="accordion-item">
                                                        <a class="accordion-title" href="javascript:void(0)">
                                                            <i class="flaticon-plus"></i>
                                                            Ship to different adress !
                                                        </a>
                                                        <div class="accordion-content">
                                                            <div class="form-group">
                                                                <label> Địa chỉ cụ thể <span
                                                                        class="required">*</span></label>
                                                                <input type="text" name="specific_address_2"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (isset($user_vouchers))
                                    <div class="col-lg-12 col-md-12 mt-3">
                                        <div class="form-group">
                                            <label>Voucher của bạn <span class="required">*</span></label>

                                            <div class="select-box">
                                                <select class="form-select"  name="voucher">
                                                    <option disabled selected>-- Lựa chọn voucher bạn đang có--</option>
                                                    @foreach ($user_vouchers as $user_voucher)
                                                        <option>{{ $user_voucher->voucher->value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-lg-12 col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>Phương thức ship <span class="required">*</span></label>

                                        <div class="select-box">
                                            <select class="form-select" id="select" name="ship_method">
                                                <option disabled selected>-- Phương thức ship --</option>
                                                {!! renderArrayOptions($ship_method) !!}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-2">
                                    <div class="form-group">
                                        <textarea id="notes" cols="30" rows="4" placeholder="Order Notes" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <h3 class="title">Your Order</h3>

                            <div class="order-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach (Cart::content() as $item)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="#">{{ $item->name }}</a>
                                                </td>

                                                <td class="product-total">
                                                    <span
                                                        class="subtotal-amount">{{ number_format($item->price * $item->qty, 0, '', ',') }}vnđ</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @php
                                            $price = Cart::content();
                                            $total = 0;
                                            foreach ($price as $key => $value) {
                                                $total += $value->price * $value->qty;
                                            }
                                        @endphp
                                        <tr>
                                            <td class="total-price">
                                                <span>Cart Subtotal</span>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="subtotal-amount"><input style="border: 0" id="total"
                                                        hidden type="number"
                                                        value="{{ $total }}">{{ number_format($total, 0, '', ',') }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="order-shipping">
                                                <span>Shipping</span>
                                            </td>

                                            <td class="shipping-price">
                                                <span id="ship"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="total-price">
                                                <span>Order Total</span>
                                            </td>

                                            <td class="product-subtotal">
                                                <span><input id="order_total" type="number" style="border: 0" hidden
                                                        class="subtotal-amount" name="quantity" value=""><span
                                                        id="subtotal"></span></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="payment-method">
                                <p>
                                    <input type="checkbox" id="checkbox1" name="pay_method" value="1">
                                    <label for="direct-bank-transfer">Thanh toán khi nhận hàng</label><br>

                                    Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order will not be shipped until the funds have cleared in our
                                    account.
                                </p>
                                <div class="col services-details" id="autoUpdate">
                                    <div class="services-details-desc">
                                        <div class="services-details-accordion">
                                            <ul class="accordion">

                                                <li class="accordion-item">
                                                    <a class="accordion-title" href="javascript:void(0)">
                                                        <i class="flaticon-plus"></i>
                                                        Chuyển khoản trực tuyến
                                                    </a>

                                                    <div class="accordion-content">Quý khách vui lòng chuyển khoản qua số
                                                        tài
                                                        khoản bên dưới và lưu lại hóa đơn <br>
                                                        <a href="">21510008906666</a><br>
                                                        <span>Ngân Hàng đầu từ và phát triển BIDV</span>
                                                        <div class="col-lg-12 col-md-6">
                                                            <div class="form-group">
                                                                <label style="color: blue"> Ảnh chuyển khoản <span
                                                                        class="required">*</span></label>
                                                                <input type="file" name="bill_image"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary order-btn">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Checkout Area -->
@endsection
@push('footer_js')
    <script>
        let select = document.querySelector('#select');
        let valueShip = document.querySelector('#ship');
        let total = document.querySelector('#total').value;
        let orderTotal = document.querySelector('#order_total');
        let subtotal = document.querySelector('#subtotal');
        const ship1 = 30000;
        const ship2 = 45000;
        select.addEventListener("change", (e) => {
            const target = e.target.value;
            // console.log(subtotal);
            if (target == 1) {
                valueShip.innerHTML = ship1.toLocaleString('it-IT', {
                    style: 'currency',
                    currency: 'VND'
                });
                let orderTotal_1 = Number(total) + ship1;
                orderTotal.value = orderTotal_1;
                subtotal.innerHTML = orderTotal_1.toLocaleString('it-IT', {
                    style: 'currency',
                    currency: 'VND'
                });
            } else {
                valueShip.innerHTML = ship2.toLocaleString('it-IT', {
                    style: 'currency',
                    currency: 'VND'
                });
                let orderTotal_2 = Number(total) + ship2;
                orderTotal.value = orderTotal_2;
                subtotal.innerHTML = orderTotal_2.toLocaleString('it-IT', {
                    style: 'currency',
                    currency: 'VND'
                });
            }
            console.log(orderTotal.value);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#checkbox1').change(function() {
                if (!this.checked)
                    //  ^
                    $('#autoUpdate').fadeIn('slow');
                else
                    $('#autoUpdate').fadeOut('slow');
            });
        });
    </script>
@endpush
@push('css')
@endpush
