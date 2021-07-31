@extends('layouts.admin')

@section('title')
Create Status
@endsection

@section('page')
Create Status
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Create Status</h4>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('status.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group @error('status') has-error @enderror">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control" placeholder="Input Status" value="{{ old('status') }}">
                            @error('status')
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