@extends('layouts.front_end.error')

@section('content')
    <div class="coming-soon-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="coming-soon-content">
                        <h1>Under Construction</h1>
                        <p>Our website is currently undergoing scheduled maintenance. We Should be back shortly. Thank you
                            for your patience.</p>

                        <form>
                            <input type="email" name="email" id="email" class="email-input"
                                placeholder="Enter your email">
                            <button type="submit" class="submit-btn">Notify Us</button>
                        </form>

                        <div id="timer">
                            <div id="days"></div>
                            <div id="hours"></div>
                            <div id="minutes"></div>
                            <div id="seconds"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="social-list">
            <li class="list-heading">Follow us for update:</li>
            <li><a href="#" class="facebook" target="_blank"><i data-feather="facebook"></i></a></li>
            <li><a href="#" class="twitter" target="_blank"><i data-feather="twitter"></i></a></li>
            <li><a href="#" class="linkedin" target="_blank"><i data-feather="linkedin"></i></a></li>
            <li><a href="#" class="instagram" target="_blank"><i data-feather="instagram"></i></a></li>
        </ul>
    </div>
@endsection
