<script src="{{ asset('assets/front_end/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/appear.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/front_end/assets/js/main.js') }}"></script>
<script>
    var msg = '{{ Session::get('alert') }}';
    var exist = '{{ Session::has('alert') }}';
    if (exist) {
        alert(msg);
    }
</script>
