@extends('layouts.web.default')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="formbold-mb-3">
                    <label for="age" class="formbold-form-label"> Tên sản phẩm </label>
                    <input type="text" name="name" id="age" placeholder="ex:25" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-3">
                    <label class="formbold-form-label">Thương hiệu</label>

                    <select class="formbold-form-input" name="brand_id">
                        @foreach ($brands as $brand)
                            <option selected value="{{ $brand->brand_id }}">{{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="formbold-mb-3">
                    <label class="formbold-form-label">Danh mục sản phẩm</label>

                    <select class="formbold-form-input" name="cate_id">
                        @foreach ($categories as $cate)
                            <option selected value="{{ $cate->cate_id }}">{{ $cate->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="formbold-mb-3">
                    <label for="quantity" class="formbold-form-label"> Số lượng </label>
                    <input type="number" name="quantity" placeholder="ex:25" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-3">
                    <label for="Price" class="formbold-form-label"> Price </label>
                    <input type="number" name="price" id="dob" class="formbold-form-input" />
                </div>
                <div class="formbold-mb-3">
                    <label for="Price" class="formbold-form-label"> Sale Price </label>
                    <input type="number" name="sale_price" id="dob" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-3">
                    <label for="status" class="formbold-form-label"> status </label>
                    <input type="text" name="status" id="email" placeholder=" " class="formbold-form-input" />
                </div>

                <div class="formbold-mb-3">
                    <label for="Featured" class="formbold-form-label"> Featured </label>

                    <input type="text" name="featured" placeholder="Featured"
                        class="formbold-form-input formbold-mb-3" />
                </div>
                <div class="formbold-mb-3">
                    <label for="description" class="formbold-form-label"> Mô tả </label>

                    <input type="text" name="description" placeholder="Thêm mô tả"
                        class="formbold-form-input formbold-mb-3" />
                </div>

                <div class="formbold-mb-3 formbold-input-wrapp">
                    <label for="phone" class="formbold-form-label"> Ảnh sản phẩm </label>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="images[]" accept="image/png, image/gif, image/jpeg" id="images" placeholder="Choose images"
                                    multiple>
                            </div>
                            @error('images')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="mt-1 text-center">
                                <div class="images-preview-div d-flex"> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="submit" type="submit" class="formbold-btn">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('hcss')
    <style>
        .images-preview-div img {
            width: 250px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .formbold-mb-3 {
            margin-bottom: 15px;
        }

        .formbold-relative {
            position: relative;
        }

        .formbold-opacity-0 {
            opacity: 0;
        }

        .formbold-stroke-current {
            stroke: #ffffff;
            z-index: 999;
        }

        #supportCheckbox:checked~div span {
            opacity: 1;
        }

        #supportCheckbox:checked~div {
            background: #6a64f1;
            border-color: #6a64f1;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 570px;
            width: 100%;
            background: white;
            padding: 40px;
        }

        .formbold-img {
            display: block;
            margin: 0 auto 45px;
        }

        .formbold-input-wrapp>div {
            display: flex;
            gap: 20px;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .formbold-input-flex>div {
            width: 50%;
        }

        .formbold-form-input {
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-form-input::placeholder,
        select.formbold-form-input,
        .formbold-form-input[type='date']::-webkit-datetime-edit-text,
        .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
        .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
        .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
            color: rgba(83, 99, 135, 0.5);
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-form-label {
            color: #536387;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-checkbox-label {
            display: flex;
            cursor: pointer;
            user-select: none;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
        }

        .formbold-checkbox-label a {
            margin-left: 5px;
            color: #6a64f1;
        }

        .formbold-input-checkbox {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .formbold-checkbox-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            margin-right: 16px;
            margin-top: 2px;
            border: 0.7px solid #dde3ec;
            border-radius: 3px;
        }

        .formbold-form-file {
            padding: 12px;
            font-size: 14px;
            line-height: 24px;
            color: rgba(83, 99, 135, 0.5);
        }

        .formbold-form-file::-webkit-file-upload-button {
            display: none;
        }

        .formbold-form-file:before {
            content: 'Upload';
            display: inline-block;
            background: #EEEEEE;
            border: 0.5px solid #E7E7E7;
            border-radius: 3px;
            padding: 3px 12px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            color: #637381;
            font-weight: 500;
            font-size: 12px;
            line-height: 16px;
            margin-right: 10px;
        }

        .formbold-btn {
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            margin-top: 25px;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-w-45 {
            width: 45%;
        }
    </style>
@endpush
@push('footer_js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(function() {
            // Multiple images preview with JavaScript
            var previewImages = function(input, imgPreviewPlaceholder) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                imgPreviewPlaceholder);
                        }
                        console.log(input.files[i]);
                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#images').on('change', function() {
                previewImages(this, 'div.images-preview-div');
            });
        });
    </script>
@endpush
