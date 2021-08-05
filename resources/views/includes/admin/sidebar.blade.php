<div class="sidebar" data-color="orange">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            AY
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Apa-Yak Team
        </a>
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-outline-white btn-icon btn-round">
                <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
                <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
            </button>
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('now') }}/img/james.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini-icon">L</span>
                                <span class="sidebar-normal">LOGOUT</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="{{ (request()->is('dashboard*')) ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ (request()->is('ticket*')) ? 'active' : '' }}">
                <a href="{{ route('ticket.index') }}">
                    <i class="fa fa-ticket-alt"></i>
                    <p>Ticket</p>
                </a>
            </li>
            <li class="{{ (request()->is('payment*')) ? 'active' : '' }}">
                <a href="{{ route('payment.index') }}">
                    <i class="fa fa-money-check-alt"></i>
                    <p>Payment</p>
                </a>
            </li>
            <li class="{{ (request()->is('status*')) ? 'active' : '' }}">
                <a href="{{ route('status.index') }}">
                    <i class="fa fa-info"></i>
                    <p>Status</p>
                </a>
            </li>
            <li class="{{ (request()->is('destination*')) ? 'active' : '' }}">
                <a href="{{ route('destination.index') }}">
                    <i class="fa fa-map-pin"></i>
                    <p>Destination</p>
                </a>
            </li>
            <li class="{{ (request()->is('order*')) ? 'active' : '' }}">
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="fa fa-shopping-basket"></i>
                    <p>
                        Orders <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav">
                        <li class="{{ (request()->is('order/placed*')) ? 'active' : '' }}">
                            <a href="{{ route('admin.order.placed') }}">
                                <span class="sidebar-mini-icon">PO</span>
                                <span class="sidebar-normal"> Placed Order </span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('order/payment-slip*')) ? 'active' : '' }}">
                            <a href="{{ route('admin.order.payment-slip') }}">
                                <span class="sidebar-mini-icon">PS</span>
                                <span class="sidebar-normal"> Payment Slip </span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('order/payment-verified*')) ? 'active' : '' }}">
                            <a href="{{ route('admin.order.payment-verified') }}">
                                <span class="sidebar-mini-icon">PV</span>
                                <span class="sidebar-normal"> Payment Verified </span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('order/payment-decline*')) ? 'active' : '' }}">
                            <a href="{{ route('admin.order.payment-decline') }}">
                                <span class="sidebar-mini-icon">PNV</span>
                                <span class="sidebar-normal"> Payment Not Verified </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>