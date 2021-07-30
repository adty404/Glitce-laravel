@extends('layouts.admin')

@section('title')
Edit Ticket
@endsection

@section('page')
Edit Ticket
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Edit Ticket</h4>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('ticket.update', $ticket) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group @error('price') has-error @enderror">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Input Price" value="{{ $ticket->price ?? old('price') }}">
                            @error('price')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="form-group @error('info') has-error @enderror">
                            <label for="">Info</label>
                            <input type="text" name="info" class="form-control" placeholder="Input Ticket Info" value="{{ $ticket->info ?? old('info') }}">
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