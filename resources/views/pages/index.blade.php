@extends('layouts.template')

@section('title')
Global Visit Choice Web
@endsection

@section('content')
<div id="header-page" class="landing">
    <div class="section-img">
        <img src="/assets/img/bg_first.svg" alt="bg_glitche">
    </div>
    <div class="section">
        <div class="container center-align">
            <h1>GLOBAL</h1>
            <h3>VISIT CHOICE</h3>
            <p class="center-align">Booking tickets for your abroad destinations easy way through Glitce.<br>
                Complete and accurate informations on each holiday destinations.</p>
            <a href="{{ route('destination') }}" class="waves-effect waves-light btn-glitche">Our Destination</a>
        </div>
    </div>
</div>

<div id="intro">
    <div class="row main-color" style="margin-bottom: 0;">
        <div class="container">
            <div class="col s12" style="padding: 1em 0;">
                <h4 class="text-main-color-2 center-align">Welcome</h4>
                <div class="row" style="margin-bottom: 0;padding: 2em 0;">
                    <div class="col s12 m12 l6 d-flex justify-center" style="padding: 0 2em;">
                        <img src="/assets/img/bg_1.svg" alt="bg_1" class="responsive-img">
                    </div>
                    <div class="col s12 m12 l6">
                        <h2 class="text-main-color-2">GLITCE</h2>
                        <p class="text-main-color-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Architecto nostrum omnis, mollitia cum odio ex assumenda. Quo, quaerat doloremque
                            impedit eius ipsa rem in itaque. Optio ipsum dolor praesentium! Perferendis?</p>
                        <a href="{{ route('about') }}" class="btn-glitche waves-effect waves-light">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="destination">
    <div class="row" style="margin-bottom: 0;position: relative;overflow: hidden;">
        <img src="/assets/img/decor.svg" alt="decorate" class="decorate">
        <div class="col s12 trans-color" style="padding: 1.5em 0;"></div>
        <div class="container">
            <div class="col s12" style="padding: 0;margin-bottom: 1em;">
                <h4 class="font-bold text-main-color-3">Where <span class="text-main-color-1">Place</span> <br>
                    do You Want to Go?</h4>
                <p class="text-main-color-3">View more to see another awesome destination!</p>
            </div>
            <div class="row" style="margin-bottom: 0;">
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img" src="/assets/img/bg_dummy.svg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <a href="#" class="font-bold text-main-color-1">Mount
                                    Fuji</a>
                                <i class="material-icons right">more_vert</i>
                            </span>
                            <p>
                                <span class="font-bold text-main-color-2">Japan, Tokyo</span><br>
                                <span class="truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Quam veniam maiores aliquam dolorem corrupti illo dignissimos excepturi
                                    molestiae quibusdam atque corporis alias ipsam necessitatibus minima obcaecati
                                    dolor quae, eveniet rem!</span>
                            </p>
                            <a href="#" class="btn-glitche waves-effect waves-light">Buy
                                Ticket</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">
                                <a href="#" class="font-bold text-main-color-1">Mount
                                    Fuji</a>
                                <i class="material-icons right">close</i>
                            </span>
                            <p>
                                <span class="font-bold text-main-color-2">Japan, Tokyo</span><br>
                                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam veniam maiores
                                    aliquam dolorem corrupti illo dignissimos excepturi molestiae quibusdam atque
                                    corporis alias ipsam necessitatibus minima obcaecati dolor quae, eveniet
                                    rem!</span>
                            </p>
                            <table class="striped">
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>Rp 15.000.000 x Ticket</td>
                                </tr>
                                <tr>
                                    <th>Include</th>
                                    <td>:</td>
                                    <td>Backpack + T-Shirt</td>
                                </tr>
                            </table>
                            <a href="#" class="btn-glitche waves-effect waves-light">Buy
                                Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img" src="/assets/img/bg_dummy.svg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <a href="#" class="font-bold text-main-color-1">Mount
                                    Fuji</a>
                                <i class="material-icons right">more_vert</i>
                            </span>
                            <p>
                                <span class="font-bold text-main-color-2">Japan, Tokyo</span><br>
                                <span class="truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Quam veniam maiores aliquam dolorem corrupti illo dignissimos excepturi
                                    molestiae quibusdam atque corporis alias ipsam necessitatibus minima obcaecati
                                    dolor quae, eveniet rem!</span>
                            </p>
                            <a href="#" class="btn-glitche waves-effect waves-light">Buy
                                Ticket</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">
                                <a href="#" class="font-bold text-main-color-1">Mount
                                    Fuji</a>
                                <i class="material-icons right">close</i>
                            </span>
                            <p>
                                <span class="font-bold text-main-color-2">Japan, Tokyo</span><br>
                                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam veniam maiores
                                    aliquam dolorem corrupti illo dignissimos excepturi molestiae quibusdam atque
                                    corporis alias ipsam necessitatibus minima obcaecati dolor quae, eveniet
                                    rem!</span>
                            </p>
                            <table class="striped">
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>Rp 15.000.000 x Ticket</td>
                                </tr>
                                <tr>
                                    <th>Include</th>
                                    <td>:</td>
                                    <td>Backpack + T-Shirt</td>
                                </tr>
                            </table>
                            <a href="#" class="btn-glitche waves-effect waves-light">Buy
                                Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img" src="/assets/img/bg_dummy.svg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <a href="#" class="font-bold text-main-color-1">Mount
                                    Fuji</a>
                                <i class="material-icons right">more_vert</i>
                            </span>
                            <p>
                                <span class="font-bold text-main-color-2">Japan, Tokyo</span><br>
                                <span class="truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Quam veniam maiores aliquam dolorem corrupti illo dignissimos excepturi
                                    molestiae quibusdam atque corporis alias ipsam necessitatibus minima obcaecati
                                    dolor quae, eveniet rem!</span>
                            </p>
                            <a href="#" class="btn-glitche waves-effect waves-light">Buy
                                Ticket</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">
                                <a href="#" class="font-bold text-main-color-1">Mount
                                    Fuji</a>
                                <i class="material-icons right">close</i>
                            </span>
                            <p>
                                <span class="font-bold text-main-color-2">Japan, Tokyo</span><br>
                                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam veniam maiores
                                    aliquam dolorem corrupti illo dignissimos excepturi molestiae quibusdam atque
                                    corporis alias ipsam necessitatibus minima obcaecati dolor quae, eveniet
                                    rem!</span>
                            </p>
                            <table class="striped">
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>Rp 15.000.000 x Ticket</td>
                                </tr>
                                <tr>
                                    <th>Include</th>
                                    <td>:</td>
                                    <td>Backpack + T-Shirt</td>
                                </tr>
                            </table>
                            <a href="#" class="btn-glitche waves-effect waves-light">Buy
                                Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 d-flex justify-center" style="margin: 1em 0 1.5em 0;">
                    <a href="{{ route('destination') }}" class="viewmore main-color-2 btn-glitche waves-effect waves-light">View
                        More Destination</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimoni">
    <div class="row" style="margin-bottom: 0;position: relative;overflow: hidden;">
        <img src="/assets/img/decor.svg" alt="decorate" class="decorate">
        <div class="container">
            <div class="col s12" style="padding: 0;">
                <h4 class="font-bold text-main-color-3 center-align">What <span
                        class="text-main-color-1">Travellers</span> Say About Us</h4>
                <p class="center-align text-main-color-3">See our more testimonials</p>
            </div>
            <div class="row" style="margin-bottom: 0;padding: 2em 0 0 0;">
                <div class="col s12 m12 l6 hide-on-med-and-down" style="padding: 0 2em;">
                    <img src="/assets/img/bg_testi.svg" alt="bg_1" class="responsive-img">
                </div>
                <div class="col s12 m12 l6">
                    <div class="row" style="margin-bottom: 0;">
                        <div class="col s12">
                            <div class="card" id="quotes">
                                <div class="card-content" style="padding-bottom: 0;">
                                    <div class="row" style="margin-bottom: 0;">
                                        <div class="col s2 d-flex justify-center" style="flex-direction: column;">
                                            <div class="circle-img align-self-center">
                                                <img src="/assets/img/avatar.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col s10">
                                            <span class="blue-grey-text text-darken-3 quote">
                                                “Glitce provide a high level of service and show great flexibility
                                                when it comes to changing travel plans. They also try to find cost
                                                savings for their clients. Thank you so much!”
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
                                <a href="#" class="btn-quote font-bold">
                                    <span>Mount Fuji</span>
                                    <span class="right d-flex justify-center">See <span
                                            class="material-icons small">chevron_right</span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="card" id="quotes">
                                <div class="card-content" style="padding-bottom: 0;">
                                    <div class="row" style="margin-bottom: 0;">
                                        <div class="col s2 d-flex justify-center" style="flex-direction: column;">
                                            <div class="circle-img align-self-center">
                                                <img src="/assets/img/avatar.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col s10">
                                            <span class="blue-grey-text text-darken-3 quote">
                                                “Glitce provide a high level of service and show great flexibility
                                                when it comes to changing travel plans. They also try to find cost
                                                savings for their clients. Thank you so much!”
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
                                <a href="#" class="btn-quote font-bold">
                                    <span>Mount Fuji</span>
                                    <span class="right d-flex justify-center">See <span
                                            class="material-icons small">chevron_right</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 d-flex justify-center" style="margin: 1em 0 3em 0;">
                <a href="{{ route('testimonial') }}" class="viewmore main-color-2 btn-glitche waves-effect waves-light">See
                    All Testimonial</a>
            </div>
        </div>
    </div>
</div>
@endsection