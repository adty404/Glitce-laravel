@extends('layouts.app', [
    'namePage' => 'Vector map',
    'class' => 'sidebar-mini',
    'activePage' => 'vector',
    'activeNav' => 'maps',
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Vector Map</h2>
      <p class="category">Looks great on any resolution. Made by our friends from
        <a target="_blank" href="http://jvectormap.com/">jVector Map</a>.</p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-body ">
            <div id="worldMap" class="map map-big"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
      $(document).ready(function() {
        demo.initVectorMap();
      });
  </script>
@endpush