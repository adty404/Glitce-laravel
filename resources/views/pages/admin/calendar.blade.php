@extends('layouts.app', [
    'namePage' => 'Calendar',
    'class' => 'sidebar-mini',
    'activePage' => 'calendar',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
      <h2 class="title">FullCalendar.io</h2>
      <p class="category">Handcrafted by our friends from
        <a target="_blank" href="https://fullcalendar.io/">FullCalendar.io</a>. Please checkout their
        <a href="https://fullcalendar.io/docs/" target="_blank">full documentation</a>.</p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="card card-calendar">
          <div class="card-body ">
            <div id="fullCalendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.initFullCalendar();
    });
  </script>
@endpush