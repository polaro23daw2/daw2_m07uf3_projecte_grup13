<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treballador;

class ControladorTreballador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $dades_treballadors = Treballador::all();
        return view('llista2', compact('dades_treballadors'));
    }

    public function index_basic()
    {
        $dades_treballadors = Treballador::all();
        return view('llista-basica', compact('dades_treballadors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouTreballador = $request->validate([
            'nom' => 'required',
            'cognoms' => 'required',
            'nif' => 'required',
            'data_naixement' => 'required',
            'sexe' => 'required',
            'adressa' => 'required',
            'tlf_fixe' => 'required',
            'tlf_mobil' => 'required',
            'email' => 'required',
            'treball_distancia' => 'required',
            'tipus_contracte' => 'required',
            'data_contractacio' => 'required',
            'categoria' => 'required',
            'nom_feina' => 'required',
            'sou' => 'required'
        ]);
        $treballador = Treballador::create($nouTreballador);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($tid)
    {
        $dades_treballador = Treballador::findOrFail($tid);
        return view('mostra', compact('dades_treballador'));
    }

    public function show_basic($tid)
    {
        $dades_treballador = Treballador::findOrFail($tid);
        return view('mostra-basica', compact('dades_treballador'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($tid){
        $dades_treballador = Treballador::findOrFail($tid);
        return view('actualitza', compact('dades_treballador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $tid)
    {
        $noves_dades_treballador = $request->validate([
            'nom' => 'required',
            'cognoms' => 'required',
            'nif' => 'required',
            'data_naixement' => 'required',
            'sexe' => 'required',
            'adressa' => 'required',
            'tlf_fixe' => 'required',
            'tlf_mobil' => 'required',
            'email' => 'required',
            'treball_distancia' => 'required',
            'tipus_contracte' => 'required',
            'data_contractacio' => 'required',
            'categoria' => 'required',
            'nom_feina' => 'required',
            'sou' => 'required'
        ]);
        Treballador::findOrFail($tid)->update($noves_dades_treballador);
        return view('dashboard');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tid)
    {
        $treballador = Treballador::findOrFail($tid)->delete();
        return view('dashboard');
    }
}
