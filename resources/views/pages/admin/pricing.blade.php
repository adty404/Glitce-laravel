@extends('layouts.app', [
    'namePage' => 'Pricing Page',
    'class' => 'main',
    'activePage' => 'pricing',
    'backgroundImage' => asset('now') . "/img/bg15.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <h2 class="title">{{ __('Pick the best plan for you') }}</h2>
          <h5 class="description">{{ __('You have Free Unlimited Updates and Premium Support on each package.') }}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-plain">
            <h6 class="card-category"> {{ __('Bravo Pack') }}</h6>
            <div class="card-body">
              <div class="card-icon icon-warning ">
                <i class="now-ui-icons media-1_button-power"></i>
              </div>
              <h3 class="card-title">{{ __('10$') }}</h3>
              <ul>
                <li>{{ __('Complete documentation') }}</li>
                <li>{{ __('Working materials in Sketch') }}</li>
              </ul>
            </div>
            <div class="card-footer">
              <a href="#pablo" class="btn btn-round btn-neutral btn-warning">{{ __('Add to Cart') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing ">
            <h6 class="card-category"> {{ __('Alpha Pack') }}</h6>
            <div class="card-body">
              <div class="card-icon icon-primary ">
                <i class="now-ui-icons objects_diamond"></i>
              </div>
              <h3 class="card-title">{{ __('69$') }}</h3>
              <ul>
                <li>{{ __('Working materials in EPS') }}</li>
                <li>{{ __('6 months access to the library') }}</li>
              </ul>
            </div>
            <div class="card-footer">
              <a href="#pablo" class="btn btn-round btn-primary">{{ __('Add to Cart') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-plain">
            <h6 class="card-category"> {{ __('Charlie Pack') }}</h6>
            <div class="card-body">
              <div class="card-icon icon-success ">
                <i class="now-ui-icons media-2_sound-wave"></i>
              </div>
              <h3 class="card-title">{{ __('69$') }}</h3>
              <ul>
                <li>{{ __('Working materials in PSD') }}</li>
                <li>{{ __('1 year access to the library') }}</li>
              </ul>
            </div>
            <div class="card-footer">
              <a href="#pablo" class="btn btn-round btn-neutral btn-success">{{ __('Add to Cart') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-plain">
            <h6 class="card-category"> {{ __('Extra Pack') }}</h6>
            <div class="card-body">
              <div class="card-icon icon-danger ">
                <i class="now-ui-icons education_atom"></i>
              </div>
              <h3 class="card-title">{{ __('159$') }}</h3>
              <ul>
                <li>{{ __('Complete documentation') }}</li>
                <li>{{ __('2GB cloud storage') }}</li>
              </ul>
            </div>
            <div class="card-footer">
              <a href="#pablo" class="btn btn-round btn-neutral btn-danger">{{ __('Add to Cart') }}</a>
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
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush