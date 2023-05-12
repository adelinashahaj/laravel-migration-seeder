<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        echo date('d-m-Y');

        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
