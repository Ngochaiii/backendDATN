@extends('layouts.front_end.default')

@section('content')
    <div class="shop-area ptb-80">
        <div class="container">
            <div class="row align-items-center">
                <article class="card" style="margin-top: 80px;">
                    <header class="card-header"> My Orders / Tracking </header>
                    <div class="card-body">
                        <h6>Order ID: OD45345345435</h6>
                        <article class="card">
                            <div class="card-body row">
                                <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div>
                                <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART, | <i
                                        class="fa fa-phone"></i>
                                    +1598675986 </div>
                                <div class="col"> <strong>Status:</strong> <br> {{$data_order[0]->status}} </div>
                                <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                            </div>
                        </article>
                        <div class="track">
                            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span
                                    class="text">Order confirmed</span> </div>
                            <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span
                                    class="text">
                                    Chờ xác nhân đơn hàng</span> </div>
                            @if ($last_order->status == 'completed')
                                <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span
                                        class="text">
                                        Đang giao hàng </span> </div>
                            @else
                                <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span
                                        class="text">
                                        Đang giao hàng </span> </div>
                            @endif
                            <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span
                                    class="text">Hoàn thành đơn hàng</span> </div>
                        </div>
                        <hr>
                        <ul class="row">
                            @foreach ($dataChekout as $item)
                            {{-- {{dd($item->product->name);}} --}}
                                <li class="col-md-4">
                                    <figure class="itemside mb-3">
                                        <div class="aside"><img src="{{asset('assets/front_end/assets/img/shop-image/1.jpg')}}"
                                                class="img-sm border">
                                        </div>
                                        <figcaption class="info align-self-center">
                                            <p class="title">{{ $item->product->name }} <br> {{ $item->quantity }}</p>
                                        </figcaption>
                                    </figure>
                                </li>
                            @endforeach
                            Tong So Tien :
                            <span class="text-muted">{{ number_format($item->total_price, 0, '', ',') }}
                            </span>
                        </ul>
                        <hr>
                        <a href="{{route('home.product')}}" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back
                            to
                            orders</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            background-color: #eeeeee;
            font-family: 'Open Sans', serif
        }



        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #FF5722
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }
    </style>
@endpush