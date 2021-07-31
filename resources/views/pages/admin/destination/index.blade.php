@extends('layouts.admin')

@section('title')
Destination
@endsection

@section('page')
Destination
@endsection

@section('content')
<div class="content">
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('destination.create') }}">
                        <button type="button" class="btn btn-primary" style="float: right;">
                            <i class="fa fa-plus"></i>
                            Add Data
                        </button>
                    </a>
                    <h4 class="card-title"> Data Destination </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Ticket</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Location</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <form action="" method="post" id="deleteForm">
                @csrf
                @method("DELETE")
                <input type="submit" value="Hapus" style="display: none">
            </form>
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
                data: 'ticket',
                name: 'ticket.price'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'country',
                name: 'country',
            },
            {
                data: 'location',
                name: 'location',
            },
            {
                data: 'description',
                name: 'description',
            },
            {
                data: 'photo',
                name: 'photo',
            },
            {
                data: 'aksi',
                name: 'aksi',
            },
        ]
    });
</script>
@endpush