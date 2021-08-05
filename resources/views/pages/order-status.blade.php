@extends('layouts.template')

@section('title')
Global Visit Choice Web
@endsection

@push('addon-style')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endpush
@section('content')
<div id="header-page">
    <div class="parallax-container valign-wrapper">
        <div class="filter_"></div>
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h1 class="header col s12">Order Status</h1>
                    <a href="#" class="breadcrumb_ white-text">Home</a>
                    <span class="breadcrumb_ text-main-color-3 font-bold"> <i class="material-icons"
                            style="position: relative;top: .25em;">chevron_right</i> Order Status</span>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="/assets/img/bg_dummy.svg" alt="Unsplashed background img 3">
        </div>
    </div>
</div>

<div id="check_order">
    <div class="row" style="margin-bottom: 0;">
        <div class="container">
            <div class="col s12" style="padding: 0;">
                <div class="row" style="margin-bottom: 0;padding: 2em 0;">
                    <div class="notif hide">
                        <div class="col s12 d-flex justify-center" style="margin-bottom: 3em;">
                            <img src="/assets/img/check.svg" alt="check" class="check_img">
                        </div>
                        <h5 class="center-align font-bold text-main-color-3">You Can Check Your Ticket Valid Here</h5>
                    </div>
                    <div class="valid">
                        <h5 class="font-bold text-main-color-2 center-align head_status">Order Status</h5>
                        <div class="card-panel">
                            <div class="row" style="margin-bottom: 0;">
                                <div class="col s12 main-color-3" style="padding: 0 1em;">
                                    <div class="row" style="margin-bottom: 0;padding: 1em 2em;">
                                        <div class="col s12 m6 l6 d-flex justify-center ticket_date">
                                            <i class="material-icons white-text">assignment</i>
                                            <span class="white-text align-self-center">
                                                <span>Order Number</span>
                                                <h5 class="font-bold" style="margin: 0;">{{ $order->order_number }}</h5>
                                            </span>
                                        </div>
                                        <div class="col s12 m6 l6 d-flex justify-center ticket_date">
                                            <i class="material-icons white-text">date_range</i>
                                            <span class="white-text align-self-center">
                                                <span>Date Order</span>
                                                <h5 class="font-bold" style="margin: 0;">
                                                    {{ \Carbon\Carbon::parse($order->created_at)->format('d, M Y H:i') }}
                                                </h5>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                {{-- Conditions --}}

                                @if ($order->status_id == '1')
                                <div class="col s12 contain_status">
                                    <div id="log_status" class="row" style="margin-bottom: 0;padding-bottom: 2em;">
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">Order
                                                        Placed</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="order-placed">Payment</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Slip</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="payment-slip-uncheck">Upload Payment
                                                        Slip</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 grey lighten-1">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Verifying Payment</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 grey lighten-1">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Verified</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @elseif ($order->status_id == '2')
                                <div class="col s12 contain_status">
                                    <div id="log_status" class="row" style="margin-bottom: 0;padding-bottom: 2em;">
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">Order
                                                        Placed</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="order-placed">Payment</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Slip</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="payment-slip">Payment Slip</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Verifying Payment</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button"
                                                        data-target="verifying-payment-waiting">Waiting</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 grey lighten-1">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Verified</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @elseif ($order->status_id == '3')
                                <div class="col s12 contain_status">
                                    <div id="log_status" class="row" style="margin-bottom: 0;padding-bottom: 2em;">
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">Order
                                                        Placed</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="order-placed">Payment</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Slip</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="payment-slip">Payment Slip</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Verifying Payment</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="verifying-payment">Verified</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Verified</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="payment-verified">Invoice</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @elseif ($order->status_id == '4')
                                <div class="col s12 contain_status">
                                    <div id="log_status" class="row" style="margin-bottom: 0;padding-bottom: 2em;">
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">Order
                                                        Placed</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="order-placed">Payment</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Slip</h5>
                                                    <button type="button"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0"
                                                        name="button" data-target="payment-slip-not-verified">Not
                                                        Verified</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 grey lighten-1">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Verifying Payment</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 grey lighten-1">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="/assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">
                                                        Payment Verified</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Modal Payment Slip --}}

{{-- Placed Order 1 --}}
<div id="order-placed" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="fa fa-shopping-basket"></i> Order Placed </span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div class="row no-margin">
            <div class="col s12">
                <div class="card main-color-3">
                </div>
            </div>
            <div class="col s12">
                <div class="card white">
                    <div class="card-content blue-grey-text text-darken-4">
                        <span class="card-title" style="margin-bottom: 1em">
                            Order Placed
                        </span>
                        <div class="row no-margin no-padding">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $order->name }}</td>
                                    </tr>

                                    <tr>
                                        <th>ID Number (KTP)</th>
                                        <td>{{ $order->id_card }}</td>
                                    </tr>

                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $order->email }}</td>
                                    </tr>

                                    <tr>
                                        <th>Phone Number</th>
                                        <td>{{ $order->phone_number }}</td>
                                    </tr>

                                    <tr>
                                        <th>Ticket Price</th>
                                        <td>{{ \App\Utilities\Helpers::formatCurrency($order->destination->ticket->price, 'Rp.') }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Ticket Info</th>
                                        <td>{{ $order->destination->ticket->info }}</td>
                                    </tr>

                                </tbody>
                            </table>

                            @if ($order->status_id == '1' || $order->status_id == '4')
                            <p>*Please complete the payment. <br> Transfer
                                <span style="color:red;">
                                    {{ \App\Utilities\Helpers::formatCurrency($order->destination->ticket->price, 'Rp.') }}
                                </span> to
                                <span style="color:red;">
                                    {{ $order->payment->number }}
                                    ({{ $order->payment->payment }})
                                </span> and upload the payment slip to
                                <span style="color:red;">Payment Slip</span> status. Thank You!
                            </p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Payment Slip 1 --}}
