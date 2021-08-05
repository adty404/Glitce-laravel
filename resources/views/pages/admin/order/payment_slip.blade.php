@extends('layouts.admin')

@section('title')
Payment Slip
@endsection

@section('page')
Payment Slip
@endsection

@section('content')
<div class="content">
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Payment Slip </h4>
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
                                  <th>Total Transfer</th>
                                  <th>Bank</th>
                                  <th>Rek</th>
                                  <th>Payment Slip</th>
                                  <th>Action</th>
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
            },
            {
                data: 'ticket',
                name: 'ticket.price',
            },
            {
                data: 'payment',
                name: 'payment.payment',
            },
            {
                data: 'payment',
                name: 'payment.number',
            },
            {
                data: 'photo',
                name: 'photo',
            },
            {
                data: 'aksi',
                name: 'aksi',
            }
        ]
    });
</script>
@endpush