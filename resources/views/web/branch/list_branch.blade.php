@extends('layouts.web.default')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="people-nearby">
                @foreach ($branches as $item)
                    <div class="nearby-user">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                @if ($item->logo == 'logo.jpg')
                                    <img src="{{ asset('assets/images/logos/favicon.png') }}" alt="Brand"
                                        class="profile-photo-lg">
                                @else
                                    <img src="{{ asset('/file/brands/' . $item->logo) }}" alt="Brand"
                                        class="profile-photo-lg">
                                @endif
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <h5><a href="#" class="profile-link">{{ $item->name }}</a></h5>
                                <p>Software Engineer</p>
                                <p class="text-muted">500m away</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <a href="{{ route('branch.edit', $item->slug) }}"
                                    class="btn btn-primary pull-right">Update</a>
                                <a href="{{ route('branch.delete', $item->slug) }}"
                                    class="btn btn-danger pull-right">Delete</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-body" >
                {!! $branches->links() !!}
            </div>
        </div>
    </div>
@endsection
@push('hcss')
    <style>
        .people-nearby .google-maps {
            background: #f8f8f8;
            border-radius: 4px;
            border: 1px solid #f1f2f2;
            padding: 20px;
            margin-bottom: 20px;
        }

        .people-nearby .google-maps .map {
            height: 300px;
            width: 100%;
            border: none;
        }

        .people-nearby .nearby-user {
            padding: 20px 0;
            border-top: 1px solid #f1f2f2;
            border-bottom: 1px solid #f1f2f2;
            margin-bottom: 20px;
        }

        img.profile-photo-lg {
            height: 80px;
            width: 80px;
            border-radius: 50%;
        }
    </style>
@endpush
