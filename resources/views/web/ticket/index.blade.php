@extends('layouts.web.default')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Daanh mục</th>
                        <th>Đối tượng</th>
                        <th>Tài khoản</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $key => $item)
                        <tr class="order">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->status_name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a class="btn btn-success waves-effect waves-light"
                                    href="{{ route('admin.tickets.detail', $item->id) }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
