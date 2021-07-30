<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('now') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('now') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>
        @yield('title')
    </title>
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    
    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.admin.styles')
    @stack('addon-style')
</head>

<body class=" sidebar-mini ">
    <div class="wrapper ">

        {{-- Sidebar --}}
        @include('includes.admin.sidebar')

        <div class="main-panel" id="main-panel">

            <!-- Navbar -->
            @include('includes.admin.navbar')
            <!-- End Navbar -->

            <div class="panel-header panel-header-sm">
                
            </div>
            
            {{-- Content --}}
            @yield('content')

            @include('includes.admin.footer')
        </div>
    </div>
    
    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.admin.scripts')
    @stack('addon-script')
</body>

</html>