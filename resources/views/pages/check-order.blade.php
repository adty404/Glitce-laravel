@extends('layouts.template')

@section('title')
Global Visit Choice Web
@endsection

@section('content')
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
            <form class="row" style="margin: 0;">
                <div class="container">
                    <h5 class="center-align text-main-color-3 font-bold" style="margin-bottom: 0em;">Check Order Ticket
                    </h5>
                    <div class="d-flex" style="align-items: center;">
                        <div class="input-field col s8 m8 l9" style="padding: 0;">
                            <input id="search" type="search" class="primary search-field"
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
                        <h5 class="font-bold text-main-color-2 center-align head_status">Order Status</h5>
                        <div class="card-panel">
                            <div class="row" style="margin-bottom: 0;">
                                <div class="col s12 main-color-3" style="padding: 0 1em;">
                                    <div class="row" style="margin-bottom: 0;padding: 1em 2em;">
                                        <div class="col s12 m6 l6 d-flex justify-center ticket_date">
                                            <i class="material-icons white-text">assignment</i>
                                            <span class="white-text align-self-center">
                                                <span>Order Number</span>
                                                <h5 class="font-bold" style="margin: 0;">ABCDE1234</h5>
                                            </span>
                                        </div>
                                        <div class="col s12 m6 l6 d-flex justify-center ticket_date">
                                            <i class="material-icons white-text">date_range</i>
                                            <span class="white-text align-self-center">
                                                <span>Date Order</span>
                                                <h5 class="font-bold" style="margin: 0;">Monday, 1 May 2021</h5>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 contain_status">
                                    <div id="log_status" class="row" style="margin-bottom: 0;padding-bottom: 2em;">
                                        <div class="card-panel col s12 z-depth-0 main-color-4">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="./assets/img/check_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">Ticket
                                                        Has been Order.</h5>
                                                    <button data-target="uploadreceipt-modal"
                                                        class="modal-trigger btn waves-effect waves-light z-depth-0">Upload
                                                        Receipt</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 grey lighten-1">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="./assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">Review
                                                        Receipt Order.</h5>
                                                    <p class="white-text">Receipt will be review by admin.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-panel col s12 z-depth-0 grey lighten-1">
                                            <div class="row d-flex align-item-center"
                                                style="margin-bottom: 0;padding: 0 2em;">
                                                <div class="col s3 m2 l1 d-flex justify-center">
                                                    <img src="./assets/img/wait_status.svg" alt="check_status">
                                                </div>
                                                <div class="col s9 m10 l11">
                                                    <h5 class="white-text font-bold" style="margin: 0 0 .35em 0;">Your
                                                        Order has been Accept.</h5>
                                                    <button
                                                        class="btn disabled waves-effect waves-light z-depth-0">Download
                                                        E-Ticket</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection