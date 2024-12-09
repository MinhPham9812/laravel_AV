<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/news.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/news_detail.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/aking_general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

</head>

<body>


    <div id="main">
        <!-- Header -->
        <x-header />


        <main>
            @if (Request::is('/'))
                @yield('home')
            @elseif(Request::is('aking-general*') ||
                    Request::is('aking-potential*') ||
                    Request::is('aking-roadmap*') ||
                    Request::is('aking-lion-value*'))
                {{-- Thêm * để bắt tất cả các route con của aking --}}
                @yield('tab-aking')
            @elseif(Request::is('pineapple-village-model*') ||
                    Request::is('pineapple-village-location*') ||
                    Request::is('pineapple-village-potential*') ||
                    Request::is('pineapple-village-adviser*'))
                @yield('tab-pineapple')
            @elseif(Request::is('investment-farm'))
                @yield('investment-farm')
            @elseif(Request::is('investment-seminar'))
                @yield('investment-seminar')
            @elseif(Request::is('news*') || Request::is('newsProject*') || Request::is('notificationPage*') || Request::is('event*'))
                @yield('tab-news')
            @elseif(Request::is('q-a'))
                @yield('q-a')
            @elseif(Request::is('contact'))
                @yield('contact')
            @endif
        </main>

        <!-- Footer -->
        <x-footer />
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
