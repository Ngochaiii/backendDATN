@extends('layouts.web.default')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <form method="POST" action="{{ route('admin.tickets.close', $ticket->id) }}">
                        @csrf
                        @if ($ticket->status)
                            <button type="submit" class="btn btn-sm btn-danger">
                                {{ __('panel.close_ticket') }}
                            </button>
                        @endif
                    </form>
                </div>
                <hr>
                <div class="col-md-12">
                    <div>
                        <div class="d-inline-block alert alert-primary " role="alert">
                            <b style="padding: 2px" class="">{{ $owner_name }}</b>
                            <i class="fa fa-calendar text-secondary"> {{ $ticket->created_at }}</i>
                            <p>{!! $ticket->message !!}</p>
                        </div>
                    </div>
                    @foreach ($comments as $index => $comment)
                        <div class="{{ $comment->admin_id ? 'text-right' : '' }}">
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
                        <form class="form-horizontal" action="{{ route('admin.tickets.comment', $ticket->id) }}"
                            method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">{{ __('panel.message') }}</label>
                                <div class="col-sm-8">
                                    <textarea id="editor" name="comment_content"></textarea>
                                </div>
                            </div>
                            <center>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            SUBMIT
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            CANCEL
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
@endsection
@push('footer_js')
    <script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
