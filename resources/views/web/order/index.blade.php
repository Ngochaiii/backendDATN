@extends('layouts.web.default')

@section('content')
    <div class="card ">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Orders List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Người đặt</th>
                            <th>Tên sản phẩm</th>
                            <th>Địa chỉ cụ thể</th>
                            <th>Quantity</th>
                            <th>Phương thức ship</th>
                            <th>Phương thức thanh toán</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($orders as $row)
                            <tr>
                                <td>{{ $row->order_id }}</td>
                                <td>{{ $row->user->name ?? '' }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->specific_address }}</td>
                                <td>{{ $row->quantity }}</td>
                                <td>{{ $row->ship_methodName }}</td>
                                <td>{{ $row->pay_methodName }}</td>
                                <td>{{ $row->status }}</td>
                                <td>
                                    @if ($row->status == 'pending')
                                        <a href="{{ route('order.show', $row->order_id) }}" class="btn btn-sm btn-info">Tạo
                                            Hóa Đơn</a>
                                    @elseif($row->status == 'decline')
                                        <a href="#" class="btn btn-sm btn-danger">Đơn hàng đã bị hủy </a>
                                    @elseif($row->status == 'processing')
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Xán nhận hoàn thành
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Xác nhận </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn xác nhận rằng shipper đã gửi hàng đến khách hàng !!!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('transposts.completed', $row->order_id) }}"
                                                            class="btn btn-primary">Xác nhận</nav></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <a href="#" class="btn btn-sm btn-process">Đơn hàng đã hoàn thành </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
@push('footer_js')
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <script>
        $('#dataTable').DataTable({
            columnDefs: [{
                bSortable: false,
                targets: [6]
            }],
            dom: 'lBfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        },
                        columns: [0, ':visible']

                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        },
                        columns: [0, ':visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        },
                        columns: [0, 1, 2, 5]
                    }
                },
                'colvis'
            ]
        });
    </script>
@endpush
