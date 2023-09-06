@extends('layouts.admin.default')

@section('content')
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                            </a>
                            <p class="text-center">Your Social Campaigns</p>
                            <form action="{{ route('register.perform') }}" method="POST">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="mb-3">
                                    <label for="exampleInputtext1" class="form-label">Name</label>
                                    <input type="text" name="username" value="{{ old('username') }}" class="form-control"
                                        id="exampleInputtext1" aria-describedby="textHelp">
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control" id="exampleInputPassword1">
                                    @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('login.perform') }}">Sign In</a>
                                </div>
                                @include('auth.partials.copy')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
