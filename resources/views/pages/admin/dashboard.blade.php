@extends('layouts.admin')

@section('title')
Dashboard Glitce
@endsection

@section('page')
    Dashboard
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="fa fa-shopping-basket"></i>
                                    </div>
                                    <h3 class="info-title">859</h3>
                                    <h6 class="stats-title">Order Placed</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="fa fa-money-check"></i>
                                    </div>
                                    <h3 class="info-title"><small>$</small>3,521</h3>
                                    <h6 class="stats-title">Payment Slip Request</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-info">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <h3 class="info-title">562</h3>
                                    <h6 class="stats-title">Payment Verified</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="fa fa-check-double"></i>
                                    </div>
                                    <h3 class="info-title">353</h3>
                                    <h6 class="stats-title">Total Order</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Recent Order Placed </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                            Name
                          </th>
                          <th>
                            Country
                          </th>
                          <th>
                            City
                          </th>
                          <th class="text-right">
                            Salary
                          </th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              Dakota Rice
                            </td>
                            <td>
                              Niger
                            </td>
                            <td>
                              Oud-Turnhout
                            </td>
                            <td class="text-right">
                              $36,738
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Minerva Hooper
                            </td>
                            <td>
                              Curaçao
                            </td>
                            <td>
                              Sinaai-Waas
                            </td>
                            <td class="text-right">
                              $23,789
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Sage Rodriguez
                            </td>
                            <td>
                              Netherlands
                            </td>
                            <td>
                              Baileux
                            </td>
                            <td class="text-right">
                              $56,142
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Philip Chaney
                            </td>
                            <td>
                              Korea, South
                            </td>
                            <td>
                              Overland Park
                            </td>
                            <td class="text-right">
                              $38,735
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Doris Greene
                            </td>
                            <td>
                              Malawi
                            </td>
                            <td>
                              Feldkirchen in Kärnten
                            </td>
                            <td class="text-right">
                              $63,542
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Mason Porter
                            </td>
                            <td>
                              Chile
                            </td>
                            <td>
                              Gloucester
                            </td>
                            <td class="text-right">
                              $78,615
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Jon Porter
                            </td>
                            <td>
                              Portugal
                            </td>
                            <td>
                              Gloucester
                            </td>
                            <td class="text-right">
                              $98,615
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