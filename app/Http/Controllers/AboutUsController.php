<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function mainAboutUs() {
        return view('screens.aboutus');
    }
}
