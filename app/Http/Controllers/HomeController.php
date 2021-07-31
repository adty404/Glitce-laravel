<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){

        // $destination = Destination::with('ticket');

        return view('pages.index', [
            'destination' => Destination::with('ticket')->get()
        ]);
    }
}
