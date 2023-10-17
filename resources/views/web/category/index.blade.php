@extends('layouts.web.default')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thêm danh mục sản phẩm </h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('category.add') }}">
                            @csrf
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" name="name" class="form-control" />
                                <label class="form-label" for="form4Example1">Tên danh mục </label>
                            </div>

                            <!-- Email input -->
                            {{-- <div class="form-outline mb-4">
                              <input type="email" id="form4Example2" class="form-control" />
                              <label class="form-label" for="form4Example2">Email address</label>
                            </div> --}}

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" name="description" id="form4Example3" rows="4"></textarea>
                                <label class="form-label" for="form4Example3">Mô tả về danh mục</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4"
                                    checked />
                                <label class="form-check-label" for="form4Example4">
                                    Send me a copy of this message
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Tạo
                            </button>
                        </form>
                    </div>
                </div>

                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

                <div class="card">
                    <div class="mt-5">
                        @foreach ($dataCategories as $item)
                            <div
                                class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3 shadow-sm">
                                <!-- Basic Plan -->
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <h4 class="pt-3 text-170 text-600 text-primary-d1 letter-spacing">
                                            {{ $item->name }}
                                        </h4>

                                        <div class="text-secondary-d1 text-120">
                                            <span class="ml-n15 align-text-bottom"></span><span class="text-180">10</span> /
                                            sản phẩm
                                        </div>
                                    </div>

                                    <ul
                                        class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
                                        <li>
                                            <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
                                            <span>
                                                <span class="text-110">{{ $item->description }}</span>

                                            </span>
                                        </li>

                                        <li class="mt-25">
                                            <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
                                            <span class="text-110">
                                                Placerat duis
                                            </span>
                                        </li>

                                        <li class="mt-25">
                                            <i class="fa fa-times text-danger-m3 text-110 mr-25 mt-1"></i>
                                            <span class="text-110">
                                                Tortor mauris
                                            </span>
                                        </li>
                                    </ul>

                                    <div class="col-12 col-md-4 text-center">
                                        <a href="{{ route('category.delete', $item->cate_id) }}"
                                            class="f-n-hover btn btn-info btn-raised px-4 py-25 w-75 text-600">Xóa Danh mục
                                        </a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="card-body">
                        {!! $dataCategories->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('hcss')
@endpush
