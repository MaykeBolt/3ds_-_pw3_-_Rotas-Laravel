<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FourOFourController extends Controller
{
    public function notfound() {
        return view('screens.FourOFour');
    }
}
