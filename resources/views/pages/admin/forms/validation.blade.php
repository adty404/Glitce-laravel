@extends('layouts.app', [
    'namePage' => 'Validation forms ',
    'class' => 'sidebar-mini',
    'activePage' => 'validation',
    'activeNav' => 'forms',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <form id="RegisterValidation" action="" method="">
          <div class="card ">
            <div class="card-header ">
              <h4 class="card-title">Register Form</h4>
            </div>
            <div class="card-body ">
              <div class="form-group has-label">
                <label>
                  Email Address *
                </label>
                <input class="form-control" name="email" type="email" required="true" />
              </div>
              <div class="form-group has-label">
                <label>
                  Password *
                </label>
                <input class="form-control" name="password" id="registerPassword" type="password" required="true" />
              </div>
              <div class="form-group has-label">
                <label>
                  Confirm Password *
                </label>
                <input class="form-control" name="password_confirmation" id="registerPasswordConfirmation" type="password" required="true" equalTo="#registerPassword" />
              </div>
              <div class="category form-category">* Required fields</div>
            </div>
            <div class="card-footer text-right">
              <div class="form-check pull-left">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="optionCheckboxes" required>
                  <span class="form-check-sign"></span>
                  Subscribe to newsletter
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <form id="LoginValidation" action="" method="">
          <div class="card ">
            <div class="card-header ">
              <h4 class="card-title">Login Form</h4>
            </div>
            <div class="card-body ">
              <div class="form-group has-label">
                <label>Full Name *</label>
                <input class="form-control" name="fullname" type="text" email="true" required="true" />
              </div>
              <div class="form-group has-label">
                <label>Email Address *</label>
                <input class="form-control" name="email" type="email" email="true" required="true" />
              </div>
              <div class="form-group has-label">
                <label>Password *</label>
                <input class="form-control" name="password" type="password" required="true" />
              </div>
              <div class="category form-category">* Required fields</div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-12">
        <form id="TypeValidation" class="form-horizontal" action="" method="">
          <div class="card ">
            <div class="card-header ">
              <h4 class="card-title">Type Validation</h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <label class="col-sm-2 col-form-label">Required Text</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="required" required="true" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>required</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="email" email="true" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>email="true"</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Number</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="number" number="true" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>number="true"</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Url</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="url" url="true" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>url="true"</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Equal to</label>
                <div class="col-sm-3">
                  <div class="form-group">
                    <input class="form-control" id="idSource" type="text" placeholder="#idSource" />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalTo="#idSource" />
                  </div>
                </div>
                <label class="col-sm-4 label-on-right">
                  <code>equalTo="#idSource"</code>
                </label>
              </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary">Validate Inputs</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-12">
        <form id="RangeValidation" class="form-horizontal" action="" method="">
          <div class="card ">
            <div class="card-header ">
              <h4 class="card-title">Range Validation</h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <label class="col-sm-2 col-form-label">Min Length</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="min_length" minLength="5" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>minLength="5"</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Max Length</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="max_length" maxLength="5" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>maxLength="5"</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Range</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="range" range="[6,10]" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>range="[6,10]"</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Min Value</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="min" min="6" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>min="6"</code>
                </label>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Max Value</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" type="text" name="max" max="6" />
                  </div>
                </div>
                <label class="col-sm-3 label-on-right">
                  <code>max="6"</code>
                </label>
              </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary">Validate Inputs</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection