<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();
        return view('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(Comics $comics)
    {
        
    }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
