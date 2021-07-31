<?php

namespace App\Http\Controllers;

use App\Destination;
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
        $destination = Destination::with('ticket')->where('slug', $slug)->first();

        return view('pages.destination-detail', [
            'destination' => $destination
        ]);
    }
}
