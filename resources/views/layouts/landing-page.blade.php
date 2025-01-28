<!doctype html>
<html lang="en">

<head>
    {{-- Header --}}
    @include('partials.landing-page.header')
</head>

<body>
    {{-- Navbar --}}
    @include('partials.landing-page.navbar')

    @yield('content')

    @include('partials.landing-page.footer')

    @yield('script')
</body>

</html>
