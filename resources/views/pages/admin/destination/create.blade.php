@extends('layouts.admin')

@section('title')
Create Destination
@endsection

@section('page')
Create Destination
@endsection

@push('prepend-style')
<link href="{{ asset('now') }}/select2/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Create Destination</h4>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('destination.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group @error('ticket_id') has-error @enderror">
                            <label for="">Ticket</label>
                            <select name="ticket_id" id="" class="form-control select2">
                                @foreach ($tickets as $ticket)
                                <option value="{{ $ticket->id }}">{{ $ticket->price }} - {{ $ticket->info }}</option>
                                @endforeach
                            </select>
                            @error('ticket_id')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('name') has-error @enderror">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Input Destination Name"
                                value="{{ old('name') }}">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('country') has-error @enderror">
                            <label for="">Country</label>
                            <input type="text" name="country" class="form-control"
                                placeholder="Input Destination Country" value="{{ old('country') }}">
                            @error('country')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('location') has-error @enderror">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control"
                                placeholder="Input Destination Location" value="{{ old('location') }}">
                            @error('location')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('description') has-error @enderror">
                            <label for="">Description</label>
                            <textarea name="description" id="" rows="3" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('photo') has-error @enderror">
                            <h4 class="card-title">Photo</h4>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ asset('now') }}/img/image_placeholder.jpg" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="photo" required />
                                        @error('photo')
                                        <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer ">
                    <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="{{ asset('now') }}/select2/dist/js/select2.full.min.js"></script>

<script>
    $('.select2').select2();
</script>
@endpush