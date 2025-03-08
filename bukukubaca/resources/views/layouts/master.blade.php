<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('tamplate/img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>BukuKuBuka</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('tamplate/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('tamplate/css/ion.rangeSlider.skinFlat.css') }}" />
    <link rel="stylesheet" href="{{ asset('tamplate/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplate/css/main.css') }}">
    <style>
        /* CSS untuk loader */
        #loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('{{ asset('tamplate/img/loader.gif') }}') 50% 50% no-repeat rgb(249,249,249);
            
        }
    </style>
</head>

<body>
    <!-- Loader -->
    <div id="loader"></div>

    @include('partials.header')
    <main class="main" style="min-height:80vh">
        <section id="starter-section" class="starter-section section">
            <div class="container" style="margin-top: 200px; margin-bottom: 100px;">
                <div class="justify-content-center">
                    <div class="text-center">
                        <div class="section-title">
                            <h1>@yield("title")</h1>
                            <p>@yield("keterangan_halaman")</p>
                        </div>
                    </div>
                </div>
                <div class="konten">
                    @yield('content')
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
    <script src="{{ asset('tamplate/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('tamplate/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tamplate/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('tamplate/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('tamplate/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('tamplate/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('tamplate/js/countdown.js') }}"></script>
    <script src="{{ asset('tamplate/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('tamplate/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('tamplate/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('tamplate/js/main.js') }}"></script>
    <script>
        // JavaScript untuk menghilangkan loader setelah halaman selesai dimuat
        $(window).on('load', function() {
            $('#loader').fadeOut('1500');
        });
    </script>
</body>

</html>