@extends('layouts.web.default')

@section('content')
    <div class="card">
        <form method="POST">
            <div class="card-body card-block">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-control-label">Tiêu đề sự kiện</label>
                    <input type="text" required name="title" value="{{ $form_data->title }}"
                        placeholder="Tối thiểu 4 ký tự" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class=" form-control-label">Phân loại</label>
                    <select class="form-control" id="jsElEventType" name="type">
                        {!! renderArrayOptions($event_types, $form_data->type) !!}
                    </select>
                </div>
                <label for="name" class=" form-control-label">Thời gian bắt đầu</label>
                <div class="row created_type" id="created_type_3">
                    <div class="col-4">
                        <input type="date" class="form-control jsElEventTimeInput jsElEventDate" name="date_started"
                            disabled value="{{ $form_data->raw_date }}">
                    </div>
                    <div class="col-4">
                        <input type="time" class="form-control jsElEventTimeInput jsElEventTime" name="time_started"
                            disabled required value="{{ $form_data->raw_time }}">
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <select class="form-control jsElEventTimeInput jsElEventDay" name="day_of_week_started"
                                disabled>
                                {!! renderArrayOptions($day_of_weeks, $form_data->day_of_week) !!}
                            </select>
                        </div>
                    </div>
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
                                            Đang hoạt động
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="jsElStatusDisable" class="form-check-label ">
                                            <input type="radio" required id="jsElStatusDisable"
                                                @if ($form_data->status === 0) checked @endif name="status"
                                                value="0" class="form-check-input">
                                            Ngừng hoạt động
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="text-right mb-0">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-calendar-o mr-1"></i> Cập nhật</button>
                </p>
            </div>
        </form>
    </div>
@endsection
@push('footer_js')
    <script>
        jQuery(document).ready(function($) {
            function displayInputForType(elEventType) {
                let elEventDate = $('.jsElEventDate');
                let elEventTime = $('.jsElEventTime');
                let elEventDay = $('.jsElEventDay');
                let elEventTimeInput = $('.jsElEventTimeInput');
                elEventTimeInput.attr('disabled', 'disabled');
                elEventTime.removeAttr('disabled');
                switch (parseInt(elEventType)) {
                    case 0:
                        break;
                    case 3:
                        elEventDay.removeAttr('disabled');
                        break;
                    case 5:
                        elEventDate.removeAttr('disabled');
                        break;
                    default:
                        break;

                } //end switch
            }

            $(document).ready(function() {
                $('#jsElEventType').on('change', function() {
                    displayInputForType($(this).val());
                });

                displayInputForType($('#jsElEventType').val());
            });
        });
    </script>
@endpush
