@extends('layouts.web.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('web.transposts._blocks.filter')
                    <table id="jsElDataTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm </th>
                                <th>Phương thức vận chuyển </th>
                                <th>Phương thức thanh toán</th>
                                <th>Trạng thái đơn hàng </th>
                                <th>Trạng thái vận chuyển</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transposts as $index => $transpost)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $transpost->product->name }}</td>
                                    <td>{{ $transpost->order->ship_methodName }}</td>
                                    <td>{{ $transpost->order->pay_methodName }}</td>
                                    <td>{{ $transpost->actionName }}</td>
                                    <td>
                                        @if ($transpost->status == 0)
                                            Đơn hàng bị hủy
                                        @else
                                        {{ $transpost->typeName }}
                                        @endif
                                    </td>
                                    @if ($transpost->status == 1 && $transpost->type == 1)
                                        <td>
                                            <a href="{{ route('transposts.call', $transpost->id) }}"
                                                class="btn btn-primary btn-sm">
                                                Liên hệ vận chuyển
                                            </a>
                                        </td>
                                    @elseif($transpost->status == 0)
                                        <td>
                                            <a href="{{ route('transposts.delete', $transpost->id) }}"
                                                class="btn btn-danger btn-sm">
                                                xóa đơn hàng
                                            </a>
                                        </td>
                                    @endif
                                    @if ($transpost->status == 1 && $transpost->type == 2)
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm">
                                                Đã Gọi Shipper
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="card-body">
                    {!! $transposts->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
