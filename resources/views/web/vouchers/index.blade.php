@extends('layouts.web.default')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    <div>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a aria-current="page" href="#"
                                    class="router-link-active router-link-exact-active nav-link active"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    data-bs-original-title="List" aria-label="List">
                                    <i class="bx bx-list-ul"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="Grid" aria-label="Grid"><i
                                        class="bx bx-grid-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{route('admin.vouchers.create')}}" class="btn btn-primary"><i
                                class="bx bx-plus me-1"></i> Add New</a>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="bx bx-dots-horizontal-rounded"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="table-responsive">
                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Mã vouchers</th>
                                    <th scope="col">Giá trị của voucher</th>
                                    <th scope="col">Ngày hết hạn</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vouchers as $voucher)
                                    <tr>

                                        <td>{{ $voucher->code }}</td>
                                        <td><span class="badge badge-soft-success mb-0">{{ $voucher->value }}</span></td>
                                        <td>{{ $voucher->expiration_date }}</td>
                                        <td>{{ $voucher->uses }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary"><i
                                                            class="bx bx-pencil font-size-18"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete" class="px-2 text-danger"><i
                                                            class="bx bx-trash-alt font-size-18"></i></a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i
                                                            class="bx bx-dots-vertical-rounded"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a><a
                                                            class="dropdown-item" href="#">Another action</a><a
                                                            class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0 align-items-center pb-4">
            <div class="col-sm-6">
            </div>
        </div>
    </div>
@endsection
@push('hcss')
    <style>
        body {
            margin-top: 20px;
            background-color: #eee;
        }

        .project-list-table {
            border-collapse: separate;
            border-spacing: 0 12px
        }

        .project-list-table tr {
            background-color: #fff
        }

        .table-nowrap td,
        .table-nowrap th {
            white-space: nowrap;
        }

        .table-borderless>:not(caption)>*>* {
            border-bottom-width: 0;
        }

        .table>:not(caption)>*>* {
            padding: 0.75rem 0.75rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .me-2 {
            margin-right: 0.5rem !important;
        }

        img,
        svg {
            vertical-align: middle;
        }

        a {
            color: #3b76e1;
            text-decoration: none;
        }

        .badge-soft-danger {
            color: #f56e6e !important;
            background-color: rgba(245, 110, 110, .1);
        }

        .badge-soft-success {
            color: #63ad6f !important;
            background-color: rgba(99, 173, 111, .1);
        }

        .badge-soft-primary {
            color: #3b76e1 !important;
            background-color: rgba(59, 118, 225, .1);
        }

        .badge-soft-info {
            color: #57c9eb !important;
            background-color: rgba(87, 201, 235, .1);
        }

        .avatar-title {
            align-items: center;
            background-color: #3b76e1;
            color: #fff;
            display: flex;
            font-weight: 500;
            height: 100%;
            justify-content: center;
            width: 100%;
        }

        .bg-soft-primary {
            background-color: rgba(59, 118, 225, .25) !important;
        }
    </style>
@endpush
