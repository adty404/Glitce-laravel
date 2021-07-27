@extends('layouts.app', [
    'namePage' => 'Panels',
    'class' => 'sidebar-mini',
    'activePage' => 'panels',
    'activeNav' => 'components',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header ">
            <h4 class="card-title">Navigation Pills -
              <small class="description">Horizontal Tabs</small>
            </h4>
          </div>
          <div class="card-body ">
            <ul class="nav nav-pills nav-pills-primary" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                  Settings
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                  Options
                </a>
              </li>
            </ul>
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link1">
                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                <br />
                <br /> Dramatically visualize customer directed convergence without revolutionary ROI.
              </div>
              <div class="tab-pane" id="link2">
                Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                <br />
                <br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
              </div>
              <div class="tab-pane" id="link3">
                Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                <br />
                <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header ">
            <h4 class="card-title">Navigation Pills -
              <small class="description">Vertical Tabs</small>
            </h4>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-md-4">
                <ul class="nav nav-pills nav-pills-primary flex-column" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link4" role="tablist">
                      Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                      Settings
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link6" role="tablist">
                      Options
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-8">
                <div class="tab-content">
                  <div class="tab-pane active" id="link4">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                    <br>
                    <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                  </div>
                  <div class="tab-pane" id="link5">
                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                    <br>
                    <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                  </div>
                  <div class="tab-pane" id="link6">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br>
                    <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
              <div class="card card-plain">
                <div class="card-header" role="tab" id="headingOne">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Collapsible Group Item #1
                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-plain">
                <div class="card-header" role="tab" id="headingTwo">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-plain">
                <div class="card-header" role="tab" id="headingThree">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </a>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header ">
            <h4 class="card-title">Navigation Pills Icons -
              <small class="description">Vertical Tabs</small>
            </h4>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <!--
                                    color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                -->
                <ul class="nav nav-pills nav-pills-primary nav-pills-icons flex-column" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link10" role="tablist">
                      <i class="now-ui-icons objects_umbrella-13"></i> Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
                      <i class="now-ui-icons ui-2_settings-90"></i> Settings
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-8">
                <div class="tab-content">
                  <div class="tab-pane active" id="link10">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                    <br>
                    <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                  </div>
                  <div class="tab-pane" id="link11">
                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                    <br>
                    <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="card card-plain card-subcategories">
          <div class="card-header ">
            <h4 class="card-title text-center">Page Subcategories</h4>
            <br />
          </div>
          <div class="card-body ">
            <!--
                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                            -->
            <ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                  <i class="now-ui-icons objects_umbrella-13"></i> Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                  <i class="now-ui-icons shopping_shop"></i> Messages
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                  <i class="now-ui-icons ui-2_settings-90"></i> Settings
                </a>
              </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories">
              <div class="tab-pane active" id="link7">
                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                <br>
                <br> Dramatically visualize customer directed convergence without revolutionary ROI.
              </div>
              <div class="tab-pane" id="link8">
                Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                <br>
                <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
              </div>
              <div class="tab-pane" id="link9">
                Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                <br>
                <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection