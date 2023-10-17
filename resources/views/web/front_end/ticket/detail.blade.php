@extends('layouts.front_end.default')

@section('content')
    <div class="solutions-area ptb-80">
        <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('controlpanel.ticket.close', $ticket->id) }}">
                            @csrf
                            @if ($ticket->status)
                                <button type="submit" class="btn btn-sm btn-danger pull-right">
                                    Close
                                </button>
                            @endif
                        </form>
                        <div class="col-md-12">
                            <div class="text-right">
                                <div class="d-inline-block alert alert-primary " role="alert">
                                    <b style="padding: 2px" class="">{{ $owner_name }}</b>
                                    <i class="fa fa-calendar text-secondary"> {{ $ticket->created_at }}</i>
                                    <p>{!! $ticket->message !!}</p>
                                </div>
                            </div>
                            @foreach ($comments as $index => $comment)
                                <div class="{{ $comment->admin_id ? '' : 'text-right' }}">
                                    <div class="d-inline-block alert alert-{{ $comment->admin_id ? 'warning' : 'primary' }}"
                                        role="alert">
                                        <b style="padding: 2px" class="">
                                            {{ $comment->admin_id ? $comment->admin->name : $owner_name }}
                                        </b>
                                        <i class="fa fa-calendar text-secondary"> {{ $comment->created_at }}</i>
                                        <p>{!! $comment->message !!}</p>
                                    </div>
                                </div>
                            @endforeach
                            <hr>
                            @if ($ticket->status)
                                <form class="form-horizontal"
                                    action="{{ route('controlpanel.ticket.update', $ticket->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                            class="col-sm-2 col-form-label">Thông điệp</label>
                                        <div class="col-sm-8">
                                            <textarea class="ckeditor" name="comment_content" style="visibility: hidden; display: none;"></textarea>
                                        </div>
                                    </div>
                                    <center>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Cập nhập
                                                </button>
                                                <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                    hủy bỏ
                                                </button>
                                            </div>
                                        </div>
                                    </center>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('footer_js')
    <script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
@endpush
