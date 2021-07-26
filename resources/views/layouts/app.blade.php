<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title') </title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.scripts')
    @stack('addon-script')
</body>

</html>