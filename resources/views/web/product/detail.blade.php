@extends('layouts.web.default')

@section('content')
    <div class="card" style="background-color: #ddd">
        <div class="card-product">
            <div class="share">
                <h3><span class="fa fa-twitter"></span></h3>
                <h3><span class="fa fa-facebook"></span></h3>
                <h3><span class="fa fa-google-plus"></span></h3>
                <h3><span class="fa fa-send"></span></h3>
            </div>
            @php
                $dataImageProducts = json_decode($products->pro_image, true);
                // dd($dataImageProducts);
            @endphp
            <div class="img-product">
                <div class="slideshow-container">
                    @if (is_array($dataImageProducts) || is_object($dataImageProducts))
                        @foreach ($dataImageProducts as $item => $image)
                            <div class="slides fade" style="background-color: burlywood">
                                <div class="number-text">{{ $item }} / {{ count($dataImageProducts) }}</div>
                                <img src="{{ asset('/files/' . $image) }}" style="width:100%">
                            </div>
                        @endforeach
                    @else
                        <div class="slides fade" style="background-color: burlywood">
                            <div class="number-text">1</div>
                            <img src="{{ $products->pro_image }}" style="width:100%">
                        </div>
                    @endif
                </div>
                <br />
                <div class="container-dots">
                    @if (is_array($dataImageProducts) || is_object($dataImageProducts))
                        @foreach ($dataImageProducts as $item => $image)
                            <span class="dot" onclick="currentSlide($item)"></span>
                        @endforeach
                    @else
                        <span class="dot" onclick="currentSlide(1)"></span>
                    @endif
                </div>
            </div>
            <div class="data-product">
                <h2>{{ $products->name }}</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                @if ($products->sale_price)
                    <h3 style="color: crimson">Giá Sale : {{ number_format($products->sale_price, 0, '', ',') }}</h3> <br>
                @endif

                <h4>Giá :{{ number_format($products->price, 0, '', ',') }} </h4>
                <div class="tab">
                    <button class="tablinks" onclick="openData(event, 'description')" id="defaultOpen">DESCRIPTION</button>
                    <button class="tablinks" onclick="openData(event, 'details')">DETAILS</button>
                    <button class="tablinks" onclick="openData(event, 'features')">FEATURES</button>
                </div>
                <div id="description" class="tabcontent">
                    <p>Kalita Wave drippers feature a flat-bottomed brew bed for even extraction, and a filter design that
                        reduces contact between the brewing space.</p>
                    <p>Used by top specialty cafes around the world and in professional coffee-making competitions, the
                        Kalita
                        Wave allows you to brew your favorite coffee more evenly, which directly contributes to fuller
                        flavor
                        and a more balanced extraction.
                    </p>
                </div>

                <div id="details" class="tabcontent">
                    <p>Material: Stainless <br />
                        Dishwasher safe <br />
                        Size: #155: Height 5.7x Diameter 10.5cm #185: Height 6.6×Width 11.5×Depth 13.8cm<br />
                        Weight: #155: 82 g (Postage weight 200g) #185:160g Postage weight 400g) <br />
                        Made in Japan.</p>
                </div>
                <div id="features" class="tabcontent">
                    <p>#155 brews 1-2 cups of beautifully smooth filtered coffee <br />
                        #185 brews up to 4 cups <br />
                        Use Kalita wave filters sold seperatly.</p>
                </div>
                <div class="text-center">
                    <a class="btn btn-danger" href="{{ route('product.delete', $products->product_id) }}" role="button">Xóa
                        sản phẩm</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('hcss')
    <style>
        * {
            box-sizing: border-box;
        }

        * body {
            margin: 0;
            font-family: Arial;
        }

        * body .card-product {
            width: 100%;
            height: 100%;
            display: flex;
            display: -webkit-flex;
            flex-flow: row nowrap;
        }

        * body .card-product .share {
            margin-top: 190px;
            margin-left: 38px;
            margin-right: -38px;
            color: darkcyan;
        }

        * body .card-product .share span:hover {
            color: orange;
        }

        * body .card-product .checked {
            color: orange;
        }

        * body .card-product .img-product {
            flex: 60%;
            margin: 20px;
            padding: 60px;
        }

        * body .card-product .img-product .slides {
            display: none;
        }

        * body .card-product .img-product .slides img {
            vertical-align: middle;
        }

        * body .card-product .img-product .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        * body .card-product .img-product .number-text {
            color: #f2f2f2c4;
            font-size: 14px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        * body .card-product .img-product .container-dots {
            text-align: center;
        }

        * body .card-product .img-product .container-dots .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 10px 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        * body .card-product .img-product .container-dots .active,
        * body .card-product .img-product .container-dots .dot:hover {
            background-color: #008b8b;
        }

        * body .card-product .img-product .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fade {
            from {
                opacity: .4;
            }

            to {
                opacity: 1;
            }
        }

        * body .card-product .data-product {
            flex: 40%;
            background-color: #026969ef;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 45px;
            color: #ddd;
        }

        * body .card-product .data-product .tab {
            overflow: hidden;
        }

        * body .card-product .data-product .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            color: #ddd;
            font-weight: bold;
        }

        * body .card-product .data-product .tab button:hover {
            background-color: #026969ef;
        }

        * body .card-product .data-product .tab button.active {
            background-color: #005a5aef;
        }

        * body .card-product .data-product .tabcontent {
            display: none;
            padding: 6px 12px;
            border-top: none;
            text-align: center;
            color: #ddd;
            line-height: 1.3;
        }

        * body .card-product .data-product .btn-add-cart {
            width: 180px;
            height: 40px;
            border-radius: 5px;
            background-color: orange;
            border: none;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        * body .card-product .data-product .btn-add-cart:hover {
            width: 180px;
            height: 40px;
            border-radius: 5px;
            background-color: #fff;
            color: orange;
            border: none;
            font-size: 20px;
            border: 1px solid #026969ef;
        }

        * body .card-product .data-product .cart {
            display: inline-block;
        }

        * body .card-product .data-product .cart input {
            height: 36px;
            width: 54px;
            font-size: 18px;
        }
    </style>
@endpush
@push('footer_js')
    <script>
        //Code of Slide
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        };
        //Code of Menu Tab.
        function openData(evt, dataName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(dataName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
@endpush
