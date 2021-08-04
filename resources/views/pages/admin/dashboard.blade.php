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
                                    <h3 class="info-title">{{ $order_placed }}</h3>
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
                                    <h3 class="info-title">{{ $payment_slip_request }}</h3>
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
                                    <h3 class="info-title">{{ $payment_verified }}</h3>
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
                                    <h3 class="info-title">{{ $total_order }}</h3>
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
                      <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Order Number</th>
                                  <th>Name</th>
                                  <th>ID Number</th>
                                  <th>Email</th>
                                  <th>Phone Number</th>
                              </tr>
                          </thead>
                          <tbody></tbody>
                      </table>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script>
    // AJAX DataTable
    var datatable = $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [{ 
                data: 'DT_RowIndex', 
                orderable: false, 
                searchable : false
            },
            {
                data: 'order_number',
                name: 'order_number'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'id_card',
                name: 'id_card',
            },
            {
                data: 'email',
                name: 'email',
            },
            {
                data: 'phone_number',
                name: 'phone_number',
            }
        ]
    });
</script>
@endpush