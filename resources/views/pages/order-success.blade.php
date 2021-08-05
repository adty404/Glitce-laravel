@extends('layouts.template')

@section('title')
Global Visit Choice Web
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ url('') }}/assets/css/owl.carousel.min.css">
@endpush

@section('content')
<div id="header-page">
    <div class="parallax-container valign-wrapper">
        <div class="filter_"></div>
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h1 class="header col s12">Order Success</h1>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="{{ url('') }}/assets/img/bg_dummy.svg" alt="Unsplashed background img 3">
        </div>
    </div>
</div>

<div id="welcome">
    <div class="row" style="margin-bottom: 0;overflow: hidden;position: relative;">
        <img src="/assets/img/decor.svg" alt="decorate" class="decorate">
        <div class="container">
            <div class="col s12" style="padding: 1em 0;">
                <h4 class="text-main-color-2 center-align">Order Success</h4>
                <div class="row" style="margin-bottom: 0;padding: 1em 0;">
                    <div class="col s12">
                        @include('sweetalert::alert')
                        <h2 class="text-main-color-2 font-bold">#{{ $order_number }}</h2>
                        <p class="text-main-color-3">Order Success, save your <b>Order Number ({{ $order_number }}) </b> to check the status of your order and complete the payment! Go here 
                            <a href="{{ route('order.check') }}" target="_blank" style="color:black; text-decoration: underline;;"> Check Order</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="buyticket-modal" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="material-icons">confirmation_number</i> Buy
            Ticket</span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
</div>
@endsection

@push('addon-script')
<script src="{{ url('') }}/assets/js/lib/owl.carousel.min.js"></script>
<script>
    $('.gallery_destination').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
            items: 1
            },
            700: {
            items: 2
            },
            1000: {
            items: 3
            }
        }
    })

    $('.testi_destination').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
            items: 1
            },
            700: {
            items: 1
            },
            1000: {
            items: 1
            }
        }
    })
</script>
@endpush