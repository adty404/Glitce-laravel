<div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            {{ __(" CT") }}
          </a>
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __(" Creative Tim") }}
          </a>
          <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
              <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
              <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
            </button>
          </div>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <div class="user">
            <div class="photo">
              <img style="max-height:100%; max-width:none; width:auto;" src="{{ auth()->user()->profilePicture() }}" />
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                <span>
                  {{ auth()->user()->name }}
                  <b class="caret"></b>
                </span>
              </a>
              <div class="clearfix"></div>
              <div class="collapse" id="collapseExample">
                <ul class="nav">
                  <li>
                    <a href="{{ route('profile.edit') }}">
                      <span class="sidebar-mini-icon">{{ __("MP") }}</span>
                      <span class="sidebar-normal">{{ __("My Profile") }}</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('profile.edit')}}">
                      <span class="sidebar-mini-icon">{{ __("EP") }}</span>
                      <span class="sidebar-normal">{{ __("Edit Profile") }}</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sidebar-mini-icon">{{ __("ST") }}</span>
                      <span class="sidebar-normal">{{ __("Settings") }}</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      <span class="sidebar-mini-icon">{{ __("LG") }}</span>
                      <span class="sidebar-normal">{{ __("Logout") }}</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav">
            <li class="@if ($activePage == 'home') active @endif">
            <a href="{{ route('home') }}">
                <i class="now-ui-icons design_app"></i>
                <p>{{ __("Dashboard") }}</p>
              </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravelExamples">
                    <i class="fab fa-laravel"></i>
                  <p>
                    {{ __("Laravel Examples") }}
                    <b class="caret"></b>
                  </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                  <ul class="nav">
                    <li class="@if ($activePage == 'profile') active @endif">
                      <a href="{{ route('profile.edit') }}">
                        <span class="sidebar-mini-icon">{{ __("P") }}</span>
                        <span class="sidebar-normal"> {{ __("Profile") }} </span>
                      </a>
                    </li>
                    @can('manage-users', App\User::class)
                      <li class="@if ($activePage == 'roles') active @endif">
                        <a href="{{ route('role.index') }}">
                          <span class="sidebar-mini-icon">{{ __("RL") }}</span>
                          <span class="sidebar-normal"> {{ __("Role Management") }} </span>
                        </a>
                      </li>
                    @endcan
                    @can('manage-users', App\User::class)
                      <li class="@if ($activePage == 'users') active @endif">
                        <a href="{{ route('user.index') }}">
                          <span class="sidebar-mini-icon">{{ __("US") }}</span>
                          <span class="sidebar-normal"> {{ __("User Management") }} </span>
                        </a>
                      </li>
                    @endcan
                    @can('manage-items', App\User::class)
                      <li class="@if ($activePage == 'categories') active @endif">
                        <a href="{{ route('category.index') }}">
                          <span class="sidebar-mini-icon">{{ __("CA") }}</span>
                          <span class="sidebar-normal"> {{ __("Category Management") }} </span>
                        </a>
                      </li>
                    @endcan
                    @can('manage-items', App\User::class)
                      <li class="@if ($activePage == 'tags') active @endif">
                        <a href="{{ route('tag.index') }}">
                          <span class="sidebar-mini-icon">{{ __("TG") }}</span>
                          <span class="sidebar-normal"> {{ __("Tag Management") }} </span>
                        </a>
                      </li>
                    @endcan
                    @can('manage-items', App\User::class)
                      <li class="@if ($activePage == 'items') active @endif">
                          <a href="{{ route('item.index') }}">
                            <span class="sidebar-mini-icon">{{ __("IT") }}</span>
                            <span class="sidebar-normal"> {{ __("Item Management") }} </span>
                          </a>
                      </li>
                    @else
                      <li class="nav-item">
                          <a href="{{ route('item.index') }}">
                              <span class="sidebar-mini-icon">{{ __("IT") }}</span>
                              <span class="sidebar-normal"> {{ __("Items") }} </span>
                            </a>
                      </li>
                    @endcan
                  </ul>
                </div>
            <li>
              <a data-toggle="collapse" href="#pagesExamples">
                <i class="now-ui-icons design_image"></i>
                <p>
                  {{ __("Pages") }}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse @if ($activeNav ?? '' == 'pages') show @endif" id="pagesExamples">
                <ul class="nav">
                  <li class="@if ($activePage == 'support') active @endif">
                    <a href="{{ route('page.index','support') }}">
                      <span class="sidebar-mini-icon">{{ __("RS") }}</span>
                      <span class="sidebar-normal"> {{ __("RTL Support") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'timeline') active @endif">
                  <a href="{{ route('page.index','timeline') }}">
                      <span class="sidebar-mini-icon">{{ __("T") }}</span>
                      <span class="sidebar-normal"> {{ __("Timeline") }} </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a data-toggle="collapse" href="#componentsExamples">
                <i class="now-ui-icons education_atom"></i>
                <p>
                  {{ __("Components") }}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse @if ($activeNav ?? '' == 'components') show @endif" id="componentsExamples">
                <ul class="nav">
                  <li class="@if ($activePage == 'buttons') active @endif">
                    <a href="{{ route('page.index','buttons') }}">
                      <span class="sidebar-mini-icon">{{ __("B") }}</span>
                      <span class="sidebar-normal"> {{ __("Buttons ") }}</span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'grid') active @endif">
                    <a href="{{ route('page.index','grid') }}">
                      <span class="sidebar-mini-icon">{{ __("G") }}</span>
                      <span class="sidebar-normal"> {{ __("Grid System") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'panels') active @endif">
                    <a href="{{ route('page.index','panels') }}">
                      <span class="sidebar-mini-icon">{{ __("P") }}</span>
                      <span class="sidebar-normal"> {{ __("Panels") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'alert') active @endif">
                    <a href="{{ route('page.index','sweet-alert') }}">
                      <span class="sidebar-mini-icon">{{ __("SA") }}</span>
                      <span class="sidebar-normal"> {{ __("Sweet Alert") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'notifications') active @endif">
                    <a href="{{ route('page.index','notifications') }}">
                      <span class="sidebar-mini-icon">{{ __("N") }}</span>
                      <span class="sidebar-normal"> {{ __("Notifications") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'icons') active @endif">
                    <a href="{{ route('page.index','icons') }}">
                      <span class="sidebar-mini-icon">{{ __("I") }}</span>
                      <span class="sidebar-normal"> {{ __("Icons") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'typography') active @endif">
                    <a href="{{ route('page.index','typography') }}">
                      <span class="sidebar-mini-icon">{{ __("T") }}</span>
                      <span class="sidebar-normal"> {{ __("Typography") }} </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a data-toggle="collapse" href="#formsExamples">
                <i class="now-ui-icons files_single-copy-04"></i>
                <p>
                  {{ __("Forms") }}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse @if ($activeNav ?? '' == 'forms') show @endif" id="formsExamples">
                <ul class="nav">
                  <li class="@if ($activePage == 'regular') active @endif">
                    <a href="{{ route('page.index','regular') }}">
                      <span class="sidebar-mini-icon">{{ __("RF") }}</span>
                      <span class="sidebar-normal">  {{ __("Regular Forms") }}</span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'extended') active @endif">
                    <a href="{{ route('page.index','extended') }}">
                      <span class="sidebar-mini-icon">{{ __("EF") }}</span>
                      <span class="sidebar-normal"> {{ __("Extended Forms") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'validation') active @endif">
                    <a href="{{ route('page.index','validation') }}">
                      <span class="sidebar-mini-icon">{{ __("V") }}</span>
                      <span class="sidebar-normal">  {{ __("Validation Forms") }}</span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'wizard') active @endif">
                    <a href="{{ route('page.index','wizard') }}">
                      <span class="sidebar-mini-icon">{{ __("W") }}</span>
                      <span class="sidebar-normal">  {{ __("Wizard") }}</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a data-toggle="collapse" href="#tablesExamples">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>
                  {{ __("Tables") }}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse @if ($activeNav ?? '' == 'tables') show @endif" id="tablesExamples">
                <ul class="nav">
                  <li class="@if ($activePage == 'regulartab') active @endif">
                    <a href="{{ route('page.index','regulart') }}">
                      <span class="sidebar-mini-icon">{{ __("RT") }}</span>
                      <span class="sidebar-normal">  {{__("Regular Tables")}}</span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'extendedtab') active @endif">
                    <a  href="{{ route('page.index','extendedt') }}">
                      <span class="sidebar-mini-icon">{{ __("ET") }}</span>
                      <span class="sidebar-normal">  {{ __("Extended Tables") }}</span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'datatables') active @endif">
                    <a  href="{{ route('page.index','datatables') }}">
                      <span class="sidebar-mini-icon">{{ __("DT") }}</span>
                      <span class="sidebar-normal"> {{ __("DataTables.net") }} </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a data-toggle="collapse" href="#mapsExamples">
                <i class="now-ui-icons location_pin"></i>
                <p>
                  {{ __("Maps") }}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse @if ($activeNav ?? '' == 'maps') show @endif" id="mapsExamples">
                <ul class="nav">
                  <li class="@if ($activePage == 'google') active @endif">
                    <a href="{{ route('page.index','google') }}">
                      <span class="sidebar-mini-icon">{{ __("GM") }}</span>
                      <span class="sidebar-normal"> {{ __("Google Maps") }} </span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'fullscreen') active @endif">
                    <a href="{{ route('page.index','fullscreen') }}">
                      <span class="sidebar-mini-icon">{{ __("FM") }}</span>
                      <span class="sidebar-normal"> {{ __(" Full Screen Map") }}</span>
                    </a>
                  </li>
                  <li class="@if ($activePage == 'vector') active @endif">
                    <a href="{{ route('page.index','vector') }}">
                      <span class="sidebar-mini-icon">{{ __("VM") }}</span>
                      <span class="sidebar-normal"> {{ __(" Vector Map") }}</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="@if ($activePage == 'widgets') active @endif">
              <a href="{{ route('page.index','widgets') }}">
                <i class="now-ui-icons objects_diamond"></i>
                <p>{{ __(" Widgets") }}</p>
              </a>
            </li>
            <li class="@if ($activePage == 'charts') active @endif">
              <a href="{{ route('page.index','charts') }}">
                <i class="now-ui-icons business_chart-pie-36"></i>
                <p>{{ __(" Charts") }}</p>
              </a>
            </li >
            <li class="@if ($activePage == 'calendar') active @endif">
              <a href="{{ route('page.index','calendar') }}">
                <i class="now-ui-icons media-1_album"></i>
                <p>{{ __(" Calendar") }}</p>
              </a>
            </li>
          </ul>
        </div>
    </div>