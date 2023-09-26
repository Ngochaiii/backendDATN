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

    <div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
    <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    <div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
    <div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
    <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
</div>
<!-- End Page Title -->

<!-- Start Cart Area -->
<div class="cart-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form>
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
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/img/shop-image/1.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Wood Pencil</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$191.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i data-feather="minus"></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i data-feather="plus"></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$191.00</span>

                                        <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/img/shop-image/2.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">T-Shirt</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$111.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i data-feather="minus"></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i data-feather="plus"></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$111.00</span>

                                        <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/img/shop-image/3.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Casual Shoe</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$100.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i data-feather="minus"></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i data-feather="plus"></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$100.00</span>

                                        <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/img/shop-image/4.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Coffee Bag</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$414.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i data-feather="minus"></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i data-feather="plus"></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$414.00</span>

                                        <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="continue-shopping-box">
                                    <a href="#" class="btn btn-light">Continue Shopping</a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-5 text-end">
                                <a href="#" class="btn btn-light">Update Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="cart-totals">
                        <h3>Cart Totals</h3>

                        <ul>
                            <li>Subtotal <span>$250.00</span></li>
                            <li>Shipping <span>$30.00</span></li>
                            <li>Total <span><b>$280.00</b></span></li>
                        </ul>
                        <a href="#" class="btn btn-primary">Proceed to Checkout</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Area -->
@endsection
