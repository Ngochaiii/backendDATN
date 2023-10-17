@extends('layouts.front_end.default')

@section('content')
    <div class="solutions-area ptb-80">
        <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-5">Ticket</h4>
                        <div class="box-body" id="ticket-content">
                            <div class="table-responsive">
                                <table class="table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Danh Mục </th>
                                            <th>Thể Loại </th>
                                            <th>Trạng Thái</th>
                                            <th>Ngày Tạo </th>
                                            <th>Ngày Kết Thúc</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $key => $item)
                                            <tr class="order">

                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->category_name }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->status_name }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a class="btn btn-success waves-effect waves-light"
                                                        href="{{ route('controlpanel.ticket.detail.edit', $item->id) }}">
                                                        <i class="fa fa-eye">Edit</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="datatable-buttons_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item "></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="pull-right" style="padding: 20px 0">
                                    <a class="btn btn-primary" href="{{ route('controlpanel.ticket.create') }}">
                                        <i class="fa fa-check"></i> Tạo Mới
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
