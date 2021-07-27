<?php

namespace App\Http\Controllers;

use App\Models\Riad;
use Illuminate\Http\Request;

class RiadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return dd("je suis dans le controlleur");
        return view("admin.hotel.Hotels");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Riad  $riad
     * @return \Illuminate\Http\Response
     */
    public function show(Riad $riad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Riad  $riad
     * @return \Illuminate\Http\Response
     */
    public function edit(Riad $riad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Riad  $riad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riad $riad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Riad  $riad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riad $riad)
    {
        //
    }
}
