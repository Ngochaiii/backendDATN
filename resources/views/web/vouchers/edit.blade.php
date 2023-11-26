@extends('layouts.web.default')

@section('content')
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.vouchers.update', $voucher->id) }}">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Chi tiết voucher</h6>
                                </div>

                                @csrf
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="code">Mã Code</label>
                                        <input type="text" class="form-control" name="code"
                                            value="{{ $voucher->code }}" placeholder="Enter Mã Code">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="expiration_date">Loại voucher</label>
                                        <select class="form-select" name="type" aria-label="Default select example">
                                            <option value="percentage"
                                                {{ $voucher->type == 'percentage' ? 'selected' : '' }}>Giảm giá phần trăm
                                            </option>
                                            <option value="fixed" {{ $voucher->type == 'fixed' ? 'selected' : '' }}>Giảm
                                                giá cố định</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="expiration_date">Ngày hết hạn</label>
                                        <input type="date" class="form-control" name="expiration_date" value="{{$voucher->expiration_date}}"
                                            placeholder="Nhập ngày hết hạn">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="value">Giá trị :</label>
                                        <input type="text" class="form-control" name="value" value="{{$voucher->value}}"
                                            placeholder="Giá trị của mã ">

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="value">Giá trị đơn hàng tối thiểu để có thể sử dụng voucher :</label>
                                        <input type="text" class="form-control" name="min_order_value" value="{{$voucher->min_order_value}}"
                                            placeholder="Giá trị của mã ">

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="value"> Số lần sử dụng tối đa của vouche :</label>
                                        <input type="text" class="form-control" name="max_uses" value="{{$voucher->max_uses}}"
                                            placeholder="Giá trị của mã ">

                                    </div>
                                </div>
                            </div>

                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" name="active" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Trạng thái voucher</label>
                            </div>
                            <div class="row gutters mt-2">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('hcss')
    <style>
        body {
            margin: 0;
            padding-top: 40px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }

        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }

        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }

        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }

        .account-settings .about p {
            font-size: 0.825rem;
        }

        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }
    </style>
@endpush
