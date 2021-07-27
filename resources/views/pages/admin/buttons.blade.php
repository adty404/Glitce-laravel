@extends('layouts.app', [
    'namePage' => 'Buttons',
    'class' => 'sidebar-mini',
    'activePage' => 'buttons',
    'activeNav' => 'components',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">{{ __('Pick your Color') }}</h4>
          </div>
          <div class="card-body">
            <button class="btn">{{ __('Default') }}</button>
            <button class="btn btn-primary">{{ __('Primary') }}</button>
            <button class="btn btn-info">{{ __('Info') }}</button>
            <button class="btn btn-success">{{ __('Success') }}</button>
            <button class="btn btn-warning">{{ __('Warning') }}</button>
            <button class="btn btn-danger">{{ __('Danger') }}</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">{{ __('Buttons with Label') }}</h4>
          </div>
          <div class="card-body">
            <button class="btn">
              <span class="btn-label">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
              </span>
              {{ __('Left') }}
            </button>
            <button class="btn">
              {{ __('Right') }}
              <span class="btn-label btn-label-right">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
              </span>
            </button>
            <button class="btn btn-info">
              <span class="btn-label">
                <i class="now-ui-icons travel_info"></i>
              </span>
              {{ __('Info') }}
            </button>
            <button class="btn btn-success">
              <span class="btn-label">
                <i class="now-ui-icons ui-1_check"></i>
              </span>
              {{ __('Success') }}
            </button>
            <button class="btn btn-warning">
              <i class="now-ui-icons ui-2_time-alarm"></i> {{ __('Warning') }}
            </button>
            <button class="btn btn-danger">
              <i class="now-ui-icons ui-1_simple-remove"></i> {{ __('Danger') }}
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">{{ __('Pick your Size') }}</h4>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-sm">{{ __('Small') }}</button>
            <button class="btn btn-primary">{{ __('Regular') }}</button>
            <button class="btn btn-primary btn-lg">{{ __('Large') }}</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">{{ __('Pick your Style') }}</h4>
          </div>
          <div class="card-body">
            <button class="btn btn-primary">{{ __('Default') }}</button>
            <button class="btn btn-primary btn-round">{{ __('round') }}</button>
            <button class="btn btn-primary btn-round">
              <i class="now-ui-icons ui-2_favourite-28"></i> {{ __('with iconr') }}
            </button>
            <button class="btn btn-primary btn-round btn-icon">
              <i class="now-ui-icons ui-2_favourite-28"></i>
            </button>
            <button class="btn btn-outline-primary">
              {{ __('Outline') }}
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">{{ __('Pagination') }}</h4>
          </div>
          <div class="card-body">
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-primary">
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">5</a>
                </li>
              </ul>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Next">
                    <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">{{ __('Button Group') }}</h4>
          </div>
          <div class="card-body">
            <div class="btn-group">
              <button type="button" class="btn btn-info">{{ __('Left') }}</button>
              <button type="button" class="btn btn-info">{{ __('Middle') }}</button>
              <button type="button" class="btn btn-info">{{ __('Right') }}</button>
            </div>
            <br>
            <br>
            <div class="btn-group" data-toggle="buttons">
              <button type="button" class="btn btn-round btn-info">1</button>
              <button type="button" class="btn btn-round btn-info">2</button>
              <button type="button" class="btn btn-round btn-info">3</button>
              <button type="button" class="btn btn-round btn-info">4</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-round btn-info">5</button>
              <button type="button" class="btn btn-round btn-info">6</button>
              <button type="button" class="btn btn-round btn-info">7</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card-header">
            <h4 class="card-title">{{ __('Social buttons') }}</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <p class="category">{{ __('Default') }}</p>
                <button class="btn btn-twitter">
                  <i class="fab fa-twitter"></i> {{ __('Connect with Twitter') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">{{ __('Neutral') }}</p>
                <button class="btn btn-icon btn-neutral btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <p class="category">&nbsp;</p>
                <button class="btn btn-neutral btn-twitter">
                  <i class="fab fa-twitter"></i> {{ __('Connect with Twitter') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-facebook">
                  <i class="fab fa-facebook-square"></i> {{ __('Share · 2.2k') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-facebook">
                  <i class="fab fa-facebook-f"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-facebook">
                  <i class="fab fa-facebook-f"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-facebook">
                  <i class="fab fa-facebook-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-facebook">
                  <i class="fab fa-facebook-square"></i> {{ __('Share · 2.2k') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-google">
                  <i class="fab fa-google-plus-g"></i> {{ __('Share on Google+') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-google">
                  <i class="fab fa-google-plus-g"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-google">
                  <i class="fab fa-google-plus-g"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-google">
                  <i class="fab fa-google-plus-g"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-google">
                  <i class="fab fa-google-plus-g"></i> {{ __('Share on Google+') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-linkedin">
                  <i class="fab fa-linkedin"></i> {{ __('Connect with Linkedin') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-linkedin">
                  <i class="fab fa-linkedin"></i> {{ __('Connect with Linkedin') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-pinterest">
                  <i class="fab fa-pinterest"></i> {{ __('Pint it · 212') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-pinterest">
                  <i class="fab fa-pinterest"></i> {{ __('Pint it · 212') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-youtube">
                  <i class="fab fa-youtube"></i> {{ __('View on Youtube') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-youtube">
                  <i class="fab fa-youtube"></i> {{ __('View on Youtube') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-tumblr">
                  <i class="fab fa-tumblr-square"></i> {{ __('Repost') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-tumblr">
                  <i class="fab fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-tumblr">
                  <i class="fab fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-tumblr">
                  <i class="fab fa-tumblr-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-tumblr">
                  <i class="fab fa-tumblr-square"></i> {{ __('Repost') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-github">
                  <i class="fab fa-github"></i> {{ __('Connect with Github') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-github">
                  <i class="fab fa-github"></i> {{ __('Connect with Github') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-behance">
                  <i class="fab fa-behance-square"></i> {{ __('Follow us') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-behance">
                  <i class="fab fa-behance-square"></i> {{ __('Follow us') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-dribbble">
                  <i class="fab fa-dribbble"></i> {{ __('Find us on Dribble') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-dribbble">
                  <i class="fab fa-dribbble"></i> {{ __('Find us on Dribble') }}
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-reddit">
                  <i class="fab fa-reddit"></i> {{ __('Repost · 232') }}
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-neutral btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-neutral btn-reddit">
                  <i class="fab fa-reddit"></i> {{ __('Repost · 232') }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection