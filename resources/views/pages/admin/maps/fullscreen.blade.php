@extends('layouts.app', [
    'namePage' => 'Full Screen Map',
    'class' => 'sidebar-mini',
    'activePage' => 'fullscreen',
    'activeNav' => 'maps',
])

@section('content')
    <div id="map"></div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
    </script>
@endpush