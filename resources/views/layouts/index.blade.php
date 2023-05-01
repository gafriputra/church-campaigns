<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @if ($navbar == 'donasi')
            Data Donasi |
        @endif REC Galaxy Mall
    </title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- video popup plugin css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('html/css/style.css') }}">
</head>

<body>
    <div class="@if ($navbar == 'home') home-header @endif">
        @include('components.navbar')
        @yield('jumbotron')
    </div>
    @yield('content')
    <!-- .about-section -->
    @include('components.footer')
    <!-- /footer -->

    <!-- Js plugins -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        // video popup js
        $(document).ready(function() {
            $('.popup-youtube').magnificPopup({
                disableOn: false,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });
        });
    </script>
</body>

</html>
