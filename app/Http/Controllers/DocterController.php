<?php

namespace App\Http\Controllers;

use App\Models\Docter;
use Illuminate\Http\Request;
use App\Models\Footer;
class DocterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info_footer = Footer::all();
       return view('front.indexdocters',compact('info_footer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Docter $docter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docter $docter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docter $docter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docter $docter)
    {
        //
    }
}
