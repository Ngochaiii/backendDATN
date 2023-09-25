@extends('layouts.web.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <p>
                <a href="{{ route('events.create') }}" class="btn btn-primary">
                    <i class="fa fa fa-plus-square-o"></i>
                    Thêm sự kiện
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('web.events._blocks.filter')
                    <table id="jsElDataTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Thời gian</th>
                                <th>Phân loại</th>
                                <th>Tiêu đề</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $index => $event)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $event->time_info }}</td>
                                    <td>{{ $event->type_name }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->status_name }}</td>
                                    <td>
                                        <a href="{{ route('events.edit', $event->id) }}"
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
                    {!! $events->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
