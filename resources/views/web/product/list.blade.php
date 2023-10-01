@extends('layouts.web.default')

@section('content')
<div class="row">
    <div class="col-12">
        <p>
            <a href="{{ route('product') }}" class="btn btn-primary">
                <i class="fa fa fa-plus-square-o"></i>
                Thêm sản phẩm
            </a>
        </p>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @include('web.product._blocks.filter')
                <table id="jsElDataTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm </th>
                            <th>Brand </th>
                            <th>Danh mục sản phẩm</th>
                            <th>số lượng</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->brand_id}}</td>
                                <td>{{$product->cate_id}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <a href="{{ route('product.edit', $product->product_id)}}"
                                        class="btn btn-primary btn-sm">
                                        Cập nhật
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                {{-- {!! $events->links() !!} --}}
            </div>
        </div>
    </div>
</div>
@endsection

