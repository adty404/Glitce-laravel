@extends('layouts.admin')

@section('title')
Edit Payment
@endsection

@section('page')
Edit Payment
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Edit Payment</h4>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('payment.update', $payment) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group @error('payment') has-error @enderror">
                            <label for="">Payment</label>
                            <input type="text" name="payment" class="form-control" placeholder="Input Payment" value="{{ $payment->payment ?? old('payment') }}">
                            @error('payment')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="form-group @error('number') has-error @enderror">
                            <label for="">Number</label>
                            <input type="text" name="number" class="form-control" placeholder="Input Payment Number" value="{{ $payment->number ?? old('number') }}">
                            @error('number')
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