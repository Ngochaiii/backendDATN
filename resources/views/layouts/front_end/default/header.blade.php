<header id="header" class="headroom">
    <div class="startp-responsive-nav">
        <div class="container">
            <div class="startp-responsive-menu">
                <div class="logo black-logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/front_end/assets/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="logo white-logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/front_end/assets/img/white-logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.front_end.default.nav')

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <a href="cart.html" class="cart-wrapper-btn"><i
                                data-feather="shopping-cart"></i><span>0</span></a>
                        @if (Auth::check())
                            <a href="{{ route('logout.perform') }}" class="btn btn-light">Logout</a>
                        @else
                            <a href="{{ route('login.perform') }}" class="btn btn-primary">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
