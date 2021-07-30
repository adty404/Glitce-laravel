@extends('layouts.admin')

@section('title')
Create Ticket
@endsection

@section('page')
Create Ticket
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Create Ticket</h4>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group @error('price') has-error @enderror">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Input Price" value="{{ old('price') }}">
                            @error('price')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="form-group @error('info') has-error @enderror">
                            <label for="">Info</label>
                            <input type="text" name="info" class="form-control" placeholder="Input Ticket Info" value="{{ old('info') }}">
                            @error('info')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
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