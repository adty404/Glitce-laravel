@extends('layouts.template')

@section('title')
Global Visit Choice Web
@endsection

@section('content')
@include('sweetalert::alert')
<div id="header-page">
    <div class="parallax-container valign-wrapper">
        <div class="filter_"></div>
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h1 class="header col s12">Check Order</h1>
                    <p>Check Your Ticket Before Go</p>
                    <a href="#" class="breadcrumb_ white-text">Home</a>
                    <span class="breadcrumb_ text-main-color-3 font-bold"> <i class="material-icons"
                            style="position: relative;top: .25em;">chevron_right</i> Check Order</span>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="./assets/img/bg_dummy.svg" alt="Unsplashed background img 3">
        </div>
    </div>
</div>

<div id="check_order">
    <div class="row" style="margin-bottom: 0;">
        <div class="col s12 main-color-2" style="padding: 0;">
            <form class="row" style="margin: 0;" action="{{ route('order.status') }}" method="post">
                @csrf
                <div class="container">
                    <h5 class="center-align text-main-color-3 font-bold" style="margin-bottom: 0em;">Check Order Ticket
                    </h5>
                    <div class="d-flex" style="align-items: center;">
                        <div class="input-field col s8 m8 l9" style="padding: 0;">
                            <input id="search" type="text" name="order_number" class="primary search-field"
                                placeholder="Insert your unique code here" required>
                        </div>
                        <div class="col s4 m4 l3" style="padding: 0;">
                            <button type="submit" class="btn-search waves-effect waves-light">
                                Check Order
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="col s12" style="padding: 0;">
                <div class="row" style="margin-bottom: 0;padding: 2em 0;">
                    <div class="notif hide">
                        <div class="col s12 d-flex justify-center" style="margin-bottom: 3em;">
                            <img src="./assets/img/check.svg" alt="check" class="check_img">
                        </div>
                        <h5 class="center-align font-bold text-main-color-3">You Can Check Your Ticket Valid Here</h5>
                    </div>
                    <div class="valid">
                        <h5 class="font-bold text-main-color-2 center-align head_status">Check Order</h5>
                        <p class="text-main-color-3">Check your order and finish your payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection