<div class="sidebar" data-color="green">
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
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="now-ui-icons design_image"></i>
                    <p>
                        Pages <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/pages/pricing.html">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Pricing </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/rtl.html">
                                <span class="sidebar-mini-icon">RS</span>
                                <span class="sidebar-normal"> RTL Support </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/invoice.html">
                                <span class="sidebar-mini-icon">I</span>
                                <span class="sidebar-normal"> Invoice </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/timeline.html">
                                <span class="sidebar-mini-icon">T</span>
                                <span class="sidebar-normal"> Timeline </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/login.html">
                                <span class="sidebar-mini-icon">L</span>
                                <span class="sidebar-normal"> Login </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/register.html">
                                <span class="sidebar-mini-icon">R</span>
                                <span class="sidebar-normal"> Register </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/lock.html">
                                <span class="sidebar-mini-icon">LS</span>
                                <span class="sidebar-normal"> Lock Screen </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/user.html">
                                <span class="sidebar-mini-icon">UP</span>
                                <span class="sidebar-normal"> User Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="now-ui-icons education_atom"></i>
                    <p>
                        Components <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/components/buttons.html">
                                <span class="sidebar-mini-icon">B</span>
                                <span class="sidebar-normal"> Buttons </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/components/grid.html">
                                <span class="sidebar-mini-icon">G</span>
                                <span class="sidebar-normal"> Grid System </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/components/panels.html">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Panels </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/components/sweet-alert.html">
                                <span class="sidebar-mini-icon">SA</span>
                                <span class="sidebar-normal"> Sweet Alert </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/components/notifications.html">
                                <span class="sidebar-mini-icon">N</span>
                                <span class="sidebar-normal"> Notifications </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/components/icons.html">
                                <span class="sidebar-mini-icon">I</span>
                                <span class="sidebar-normal"> Icons </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/components/typography.html">
                                <span class="sidebar-mini-icon">T</span>
                                <span class="sidebar-normal"> Typography </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    <p>
                        Forms <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/forms/regular.html">
                                <span class="sidebar-mini-icon">RF</span>
                                <span class="sidebar-normal"> Regular Forms </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/forms/extended.html">
                                <span class="sidebar-mini-icon">EF</span>
                                <span class="sidebar-normal"> Extended Forms </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/forms/validation.html">
                                <span class="sidebar-mini-icon">V</span>
                                <span class="sidebar-normal"> Validation Forms </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/forms/wizard.html">
                                <span class="sidebar-mini-icon">W</span>
                                <span class="sidebar-normal"> Wizard </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>
                        Tables <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/tables/regular.html">
                                <span class="sidebar-mini-icon">RT</span>
                                <span class="sidebar-normal"> Regular Tables </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/tables/extended.html">
                                <span class="sidebar-mini-icon">ET</span>
                                <span class="sidebar-normal"> Extended Tables </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/tables/datatables.net.html">
                                <span class="sidebar-mini-icon">DT</span>
                                <span class="sidebar-normal"> DataTables.net </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="now-ui-icons location_pin"></i>
                    <p>
                        Maps <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/maps/google.html">
                                <span class="sidebar-mini-icon">GM</span>
                                <span class="sidebar-normal"> Google Maps </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/maps/fullscreen.html">
                                <span class="sidebar-mini-icon">FM</span>
                                <span class="sidebar-normal"> Full Screen Map </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/maps/vector.html">
                                <span class="sidebar-mini-icon">VM</span>
                                <span class="sidebar-normal"> Vector Map </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="../examples/widgets.html">
                    <i class="now-ui-icons objects_diamond"></i>
                    <p>Widgets</p>
                </a>
            </li>
            <li>
                <a href="../examples/charts.html">
                    <i class="now-ui-icons business_chart-pie-36"></i>
                    <p>Charts</p>
                </a>
            </li>
            <li>
                <a href="../examples/calendar.html">
                    <i class="now-ui-icons media-1_album"></i>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </div>
</div>