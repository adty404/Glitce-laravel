@extends('layouts.app', [
    'namePage' => 'Widgets',
    'class' => 'sidebar-mini',
    'activePage' => 'widgets',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="statistics statistics-horizontal">
              <div class="info info-horizontal">
                <div class="row">
                  <div class="col-5">
                    <div class="icon icon-primary icon-circle">
                      <i class="now-ui-icons ui-2_chat-round"></i>
                    </div>
                  </div>
                  <div class="col-7 text-right">
                    <h3 class="info-title">1058</h3>
                    <h6 class="stats-title">messages</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card-footer ">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Update now
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="statistics statistics-horizontal">
              <div class="info info-horizontal">
                <div class="row">
                  <div class="col-5">
                    <div class="icon icon-warning icon-circle">
                      <i class="now-ui-icons business_bank"></i>
                    </div>
                  </div>
                  <div class="col-7 text-right">
                    <h3 class="info-title">
                      <span>$</span>23,685</h3>
                    <h6 class="stats-title">Deposit</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card-footer ">
            <div class="stats">
              <i class="now-ui-icons ui-1_calendar-60"></i> Last week
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="statistics statistics-horizontal">
              <div class="info info-horizontal">
                <div class="row">
                  <div class="col-5">
                    <div class="icon icon-danger icon-circle">
                      <i class="now-ui-icons sport_user-run"></i>
                    </div>
                  </div>
                  <div class="col-7 text-right">
                    <h3 class="info-title">364</h3>
                    <h6 class="stats-title">Players</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card-footer ">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> In the last hour
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="statistics statistics-horizontal">
              <div class="info info-horizontal">
                <div class="row">
                  <div class="col-5">
                    <div class="icon icon-info icon-circle">
                      <i class="now-ui-icons ui-2_favourite-28"></i>
                    </div>
                  </div>
                  <div class="col-7 text-right">
                    <h3 class="info-title">+83K</h3>
                    <h6 class="stats-title">followers</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card-footer ">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Update now
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 text-center">
        <div class="card card-contributions">
          <div class="card-body ">
            <h1 class="card-title">3,521</h1>
            <h3 class="card-category">Total Public Contributions</h3>
            <p class="card-description">After a very successful two-year run, we’re going to be changing the way that contributions work.</p>
          </div>
          <hr>
          <div class="card-footer ">
            <div class="row">
              <div class="col-6">
                <div class="card-stats justify-content-center">
                  <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" checked>
                  <span>All public contributions</span>
                </div>
              </div>
              <div class="col-6">
                <div class="card-stats justify-content-center">
                  <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF">
                  <span>Past week contributions</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Backend development</h5>
            <h4 class="card-title">Tasks</h4>
          </div>
          <div class="card-body ">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-timeline card-plain">
          <div class="card-body">
            <ul class="timeline timeline-simple">
              <li class="timeline-inverted">
                <div class="timeline-badge danger">
                  <i class="now-ui-icons objects_planet"></i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-danger">Some Title</span>
                  </div>
                  <div class="timeline-body">
                    <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                  </div>
                  <h6>
                    <i class="ti-time"></i> 11 hours ago via Twitter
                  </h6>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge success">
                  <i class="now-ui-icons shopping_tag-content"></i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-success">Another One</span>
                  </div>
                  <div class="timeline-body">
                    <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge info">
                  <i class="now-ui-icons shopping_delivery-fast"></i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-info">Another Title</span>
                  </div>
                  <div class="timeline-body">
                    <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                    <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                    <hr>
                  </div>
                  <div class="timeline-footer">
                    <div class="dropdown">
                      <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-pricing ">
              <h6 class="card-category"> Alpha Pack</h6>
              <div class="card-body">
                <div class="card-icon icon-primary ">
                  <i class="now-ui-icons objects_diamond"></i>
                </div>
                <h3 class="card-title">69$</h3>
                <ul>
                  <li>Working materials in EPS</li>
                  <li>6 months access to the library</li>
                </ul>
              </div>
              <div class="card-footer">
                <a href="#pablo" class="btn btn-round btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-pricing card-plain">
              <h6 class="card-category"> Bravo Pack</h6>
              <div class="card-body">
                <div class="card-icon icon-warning ">
                  <i class="now-ui-icons media-1_button-power"></i>
                </div>
                <h3 class="card-title">10$</h3>
                <ul>
                  <li>Complete documentation</li>
                  <li>Working materials in Sketch</li>
                </ul>
              </div>
              <div class="card-footer">
                <a href="#pablo" class="btn btn-round btn-neutral btn-warning">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-testimonial">
          <div class="card-header card-header-avatar">
            <a href="#pablo">
              <img class="img img-raised" src="../assets/img/james.jpg">
            </a>
          </div>
          <div class="card-body ">
            <p class="card-description">
              The networking at Web Summit is like no other European tech conference.
            </p>
            <div class="icon icon-primary">
              <i class="fa fa-quote-right"></i>
            </div>
          </div>
          <div class="card-footer ">
            <h4 class="card-title">Alton becker</h4>
            <p class="category">@altonbecker</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection