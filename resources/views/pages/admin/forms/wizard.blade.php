@extends('layouts.app', [
    'namePage' => 'Wizard ',
    'class' => 'sidebar-mini',
    'activePage' => 'wizard',
    'activeNav' => 'forms',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="col-md-10 mr-auto ml-auto">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card card-wizard" data-color="primary" id="wizardProfile">
          <form action="" method="">
            <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="card-header text-center" data-background-color="orange">
              <h3 class="card-title">
                Build Your Profile
              </h3>
              <h3 class="description">This information will let us know more about you.</h5>
                <div class="wizard-navigation">
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#about" data-toggle="tab" role="tab" aria-controls="about" aria-selected="true">
                        <i class="now-ui-icons users_circle-08"></i> About
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#account" data-toggle="tab" data-toggle="tab" role="tab" aria-controls="account" aria-selected="false">
                        <i class="now-ui-icons ui-1_settings-gear-63"></i> Account
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#address" data-toggle="tab" data-toggle="tab" role="tab" aria-controls="address" aria-selected="false">
                        <i class="now-ui-icons ui-1_email-85"></i> Address
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane show active" id="about">
                  <h5 class="info-text"> Let's start with the basic information (with validation)</h5>
                  <div class="row justify-content-center">
                    <div class="col-sm-4">
                      <div class="picture-container">
                        <div class="picture">
                          <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                          <input type="file" id="wizard-picture">
                        </div>
                        <h6 class="description">Choose Picture</h6>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="now-ui-icons users_circle-08"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" placeholder="First Name (required)" name="firstname">
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="now-ui-icons text_caps-small"></i>
                          </div>
                        </div>
                        <input type="text" placeholder="Last Name (required)" class="form-control" name="lastname" />
                      </div>
                    </div>
                    <div class="col-lg-10 mt-3">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="now-ui-icons text_caps-small"></i>
                          </div>
                        </div>
                        <input type="email" placeholder="Email (required)" class="form-control" name="email" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="account">
                  <h5 class="info-text"> What are you doing? (checkboxes) </h5>
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="checkbox" name="jobb" value="Design">
                            <div class="icon">
                              <i class="now-ui-icons design-2_ruler-pencil"></i>
                            </div>
                            <h6>Design</h6>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="checkbox" name="jobb" value="Code">
                            <div class="icon">
                              <i class="now-ui-icons business_bulb-63"></i>
                            </div>
                            <h6>Code</h6>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="checkbox" name="jobb" value="Develop">
                            <div class="icon">
                              <i class="now-ui-icons tech_tv"></i>
                            </div>
                            <h6>Develop</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="address">
                  <div class="row justify-content-center">
                    <div class="col-sm-12">
                      <h5 class="info-text"> Are you living in a nice area? </h5>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label>Street Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Street No.</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Country</label>
                        <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
                          <option value="Afghanistan"> Afghanistan </option>
                          <option value="Albania"> Albania </option>
                          <option value="Algeria"> Algeria </option>
                          <option value="American Samoa"> American Samoa </option>
                          <option value="Andorra"> Andorra </option>
                          <option value="Angola"> Angola </option>
                          <option value="Anguilla"> Anguilla </option>
                          <option value="Antarctica"> Antarctica </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Finish' />
              </div>
              <div class="pull-left">
                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
              </div>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
      <!-- wizard container -->
    </div>
  </div>
@endsection
@push('js')
 <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initNowUiWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>
@endpush