@extends('layouts.app', [
    'class' => 'sidebar-mini ',
     'namePage' => 'Dashboard',
     'activePage' => 'home',
     'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-lg">
    <canvas id="bigDashboardChart"></canvas>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-stats">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <div class="statistics">
                  <div class="info">
                    <div class="icon icon-primary">
                      <i class="now-ui-icons ui-2_chat-round"></i>
                    </div>
                    <h3 class="info-title">859</h3>
                    <h6 class="stats-title">{{ __('Messages') }}</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="statistics">
                  <div class="info">
                    <div class="icon icon-success">
                      <i class="now-ui-icons business_money-coins"></i>
                    </div>
                    <h3 class="info-title">
                      <small>$</small>3,521</h3>
                    <h6 class="stats-title">{{ __('Today Revenue') }}</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="statistics">
                  <div class="info">
                    <div class="icon icon-info">
                      <i class="now-ui-icons users_single-02"></i>
                    </div>
                    <h3 class="info-title">562</h3>
                    <h6 class="stats-title">{{ __('Customers') }}</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="statistics">
                  <div class="info">
                    <div class="icon icon-danger">
                      <i class="now-ui-icons objects_support-17"></i>
                    </div>
                    <h3 class="info-title">353</h3>
                    <h6 class="stats-title">{{ __('Support Requests') }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">{{ __('Active Users') }}</h5>
            <h2 class="card-title">34,252</h2>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-icon dropdown-toggle btn-outline-default no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                <a class="dropdown-item text-danger" href="#">{{ __('Remove Data') }}</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="activeUsers"></canvas>
            </div>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="flag">
                        <img src="{{ asset('now') }}/img/US.png">
                      </div>
                    </td>
                    <td>{{ __('USA') }}</td>
                    <td class="text-right">
                      2.920
                    </td>
                    <td class="text-right">
                      53.23%
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flag">
                        <img src="{{ asset('now') }}/img/DE.png">
                      </div>
                    </td>
                    <td>{{ __('Germany') }}</td>
                    <td class="text-right">
                      1.300
                    </td>
                    <td class="text-right">
                      20.43%
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flag">
                        <img src="{{ asset('now') }}/img/AU.png">
                      </div>
                    </td>
                    <td>{{ __('Australia') }}</td>
                    <td class="text-right">
                      760
                    </td>
                    <td class="text-right">
                      10.35%
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flag">
                        <img src="{{ asset('now') }}/img/GB.png">
                      </div>
                    </td>
                    <td>{{ __('United Kingdom') }}</td>
                    <td class="text-right">
                      690
                    </td>
                    <td class="text-right">
                      7.87%
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flag">
                        <img src="{{ asset('now') }}/img/RO.png">
                      </div>
                    </td>
                    <td>{{ __('Romania') }}</td>
                    <td class="text-right">
                      600
                    </td>
                    <td class="text-right">
                      5.94%
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flag">
                        <img src="{{ asset('now') }}/img/BR.png">
                      </div>
                    </td>
                    <td>{{ __('Brasil') }}</td>
                    <td class="text-right">
                      550
                    </td>
                    <td class="text-right">
                      4.34%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> {{ __('Just Updated') }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">{{ __('Summer Email Campaign') }}</h5>
            <h2 class="card-title">55,300</h2>
            <div class="dropdown">
              <button type="button" class="btn btn-round dropdown-toggle btn-outline-default btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                <a class="dropdown-item text-danger" href="#">{{ __('Remove Data') }}</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="emailsCampaignChart"></canvas>
            </div>
            <div class="card-progress">
              <div class="progress-container">
                <span class="progress-badge">{{ __('Delivery Rate') }}</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="progress-value">90%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-success">
                <span class="progress-badge">{{ __('Open Rate') }}</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-info">
                <span class="progress-badge">{{ __('Click Rate') }}</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
                    <span class="progress-value">12%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-warning">
                <span class="progress-badge">{{ __('Hard Bounce') }}</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                    <span class="progress-value">5%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-danger">
                <span class="progress-badge">{{ __('Spam Report') }}</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0.11%;">
                    <span class="progress-value">0.11%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> {{ __('Just Updated') }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">{{ __('Active Countries') }}</h5>
            <h2 class="card-title">105</h2>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="activeCountries"></canvas>
            </div>
            <div id="worldMap" class="map"></div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> {{ __('Last 7 days') }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> {{ __('Best Selling Products') }}</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-shopping">
                <thead class="">
                  <th class="text-center">
                  </th>
                  <th>
                    {{ __('Product') }}
                  </th>
                  <th>
                    {{ __('Color') }}
                  </th>
                  <th>
                    {{ __('Size') }}
                  </th>
                  <th class="text-right">
                   {{ __(' Price') }}
                  </th>
                  <th class="text-right">
                    {{ __('Qty') }}
                  </th>
                  <th class="text-right">
                    {{ __('Amount') }}
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="{{ asset('now') }}/img/saint-laurent.jpg" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="#jacket">{{ __('Suede Biker Jacket') }}</a>
                      <br />
                      <small>{{ __('by Saint Laurent') }}</small>
                    </td>
                    <td>
                      {{ __('Black') }}
                    </td>
                    <td>
                      M
                    </td>
                    <td class="td-number">
                      <small>€</small>3,390
                    </td>
                    <td class="td-number">
                      1
                    </td>
                    <td class="td-number">
                      <small>€</small>549
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="{{ asset('now') }}/img/balmain.jpg" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="#pants">{{ __('Jersey T-Shirt') }}</a>
                      <br />
                      <small>{{ __('by Balmain') }}</small>
                    </td>
                    <td>
                     {{ __(' Black') }}
                    </td>
                    <td>
                      M
                    </td>
                    <td class="td-number">
                      <small>€</small>499
                    </td>
                    <td class="td-number">
                      2
                    </td>
                    <td class="td-number">
                      <small>€</small>998
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="{{ asset('now') }}/img/prada.jpg" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="#nothing">{{ __('Slim-Fit Swim Short') }}</a>
                      <br />
                      <small>{{ __('by Prada') }}</small>
                    </td>
                    <td>
                      {{ __('Red') }}
                    </td>
                    <td>
                      M
                    </td>
                    <td class="td-number">
                      <small>€</small>200
                    </td>
                    <td class="td-number">
                      1
                    </td>
                    <td class="td-number">
                      <small>€</small>799
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5">
                    </td>
                    <td class="td-total">
                      {{ __('Total') }}
                    </td>
                    <td class="td-price">
                      <small>€</small>2,346
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

      demo.initVectorMap();

    });
  </script>
@endpush
