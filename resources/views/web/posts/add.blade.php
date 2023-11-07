@extends('layouts.web.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="card-body card-block">

                        <div class="form-group">
                            <label for="name" class=" form-control-label">Tiêu đề</label>
                            <input type="text" required name="title" value="{{ $form_data->title }}"
                                placeholder="Tên hiển thị" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Ảnh mô tả</label>
                            <p>
                                <label for="banner_image_{{ $form_data->id }}" class="import-zone">
                                    <input type="file" id="banner_image_{{ $form_data->id }}" name="image"
                                        class="d-none" value="{{ $form_data->image ?? '' }}" accept="image/*"
                                        onchange="loadFile(event, 'preview_file_{{ $form_data->id }}')">
                                    <img src="{{ asset('/file/blogs/' . $form_data->image ?? '') }}" id="preview_file_{{ $form_data->id }}"
                                        class="img-fluid {{ isset($form_data->image) ? '' : 'd-none' }}"
                                        style="width: 100px; height:100px; object-fit: contain;" alt="">
                                    <span id="preview_file_{{ $form_data->id }}_plus"
                                        class="{{ isset($form_data->image) ? 'd-none' : '' }}"><i
                                            class="fa fa-plus"></i></span>
                                </label>
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Phiên bản</label>
                                    <input type="text" name="version" value="{{ $form_data->version }}"
                                        placeholder="Tên hiển thị" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Ngày tạo</label>
                                    <input type="datetime-local" name="created_at" value="{{ $form_data->created_at }}"
                                        placeholder="Ngày tạo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="formbold-form-label">Thương hiệu</label>

                                <select class="form-control" name="brand_id">
                                    <option value="" selected="selected">--Chọn--</option>
                                    @foreach ($brands as $brand)
                                        <option  value="{{ $brand->brand_id }}">{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="formbold-form-label">Danh mục sản phẩm</label>

                                <select class="form-control" name="cate_id">
                                    <option value="" selected="selected">--Chọn--</option>
                                    @foreach ($categories as $cate)
                                        <option  value="{{ $cate->cate_id }}">{{ $cate->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Mô tả</label>
                            <textarea cols="30" rows="3" name="description" maxlength="155" class="form-control">{{ $form_data->description }} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="name" class=" form-control-label d-block">Nội dung
                                <button id="jsElShowListImage" class="float-right btn btn-info btn-sm" type="button"
                                    onclick="showListImage()">
                                    <i class="fa fa-external-link mr-2" aria-hidden="true"></i> Danh sách hình ảnh
                                </button>
                            </label>
                            <textarea cols="30" id="editor" rows="3" class="form-control" name="content">{{ $form_data->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="password" class=" form-control-label">Phân loại</label>
                            <select class="form-control" id="jsElPostType" name="type">
                                {!! renderArrayOptions($post_type, $form_data->type) !!}
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="postal-code" class=" form-control-label">Trạng thái</label>
                                        <div class="form-check pl-5">
                                            <div class="radio">
                                                <label for="jsElStatusEnable" class="form-check-label ">
                                                    <input type="radio" required id="jsElStatusEnable"
                                                        @if ($form_data->status === 1) checked @endif name="status"
                                                        value="1" class="form-check-input">
                                                    Hiển thị
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="jsElStatusDisable" class="form-check-label ">
                                                    <input type="radio" required id="jsElStatusDisable"
                                                        @if ($form_data->status === 0) checked @endif name="status"
                                                        value="0" class="form-check-input">
                                                    Ẩn
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p class="text-right mb-0">
                            @if ($form_data->id)
                                <button class="btn btn-danger"
                                    formaction="{{ route('admin.posts.delete', $form_data->id) }}">Xóa</button>
                            @endif
                            <button type="submit" class="btn btn-primary">Cập Nhập </button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('footer_js')
    <script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>
    <script>
        var loadFile = function(event, el) {
            var output = document.getElementById(el);
            var elPlus = document.getElementById(el + '_plus');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.classList.remove("d-none");
            elPlus.classList.add("d-none");
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
