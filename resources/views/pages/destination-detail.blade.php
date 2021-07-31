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
                    <h1 class="header col s12">{{ $destination->name }}</h1>
                    {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
                    <a href="#" class="breadcrumb_ white-text">Home</a>
                    <span class="breadcrumb_ text-main-color-3 font-bold"> <i class="material-icons"
                            style="position: relative;top: .25em;">chevron_right</i> <a href="#"
                            class="white-text">Destination</a> <i class="material-icons"
                            style="position: relative;top: .25em;">chevron_right</i>{{ $destination->name }}</span>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="{{ url('') }}/assets/img/bg_dummy.svg" alt="Unsplashed background img 3">
        </div>
    </div>
</div>

<div id="detail_destination">
    <div class="row" style="margin-bottom: 0;">
        <div class="container">
            <div class="col s12" style="padding: 0;">
                <div class="row" style="margin-bottom: 0;padding: 2em 0;">
                    <div class="col s12 m7 l9" style="padding: 0;">
                        <h3 class="font-bold text-main-color-3" style="margin: 0;">{{ $destination->name }}</h3>
                        <p class="d-flex" style="align-items: center;margin-top: .75em;">
                            <i class="material-icons text-main-color-2">place</i>
                            <span class="address_destination text-main-color-2">
                                {{ $destination->country }}, {{ $destination->location }}
                            </span>
                        </p>
                    </div>
                    <div class="col s12 m5 l3" style="padding: 0;margin-bottom: 1em;">
                        <a href="#package_destination" class="btn-glitche waves-effect waves-light upper"><i
                                class="material-icons" style="margin-right: .5em;">info</i> Package Destination</a>
                    </div>
                    <div class="col s12" style="padding: 0;">
                        <p class="desc_destination text-main-color-3" style="margin: 0;">
                            {{ $destination->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 main-color-1" id="package_destination" style="padding: 0;">
            <div class="container">
                <div class="row" style="margin-bottom: 0;">
                    <div class="col s12 package_dest" style="padding: 0;margin: 1em 0;">
                        <h5 class="center-align font-bold white-text">Package Destination</h5>
                    </div>
                    <div class="col s12 m6 l6 d-flex justify-center" style="margin: 1em 0;">
                        <i class="material-icons large white-text" style="margin-right: .25em;">business_center</i>
                        <span class="white-text align-self-center">
                            <span>Price Ticket</span>
                            <h5 class="font-bold" style="margin: 0;">{{ \App\Utilities\Helpers::formatCurrency($destination->ticket->price, 'Rp.') }}</h5>
                        </span>
                    </div>
                    <div class="col s12 m6 l6 d-flex justify-center" style="margin: 1em 0;">
                        <i class="material-icons large white-text" style="margin-right: .25em;">shopping_bag</i>
                        <span class="white-text align-self-center">
                            <span>Include for every ticket</span>
                            <h5 class="font-bold" style="margin: 0;">{{ $destination->ticket->info }}</h5>
                        </span>
                    </div>
                    <div class="col s12" style="margin: 2em 0;">
                        <a data-target="buyticket-modal"
                            class="modal-trigger btn-glitche waves-effect waves-light buy_pack">Buy Ticket</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col s12" style="padding: 0 0 2em 0;margin: 1em 0;">
                <h4 class="text-main-color-3 font-bold center-align" style="margin: 1em 0 1.5em 0">Testimonial</h4>
                <div class="carousel-wrap">
                    <div class="owl-carousel testi_destination">
                        <div class="item">
                            <div class="card" id="quotes">
                                <div class="card-content" style="padding-bottom: 2em;">
                                    <div class="row" style="margin-bottom: 0;">
                                        <div class="col s2 d-flex justify-center" style="flex-direction: column;">
                                            <div class="circle-img align-self-center">
                                                <img src="{{ url('') }}/assets/img/avatar.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col s10">
                                            <span class="blue-grey-text text-darken-3 quote">
                                                “Glitce provide a high level of service and show great flexibility when
                                                it comes to changing travel plans. They also try to find cost savings
                                                for their clients. Thank you so much!”
                                            </span>
                                        </div>
                                        <div class="col s12" style="margin-top: 1em">
                                            <div class="row" style="margin-bottom: 0;">
                                                <span class="col s6 font-bold blue-grey-text text-darken-3">
                                                    Muhamad Fajri
                                                </span>
                                                <span class="col s6 blue-grey-text text-darken-2 right-align">
                                                    April 23rd, 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="quotes">
                                <div class="card-content" style="padding-bottom: 2em;">
                                    <div class="row" style="margin-bottom: 0;">
                                        <div class="col s2 d-flex justify-center" style="flex-direction: column;">
                                            <div class="circle-img align-self-center">
                                                <img src="{{ url('') }}/assets/img/avatar.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col s10">
                                            <span class="blue-grey-text text-darken-3 quote">
                                                “Glitce provide a high level of service and show great flexibility when
                                                it comes to changing travel plans. They also try to find cost savings
                                                for their clients. Thank you so much!”
                                            </span>
                                        </div>
                                        <div class="col s12" style="margin-top: 1em">
                                            <div class="row" style="margin-bottom: 0;">
                                                <span class="col s6 font-bold blue-grey-text text-darken-3">
                                                    Muhamad Fajri
                                                </span>
                                                <span class="col s6 blue-grey-text text-darken-2 right-align">
                                                    April 23rd, 2021
                                                </span>
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

<div id="buyticket-modal" class="modal custom-big modal-fixed-footer modal-fixed-header modal-circle">
    <div class="modal-header main-color-3">
        <span class="modal-title white-text font-bold"><i class="material-icons">confirmation_number</i> Buy
            Ticket</span>
        <a class="modal-close waves-effect waves-light btn-flat"><i class="material-icons white-text">close</i></a>
    </div>
    <form id="buyticket-form" enctype="multipart/form-data" novalidate="novalidate">
        <div class="modal-content" style="padding-top: 0;">
            <div class="row no-margin">
                <div class="col s12">
                    <div class="card main-color-3">
                        <div class="card-content blue-grey-text text-darken-4" style="padding: .5em 1.5em;">
                            <span class="card-title white-text">
                                Destination Package
                            </span>
                            <p class="font-bold white-text" style="margin: 0;">
                                <span>{{ $destination->name }}</span> -
                                <span>{{ \App\Utilities\Helpers::formatCurrency($destination->ticket->price, 'Rp.') }}</span> -
                                <span>{{ $destination->ticket->info }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card white">
                        <div class="card-content blue-grey-text text-darken-4">
                            <span class="card-title" style="margin-bottom: 1em">
                                Your Identity
                            </span>
                            <div class="row no-margin no-padding">
                                <div class="input-field col s12" style="margin: 0 0 1em 0;">
                                    <i class="material-icons prefix">person</i>
                                    <input id="namebuy-ticket" name="namebuy-ticket" type="text" class="validate"
                                        required>
                                    <label for="namebuy-ticket">Full Name</label>
                                </div>
                                <div class="input-field col s12" style="margin: 0 0 1em 0;">
                                    <i class="material-icons prefix">admin_panel_settings</i>
                                    <input id="identitybuy-ticket" name="identitybuy-ticket" type="text"
                                        class="validate" required>
                                    <label for="identitybuy-ticket">Identity Number</label>
                                </div>
                                <div class="input-field col s12 no-margin">
                                    <i class="material-icons prefix">email</i>
                                    <input id="emailbuy-ticket" name="emailbuy-ticket" type="email" class="validate"
                                        required>
                                    <label for="emailbuy-ticket">Email</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card white">
                        <div class="card-content blue-grey-text text-darken-4">
                            <span class="card-title" style="margin-bottom: 1em">
                                Your ID Card
                            </span>
                            <div class="row no-margin no-padding">
                                <div class="col s12">
                                    <img src="{{ url('') }}/assets/img/no_image.jpg" alt="preview_thumbnail" class="responsive-img"
                                        id="imageprevBuyTicket">
                                </div>
                                <div class="file-field input-field col s12">
                                    <div class="waves-effect waves-light btn z-depth-custom orange darken-1">
                                        <span>ID CARD</span>
                                        <input type="file" name="buy-ticket" accept="image/png,image/svg+xml"
                                            id="buy-ticket"
                                            onchange="previewImage('#buy-ticket', '#imageprevBuy-ticket')">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="pathBuy-ticket"
                                            id="pathBuy-ticket" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer" style="padding: 0 2em;">
            <button id="btnBuyTicket" type="submit" class="waves-effect waves-light btn z-depth-0"
                style="width: 100%;">Buy Now</button>
        </div>
    </form>
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