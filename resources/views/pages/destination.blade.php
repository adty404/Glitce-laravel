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
                    <h1 class="header col s12">Destinations</h1>
                    <p>Choose Your Favorite Destination</p>
                    <a href="#" class="breadcrumb_ white-text">Home</a>
                    <span class="breadcrumb_ text-main-color-3 font-bold"> <i class="material-icons"
                            style="position: relative;top: .25em;">chevron_right</i> Destination</span>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="./assets/img/bg_dummy.svg" alt="Unsplashed background img 3">
        </div>
    </div>
</div>

<div id="destination_list">
    <div class="row" style="margin-bottom: 0;">
        <div class="col s12 main-color-2" style="padding: 0;">
            <form class="row" style="margin: 0;">
                <div class="container d-flex" style="align-items: center;">
                    <div class="input-field col s8 m8 l9" style="padding: 0;">
                        <input id="search" type="search" class="primary search-field"
                            placeholder="Search Your Destination ...." required>
                    </div>
                    <div class="col s4 m4 l3" style="padding: 0;">
                        <button type="submit" class="btn-search waves-effect waves-light">
                            <span class="hide-on-small-only">Search Destination</span>
                            <span class="hide-on-med-and-up">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="col s12" style="padding: 0;">
                <div class="row" style="margin-bottom: 0;padding: 2em 0;">
                    @forelse ($destination as $d)

                    <div class="col s12 m6 l4">
                        <div class="card">

                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator responsive-img" src="{{ Storage::url($d->photo) }}">
                            </div>

                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">
                                    <a href="#" class="font-bold text-main-color-1"> {{ $d->name }} </a>
                                    <i class="material-icons right">more_vert</i>
                                </span>
                                <p>
                                    <span class="font-bold text-main-color-2">{{ $d->country }},
                                        {{ $d->location }}</span><br>
                                    <span class="truncate"> {{ $d->description }} </span>
                                </p>
                                <a href="{{ route('destination-detail', $d->slug) }}" class="btn-glitche waves-effect waves-light">Buy
                                    Ticket</a>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">
                                    <a href="#" class="font-bold text-main-color-1"> {{ $d->name }} </a>
                                    <i class="material-icons right">close</i>
                                </span>
                                <p>
                                    <span class="font-bold text-main-color-2">{{ $d->country }},
                                        {{ $d->location }}</span><br>
                                    <span> {{ $d->description }} </span>
                                </p>
                                <table class="striped">
                                    <tr>
                                        <th>Price</th>
                                        <td>:</td>
                                        <td>{{ \App\Utilities\Helpers::formatCurrency($d->ticket->price, 'Rp.') }} x Ticket</td>
                                    </tr>
                                    <tr>
                                        <th>Include</th>
                                        <td>:</td>
                                        <td>{{ $d->ticket->info }}</td>
                                    </tr>
                                </table>
                                <a href="{{ route('destination-detail', $d->slug) }}" class="btn-glitche waves-effect waves-light">Buy
                                    Ticket</a>
                            </div>
                        </div>
                    </div>

                    @empty

                    No data..

                    @endforelse
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