@extends('layouts.app', [
    'namePage' => 'Charts',
    'class' => 'sidebar-mini',
    'activePage' => 'charts',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header">
    <div class="header text-center">
      <h2 class="title">Charts.js</h2>
      <p class="category">Simple yet flexible JavaScript charting for designers & developers. Made by our friends from
        <a target="_blank" href="http://www.chartjs.org">Charts.js</a>. Please check
        <a target="_blank" href="http://www.chartjs.org/docs/latest/">the full documentation</a>.</p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Simple with gradient</h5>
            <h4 class="card-title">Line Chart</h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round dropdown-toggle btn-outline-default btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExample"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">With numbers and grid</h5>
            <h4 class="card-title">Line Chart 2</h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round dropdown-toggle btn-outline-default btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Simple with grids and numbers</h5>
            <h4 class="card-title">Bar Chart</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="barChartSimpleGradientsNumbers"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Multiple bars no gradient</h5>
            <h4 class="card-title">Bar Chart 2</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="barChartMultipleBarsNoGradient"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
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
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartPageCharts();
      });
  </script>
@endpush