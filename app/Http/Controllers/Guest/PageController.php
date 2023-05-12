<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        echo date('d-m-Y');

        //$houses = House::all();
        //return view('home', compact('houses'));
    }
}
