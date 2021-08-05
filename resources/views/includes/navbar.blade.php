<div id="navbar" class="navbar-fixed">
    <nav class="main-color z-depth-0" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="{{ route('home') }}">
                <img src="/assets/img/logo_glitche.svg" class="brand-logo">
            </a>

            <ul id="nav-mobile" class="right hide-on-med-and-down menu_" style="margin-top: 0.3em;">
                <li class="{{ request()->is('/') ? 'activated' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ request()->is('destination-front*') ? 'activated' : '' }}"><a href="{{ route('destination') }}">Destination</a></li>
                <li class="{{ request()->is('about') ? 'activated' : '' }}"><a href="{{ route('about') }}">About</a></li>
                <li class="btn_nav"><a href="{{ route('order.check') }}" class="waves-effect waves-light btn-glitche">Check
                        Order</a></li>
            </ul>

            <a data-target="slide-out" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>
</div>
<ul id="slide-out" class="sidenav grey lighten-3">
    <li class="z-depth-2">
        <div class="user-view main-color" style="padding-bottom: 1em;">
            <img src="/assets/img/logo_glitche.svg"
                style="height: 5em;margin: 0 auto;display: block;padding: 0.2em;">
        </div>
    </li>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('destination') }}">Destination</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('order.check') }}">Check Order</a></li>
    <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
</ul>