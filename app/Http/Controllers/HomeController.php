<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Show()
    {
        $info_footer = Footer::all();
        // $info2 = Footer::get();
        // $info3 = Footer::pluck('Address')->first();

        return view('front.index', compact('info_footer'));
    }
}
