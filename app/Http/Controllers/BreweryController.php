<?php

namespace App\Http\Controllers;

use App\Models\Beer;
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
        $beers = Beer::all();
        return view('brewery.show', compact('brewery', 'beers'));
    }

    public function beers(Request $request , Brewery $brewery) {

        $brewery->beers()->attach($request->beer);

        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function edit(Brewery $brewery)
    {
       return view('brewery.edit', compact('brewery'));
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
        $brewery->name= $request->name;
        $brewery->description= $request->description;
        $brewery->address= $request->address;                           // qui stiamo rifacendo l'assegnazione
        $brewery->email= $request->email;

        if ($request->img) {
            $brewery->img = $request->file('img')->store('public/img');
        }
        $brewery->save();

        return redirect(route('brewery.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brewery $brewery)
    {
        foreach($brewery->beers as $beer) {
            $brewery->beers()->detach($beer->id);        //se non avessi aggiunto queste righe di codice, ci sarebbe stata una violazione del vincolo
        }                                                //di integrità referenziale, perciò bisogna fare il detach
        $brewery->delete();
        return redirect(route('brewery.index'));
    }
}
