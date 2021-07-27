<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){
        return view('pages.destination');
    }

    public function detail(){
        return view('pages.destination-detail');
    }
}