<div id="payment-slip" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="fa fa-money-check"></i> Payment Slip </span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div class="row no-margin">
            <div class="col s12">
                <div class="card main-color-3">
                </div>
            </div>
            <div class="col s12">
                <div class="card white">
                    <div class="card-content blue-grey-text text-darken-4">
                        <span class="card-title" style="margin-bottom: 1em">
                            Your Payment Slip
                        </span>
                        <div class="row no-margin no-padding">
                            <center>
                                @if ($order->status_id == '2' || $order->status_id == '3')
                                    <img src="{{ Storage::url($order->payment_slip->image) }}" alt="Payment Slip"
                                    width="200" height="200"> 
                                @endif
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Payment Slip 2 --}}
<div id="payment-slip-not-verified" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="fa fa-money-check"></i> Payment Slip </span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div class="row no-margin">
            <div class="col s12">
                <div class="card main-color-3">
                </div>
            </div>
            <div class="col s12">
                <div class="card white">
                    <div class="card-content blue-grey-text text-darken-4">
                        <span class="card-title" style="margin-bottom: 1em">
                            Payment Slip
                        </span>
                        <div class="row no-margin no-padding">
                            <center>
                                <h4 class="modal-title" style="color: red;"> Your Payment Slip is Not Verified</h4>
                            </center>

                            <h6>*Click reset button to re-upload your payment slip.</h6>

                            @if ($order->status_id == '4')
                                <h6>Reason : {{ $order->payment_slip->reason }} </h6>
                            @endif
                            
                            <br>
                            <h6>*Click reset button to re-upload your payment slip.</h6>
                        </div>
                        <form class="form-group" action="{{ route('order.status.reset') }}" method="post">
                            @csrf
                            <input type="hidden" name="order_number" value="{{ $order->order_number }}">
                            <input type="hidden" name="payment_slip_id" value="{{ $order->payment_slip_id }}">

                            <div class="modal-footer">
                                <div class="modal-footer" style="padding: 0 2em;">
                                    <button id="" type="submit" class="waves-effect waves-light btn z-depth-0"
                                        style="width: 100%;">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Payment Slip 3 --}}
<div id="payment-slip-uncheck" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="fa fa-money-check"></i> Payment Slip </span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div class="row no-margin">
            <div class="col s12">
                <div class="card main-color-3">
                </div>
            </div>
            <div class="col s12">
                <div class="card white">
                    <div class="card-content blue-grey-text text-darken-4">
                        <span class="card-title" style="margin-bottom: 1em">
                            Payment Slip
                        </span>
                        <div class="row">
                            <center>
                                <form class="" action="{{ route('order.status.payment-slip') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="modal-title" style="color: red;">Upload Your Payment Slip</h4>

                                    <input class="" type="hidden" name="order_number"
                                        value="{{ $order->order_number }}">
                                    <input class="" type="file" name="image"
                                        style="margin-bottom:100px; margin-top:50px;">

                                    <div class="modal-footer" style="padding: 0 2em;">
                                        <button id="" type="submit" class="waves-effect waves-light btn z-depth-0"
                                            style="width: 100%;">Upload</button>
                                    </div>
                                </form>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Verifying Payment 1 --}}
<div id="verifying-payment" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="fa fa-money-check"></i> Verifying Payment </span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div class="row no-margin">
            <div class="col s12">
                <div class="card main-color-3">
                </div>
            </div>
            <div class="col s12">
                <div class="card white">
                    <div class="card-content blue-grey-text text-darken-4">
                        <span class="card-title" style="margin-bottom: 1em">
                            Verifying Payment
                        </span>
                        <div class="row no-margin no-padding">
                            <center>
                                <h5 class="modal-title">Admin has verified your payment slip</h5>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Verifying Payment 2 --}}
<div id="verifying-payment-waiting" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="fa fa-money-check"></i> Verifying Payment </span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div class="row no-margin">
            <div class="col s12">
                <div class="card main-color-3">
                </div>
            </div>
            <div class="col s12">
                <div class="card white">
                    <div class="card-content blue-grey-text text-darken-4">
                        <span class="card-title" style="margin-bottom: 1em">
                            Waiting to be verified
                        </span>
                        <div class="row no-margin no-padding">
                            <center>
                                <h5>Your payment slip is being verified by admin.</h5>
                                <h5>Please check your status periodically.</h5>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Payment Verified 1 --}}
<div id="payment-verified" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="fa fa-money-check"></i> Payment Verified </span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div class="row no-margin">
            <div class="col s12">
                <div class="card main-color-3">
                </div>
            </div>
            <div class="col s12">
                <div class="card white">
                    <div class="card-content blue-grey-text text-darken-4">
                        <span class="card-title" style="margin-bottom: 1em">
                            Payment Verified
                        </span>
                        <div class="row no-margin no-padding">
                            <center style="margin-bottom:50px;">
                                <h5>Your payment slip is verified</h5>
                                <h6>Ticket has sent to your registered email and phone number.</h6>
                            </center>
                            <center>
                                <a href="">
                                  <button class="btn btn-primary" type="button" name="INVOICE">INVOICE</button>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection