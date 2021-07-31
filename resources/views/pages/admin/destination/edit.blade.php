@extends('layouts.admin')

@section('title')
Edit Destination
@endsection

@section('page')
Edit Destination
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Edit Destination</h4>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('destination.update', $destination) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group @error('ticket_id') has-error @enderror">
                            <label for="">Ticket</label>
                            <select name="ticket_id" id="" class="form-control select2">
                                @foreach ($tickets as $ticket)
                                    <option
                                        value="{{ $ticket->id }}"
                                        @if ($ticket->id === $destination->ticket_id)
                                            selected
                                        @endif
                                    >
                                        {{ $ticket->price }} - {{ $ticket->info }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ticket_id')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('name') has-error @enderror">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Input Destination Name"
                                value="{{ $destination->name ?? old('name') }}">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('country') has-error @enderror">
                            <label for="">Country</label>
                            <input type="text" name="country" class="form-control" placeholder="Input Destination Country"
                                value="{{ $destination->country ?? old('country') }}">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('location') has-error @enderror">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Input Destination Location"
                                value="{{ $destination->location ?? old('location') }}">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('description') has-error @enderror">
                            <label for="">Description</label>
                            <textarea name="description" id="" rows="3" class="form-control" placeholder="Tuliskan deskripsi buku">{{ $destination->description ?? old('description') }}</textarea>
                            @error('description')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('photo') has-error @enderror">
                            <h4 class="card-title">Photo</h4>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ Storage::url($destination->photo) }}" alt="...">
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