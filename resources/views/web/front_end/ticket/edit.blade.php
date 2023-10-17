@extends('layouts.front_end.default')

@section('content')
    <div class="solutions-area ptb-80">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-5">Tạo Ticket</h4>

                    <form class="form-horizontal" id="bugkurtars" method="POST" action="">
                        @csrf
                        <div class="box-body">
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">Thể loại</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="subject">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">Danh mục</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="categories">
                                        {!! renderArrayOptions($ticket_category, $form_data->Category) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">Thông điệp</label>
                                <div class="col-sm-8">
                                    <textarea class="ckeditor" id="editor" name="message" style="visibility: hidden; display: none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">Mã Ticket</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="code">
                                </div>
                            </div>
                            <center>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Tạo Mới
                                        </button>
                                        <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                            Hủy
                                        </button>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('footer_js')
    <script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
@endpush
