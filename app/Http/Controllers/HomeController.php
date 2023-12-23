<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Show()
    {
        $info1 = Footer::pluck('About_we')->first();
        $info2 = Footer::get();
        $info3 = Footer::pluck('Address')->first();

        return view('front.index', compact('info1','info2','info3'));
    }
}
