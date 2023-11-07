<div class="startp-nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand black-logo" href=""><img
                    src="{{ asset('assets/front_end/assets/img/logo.png') }}" alt="logo"></a>
            <a class="navbar-brand white-logo" href=""><img
                    src="{{ asset('assets/front_end/assets/img/white-logo.png') }}" alt="logo"></a>

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link active">Home </a>
                    </li>

                    <li class="nav-item"><a href="{{route('about_us')}}" class="nav-link">About</a>

                    </li>

                    <li class="nav-item"><a href="{{route('home.product')}}" class="nav-link">Shop</a>

                    </li>

                    <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blog</a>
                    </li>

                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

                    <li class="nav-item"><a href="{{route('order_tracking')}}" class="nav-link">Transports</a></li>
                </ul>
            </div>

            <div class="others-option">
                <a href="{{route('showCart')}}" class="cart-wrapper-btn"><i data-feather="shopping-cart"></i><span>{{count(Cart::content())}}</span></a>
                @if (Auth::check())
                    <a href="{{ route('logout.perform') }}" class="btn btn-light">Logout</a>
                @else
                    <a href="{{ route('login.perform') }}" class="btn btn-primary">Login</a>
                @endif
            </div>
        </nav>
    </div>
</div>
