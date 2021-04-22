<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class BreweryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breweries = Brewery::all();                             // dammi l'elenco di tutte le birrerie
        return view('brewery.index', compact('breweries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brewery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $brewery= Brewery::create([
           'name'=>$request->name,
           'description'=>$request->description,
           'address'=>$request->address,
           'email'=>$request->email,
           'img'=>$request->file('img')->store('public/img'),
       ]);

       return redirect(route('brewery.index'))->with('status', 'La tua Birreria è stata inserita con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function show(Brewery $brewery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function edit(Brewery $brewery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brewery $brewery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brewery $brewery)
    {
        //
    }
}
