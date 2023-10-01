@extends('layouts.web.default')

@section('content')
    <div class="container d-flex justify-content-center">
        {{-- @php
        $image = array($product->pro_image);
        dd(strstr($image,""));
        @endphp --}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <div> <img src="https://{{$product->pro_image}}" class="img-responsive image"> </div>
                    <p class="rating">9.2</p>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text"><i class="fa fa-map-marker marker"></i> {{$product->description}}</p>
                        <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i
                                class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                        <p class="card-text">$ {{$product->price}}</p>
                    </div>
                    <a href="{{ route('product.delete', $product->product_id) }}"
                        class="btn btn-danger pull-right">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
