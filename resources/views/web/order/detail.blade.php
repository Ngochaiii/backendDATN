@extends('layouts.web.default')

@section('content')
    <div class="card p-2">
        <div class="detail-page">
            <div class="head">Chi tiết đơn hàng
                <div class="head-name">{{ $order->name }}</div>
                <div class="head-order">Trạng thái đặt hàng : <br>
                    {{ $order->status }}</div>
                <div class="head-courier">Phương thức vận chuyển : <br> {{ $order->ship_methodName }}</div>
            </div>
            <form method="POST" action="{{ route('transpost.add') }}">
                @csrf
                <input type="hidden" id="status" name="status" value="{{ $order->status }}">
                <input type="hidden" name="order_id" value="{{ $order->order_id }}">
                @foreach ($order->checkouts as $checkout)
                    <input type="hidden" name="product_id" value="{{ $checkout->product->product_id }}">
                @endforeach
                <input type="hidden" name="type" value="1">
                <div class="button">
                    <button class="btn-danger" type="submit" id="completed" value="1">Duyệt đơn hàng</button>
                    <button class="btn-primary" type="submit" id="processing" value="2">Kiểm duyệt</button>
                    <button class="btn-warning" type="submit" id="decline" value="0">Hủy đơn hàng </button>
                </div>
            </form>

            <div class="map"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d130266.40104944159!2d17.841628063686954!3d59.32606644542113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f763119640bcb%3A0xa80d27d3679d7766!2sStockholm!5e0!3m2!1sen!2sse!4v1505564577488"
                    width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div class="pickup">Thông tin người đặt hàng
                <div class="sub-info name">Name: {{ $order->user->name ?? '' }}.</div>
                <div class="sub-info address">Thành Phố : {{ $order->city }} </div>
                <div class="sub-info address">Địa chỉ cụ thể : {{ $order->specific_address }} </div>
                <div class="sub-info time">Thời gian đặt : {{ $order->created_at }}</div>
                <div class="sub-info time">Lưu ý khi nhận hàng</div>
                <div class="sub-info message">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
            </div>
            <div class="dropoff">Thông tin Vận chuyển
                {{-- {{dd($order->checkouts)}} --}}
                @foreach ($order->checkouts as $checkout)
                    {{-- {{dd($checkout->product,$order->quantity)}} --}}
                    @if ($checkout->product)
                        @php
                            $total = $order->quantity * $checkout->product->price;
                            $ship_1 = number_format(30000, 0, '', ',');
                            $ship_2 = number_format(50000, 0, '', ',');
                            $total_ship_1 = $total + 30000;
                            $total_ship_2 = $total + 50000;
                        @endphp
                        <div class="sub-info name">Name: {{ $checkout->product->name }}.</div>
                        <div class="sub-info address">Tổng số tiền: {{ number_format($total, 0, '', ',') }}vnd.</div>
                        <div class="sub-info time">Phương thức Vận chuyển :{{ $order->ship_methodName }}</div>
                        <div class="sub-info message ">
                            <p style="text-decoration: overline"><strong>Tổng số tiền:</strong></p>
                            <p>{{ number_format($total, 0, '', ',') }}vnd</p>
                            <p>+</p>
                            @if ($order->ship_method == 1)
                                <p>{{ $ship_1 }}</p>
                                <p style="text-decoration: overline">
                                    <strong>{{ number_format($total_ship_1, 0, '', ',') }}vnd</strong>
                                </p>
                            @else
                                <p>{{ $ship_2 }}</p>
                                <p style="text-decoration: overline">
                                    <strong>{{ number_format($total_ship_2, 0, '', ',') }}vnd</strong>
                                </p>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('hcss')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,300i,500');


        .detail-page {
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
            color: #00171F;
            width: 70%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat (8, 1fr);
            grid-auto-rows: minmax(300px, auto);
            grid-gap: 2em;
            grid-template-areas:
                "a a e e b b b b"
                "c c c c d d d d"
        }

        .head {
            grid-area: a;
            font-weight: 300;
            text-align: left;
            justify-self: start;

        }

        .head .head-name {
            padding: 1.2em;
            font-weight: 500;
            font-size: 2em;
            text-align: left;
        }

        .head .head-order {
            text-transform: uppercase;
            text-align: left;
        }

        .head-courier {
            text-align: left;
        }

        .button {
            grid-area: e;
            display: grid;
            grid-gap: 2em;
            padding: 1em 1em 1em 1em;
            background: lightyellow;

        }

        .map {
            grid-area: b;

        }

        iframe {
            border-radius: 5px;
            height: 100%;
            width: 100%;
        }

        .pickup {
            grid-area: c;
            background: #eee;
            color: black;
            text-align: center;
            padding: 1em;
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .dropoff {
            grid-area: d;
            text-transform: uppercase;
            color: black;
            background: #eee;
            border-radius: 5px;
            text-align: center;
            padding: 1em;
            letter-spacing: 1.5px;

        }

        .sub-info {
            text-align: left;
            padding: 1em;
            text-transform: initial;
            font-weight: 300;
        }

        .message {
            font-weight: 300i;
            padding-left: 1em;
            margin-left: 1em;
        }

        @media only screen and (max-width:900px) {
            .detail-page {
                width: auto;
                grid-template-areas:
                    ". . b b b b . . "
                    ". . a a e e . . "
                    ". . c c c c . . "
                    ". . d d d d . . "
            }

            .map {
                width: 100%;
            }
        }
    </style>
@endpush
@push('footer_js')
    <script>
        const buttons = document.querySelectorAll("button");
        let inputs_status = document.querySelector("#status");
        buttons.forEach((button) => {
            button.addEventListener("click", (event) => {
                const element = event.currentTarget;
                inputs_status.value = element.value;
                // event.preventDefault();
            });
        });
    </script>
@endpush
