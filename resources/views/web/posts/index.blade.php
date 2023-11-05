@extends('layouts.web.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <p>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                    <i class="fa fa fa-plus-square-o"></i>
                    Thêm bài viết
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('web.posts._blocks.filter')
                    <table id="jsElDataTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand</th>
                                <th>Danh mục</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                                <th>Phân loại</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{$item->branch->name ?? 'Tin chung'}}</td>
                                    <td>{{$item->category->name ?? 'Tin chung'}}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->type_name }}</td>
                                    <td>{{ $item->status_name }}</td>
                                    <td>{{ $item->created_at }} {{ $item->created_by }}</td>
                                    <td>
                                        <a href="{{ route('admin.posts.edit', $item->id) }}"
                                            class="btn btn-primary btn-sm mb-2 mr-2">
                                            Cập nhật
                                        </a>
                                        <a href="{{route('single_blog',$item->id)}}" target="_blank"
                                            class="btn btn-info btn-sm mb-2 mr-2">
                                            Xem bài viết
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
