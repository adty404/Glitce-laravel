@extends('layouts.app', [
    'namePage' => 'Extended tables',
    'class' => 'sidebar-mini',
    'activePage' => 'extendedtab',
    'activeNav' => 'tables',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th class="text-center">
                    #
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Job Position
                  </th>
                  <th class="text-center">
                    Since
                  </th>
                  <th class="text-right">
                    Salary
                  </th>
                  <th class="text-right">
                    Actions
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      1
                    </td>
                    <td>
                      Andrew Mike
                    </td>
                    <td>
                      Develop
                    </td>
                    <td class="text-center">
                      2013
                    </td>
                    <td class="text-right">
                      € 99,225
                    </td>
                    <td class="text-right">
                      <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm ">
                        <i class="now-ui-icons users_single-02"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      2
                    </td>
                    <td>
                      John Doe
                    </td>
                    <td>
                      Design
                    </td>
                    <td class="text-center">
                      2012
                    </td>
                    <td class="text-right">
                      € 89,241
                    </td>
                    <td class="text-right">
                      <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm ">
                        <i class="now-ui-icons users_single-02"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      3
                    </td>
                    <td>
                      Alex Mike
                    </td>
                    <td>
                      Design
                    </td>
                    <td class="text-center">
                      2010
                    </td>
                    <td class="text-right">
                      € 92,144
                    </td>
                    <td class="text-right">
                      <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm ">
                        <i class="now-ui-icons users_single-02"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      4
                    </td>
                    <td>
                      Mike Monday
                    </td>
                    <td>
                      Marketing
                    </td>
                    <td class="text-center">
                      2013
                    </td>
                    <td class="text-right">
                      € 49,990
                    </td>
                    <td class="text-right">
                      <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons users_single-02"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      5
                    </td>
                    <td>
                      Paul Dickens
                    </td>
                    <td>
                      Communication
                    </td>
                    <td class="text-center">
                      2015
                    </td>
                    <td class="text-right">
                      € 69,201
                    </td>
                    <td class="text-right">
                      <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons users_single-02"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      6
                    </td>
                    <td>
                      Manuel Rico
                    </td>
                    <td>
                      Manager
                    </td>
                    <td class="text-center">
                      2012
                    </td>
                    <td class="text-right">
                      € 99,201
                    </td>
                    <td class="text-right">
                      <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons users_single-02"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm   btn-neutral  ">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Striped Table with Checkboxes</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead class="text-primary">
                  <th class="text-center">
                    #
                  </th>
                  <th class="text-center">
                  </th>
                  <th>
                    Product Name
                  </th>
                  <th>
                    Type
                  </th>
                  <th class="text-center">
                    Qty
                  </th>
                  <th class="text-right">
                    Price
                  </th>
                  <th class="text-right">
                    Amount
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      1
                    </td>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Moleskine Agenda
                    </td>
                    <td>
                      Office
                    </td>
                    <td class="text-center">
                      25
                    </td>
                    <td class="text-right">
                      € 49
                    </td>
                    <td class="text-right">
                      € 1,225
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      2
                    </td>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Stabilo Pen
                    </td>
                    <td>
                      Office
                    </td>
                    <td class="text-center">
                      30
                    </td>
                    <td class="text-right">
                      € 10
                    </td>
                    <td class="text-right">
                      € 300
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      3
                    </td>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      A4 Paper Pack
                    </td>
                    <td>
                      Office
                    </td>
                    <td class="text-center">
                      50
                    </td>
                    <td class="text-right">
                      € 10.99
                    </td>
                    <td class="text-right">
                      € 109
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      4
                    </td>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Apple iPad
                    </td>
                    <td>
                      Meeting
                    </td>
                    <td class="text-center">
                      10
                    </td>
                    <td class="text-right">
                      € 499.00
                    </td>
                    <td class="text-right">
                      € 4,990
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      5
                    </td>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Apple iPhone
                    </td>
                    <td>
                      Communication
                    </td>
                    <td class="text-center">
                      10
                    </td>
                    <td class="text-right">
                      € 599.00
                    </td>
                    <td class="text-right">
                      € 5,999
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5"></td>
                    <td class="td-total">Total</td>
                    <td class="td-price">€ 35,999</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Shopping Cart Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-shopping">
                <thead class="">
                  <th class="text-center">
                  </th>
                  <th>
                    Product
                  </th>
                  <th>
                    Color
                  </th>
                  <th>
                    Size
                  </th>
                  <th class="text-right">
                    Price
                  </th>
                  <th class="text-right">
                    Qty
                  </th>
                  <th class="text-right">
                    Amount
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="../../assets/img/saint-laurent.jpg" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="#jacket">Suede Biker Jacket</a>
                      <br />
                      <small>by Saint Laurent</small>
                    </td>
                    <td>
                      Black
                    </td>
                    <td>
                      M
                    </td>
                    <td class="td-number">
                      <small>€</small>3,390
                    </td>
                    <td class="td-number">
                      1
                      <div class="btn-group">
                        <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-delete"></i> </button>
                        <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-add"></i> </button>
                      </div>
                    </td>
                    <td class="td-number">
                      <small>€</small>549
                    </td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-neutral">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="../../assets/img/balmain.jpg" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="#pants">Jersey T-Shirt</a>
                      <br />
                      <small>by Balmain</small>
                    </td>
                    <td>
                      Black
                    </td>
                    <td>
                      M
                    </td>
                    <td class="td-number">
                      <small>€</small>499
                    </td>
                    <td class="td-number">
                      2
                      <div class="btn-group">
                        <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-delete"></i> </button>
                        <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-add"></i> </button>
                      </div>
                    </td>
                    <td class="td-number">
                      <small>€</small>998
                    </td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-neutral">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="../../assets/img/prada.jpg" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="#nothing">Slim-Fit Swim Short</a>
                      <br />
                      <small>by Prada</small>
                    </td>
                    <td>
                      Red
                    </td>
                    <td>
                      M
                    </td>
                    <td class="td-number">
                      <small>€</small>200
                    </td>
                    <td class="td-number">
                      1
                      <div class="btn-group">
                        <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-delete"></i> </button>
                        <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-add"></i> </button>
                      </div>
                    </td>
                    <td class="td-number">
                      <small>€</small>799
                    </td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-neutral">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                    </td>
                    <td class="td-total">
                      Total
                    </td>
                    <td class="td-price">
                      <small>€</small>2,346
                    </td>
                    <td colspan="3" class="text-right">
                      <button type="button" rel="tooltip" class="btn btn-info btn-round ">
                        Complete Purchase
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection