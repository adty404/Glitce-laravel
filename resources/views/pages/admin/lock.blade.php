@extends('layouts.app', [
    'namePage' => 'Lock page',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'lock',
    'backgroundImage' => asset('now') . "/img/bg13.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="col-md-4 ml-auto mr-auto">
        <div class="card card-lock text-center">
          <div class="card-header ">
            <img src="../../now/img/emilyz.jpg" alt="...">
          </div>
          <div class="card-body ">
            <h4 class="card-title">{{ __('Joe Gardner') }}</h4>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter Password..">
            </div>
          </div>
          <div class="card-footer ">
            <a href="#pablo" class="btn btn-primary btn-round btn-lg">{{ __('Unlock') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush

