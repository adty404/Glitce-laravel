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
                    <h1 class="header col s12">Testimonials</h1>
                    <p>Read 1.000++ Testimonials from our travellers</p>
                    <a href="#" class="breadcrumb_ white-text">Home</a>
                    <span class="breadcrumb_ text-main-color-3 font-bold"> <i class="material-icons"
                            style="position: relative;top: .25em;">chevron_right</i> Testimonial</span>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="./assets/img/bg_dummy.svg" alt="Unsplashed background img 3">
        </div>
    </div>
</div>

<div id="testimonial_list">
    <div class="row" style="margin-bottom: 0;position: relative;overflow: hidden;">
        <img src="./assets/img/decor.svg" alt="decorate" class="decorate">
        <div class="col s12 main-color-2" style="padding: 0;">
            <form class="row" style="margin: 0;">
                <div class="container d-flex" style="align-items: center;">
                    <div class="input-field col s8 m8 l9" style="padding: 0;">
                        <input id="search" type="search" class="primary search-field"
                            placeholder="Search Unique Testimonial ..." required>
                    </div>
                    <div class="col s4 m4 l3" style="padding: 0;">
                        <button type="submit" class="btn-search waves-effect waves-light">
                            <span class="hide-on-small-only">Search Testimonial</span>
                            <span class="hide-on-med-and-up">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="col s12" style="padding: 0;">
                <div class="row" style="margin-bottom: 0;padding: 2em 0;">
                    <h4 class="center-align text-main-color-2 font-bold">Read What Our Beloved Travellers Say About Us
                    </h4>
                    <div class="col s12" style="margin-bottom: 0;">
                        <div class="row" style="margin-bottom: 0;padding: 1em 2em;">
                            <div class="col s12">
                                <div class="card" id="quotes">
                                    <div class="card-content" style="padding-bottom: 0;">
                                        <div class="row" style="margin-bottom: 0;">
                                            <div class="col s2 m2 l1 d-flex justify-center"
                                                style="flex-direction: column;">
                                                <div class="circle-img align-self-center">
                                                    <img src="./assets/img/avatar.jpg" alt="avatar">
                                                </div>
                                            </div>
                                            <div class="col s10 m10 l11">
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
                                            <div class="col s2 m2 l1 d-flex justify-center"
                                                style="flex-direction: column;">
                                                <div class="circle-img align-self-center">
                                                    <img src="./assets/img/avatar.jpg" alt="avatar">
                                                </div>
                                            </div>
                                            <div class="col s10 m10 l11">
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
                                            <div class="col s2 m2 l1 d-flex justify-center"
                                                style="flex-direction: column;">
                                                <div class="circle-img align-self-center">
                                                    <img src="./assets/img/avatar.jpg" alt="avatar">
                                                </div>
                                            </div>
                                            <div class="col s10 m10 l11">
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
                                            <div class="col s2 m2 l1 d-flex justify-center"
                                                style="flex-direction: column;">
                                                <div class="circle-img align-self-center">
                                                    <img src="./assets/img/avatar.jpg" alt="avatar">
                                                </div>
                                            </div>
                                            <div class="col s10 m10 l11">
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
                    <div class="col s12 d-flex justify-center" style="margin: 1em 0 1.5em 0;">
                        <div class="card-panel" style="padding: 0 1em;border-radius: 1em;">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection