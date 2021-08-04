<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Payment;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){
        return view('pages.destination', [
            'destination' => Destination::with('ticket')->get()
        ]);
    }

    // public function detail(){
    //     return view('pages.destination-detail');
    // }

    public function detail($slug){

        return view('pages.destination-detail', [
            'destination' => Destination::with('ticket')->where('slug', $slug)->first(),
            'payments' => Payment::all()
        ]);
    }
}
