<?php

namespace App\Http\Controllers;

use App\Models\Apartament;
use Illuminate\Http\Request;

class ApartamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_apartament = Apartament::all();
        return view('llistaApart', compact('dades_apartament'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crateApart');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nou_apartament = $request->validate([
            'codi_unic' => 'required|unique:apartament|max:7',
            'referencia_catastral' => 'required',
            'ciutat' => 'required',
            'barri' => 'required',
            'nom_del_carrer' => 'required',
            'numero_del_carrer' => 'required|integer',
            'pis' => 'required|integer',
            'nombre_de_llits' => 'required|integer',
            'nombre_dhabitacions' => 'required|integer',
            'ascensor' => 'required|boolean',
            'calefaccio' => 'required|in:Elèctrica,Gas Natural,Butà',
            'aire_condicionat' => 'required|boolean',
        ]);
        $Apartament = Apartament::create($nou_apartament);
        return view('dashboard-basic');
    }

    /**
     * Display the specified resource.
     */
    public function show($tid)
    {
        $dades_apartament = Apartament::findOrFail($tid);
        return view('mostraApart', compact('dades_apartament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codi_unic)
    {
        $dades_apartament = Apartament::findOrFail($codi_unic);
        return view('actualitzaApart', compact('dades_apartament'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codi_unic)
    {
        // Validación de los campos específicos del apartamento
        $noves_dades_apartament = $request->validate([
            'codi_unic' => 'required|max:7',
            'referencia_catastral' => 'required',
            'ciutat' => 'required',
            'barri' => 'required',
            'nom_del_carrer' => 'required',
            'numero_del_carrer' => 'required|integer',
            'pis' => 'required|integer',
            'nombre_de_llits' => 'required|integer',
            'nombre_dhabitacions' => 'required|integer',
            'ascensor' => 'required|boolean',
            'calefaccio' => 'required|in:Elèctrica,Gas Natural,Butà',
            'aire_condicionat' => 'required|boolean',
        ]);

        Apartament::findOrFail($codi_unic)->update($noves_dades_apartament);
        return view('dashboard-basic');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codi_unic)
    {
        $apartament = Apartament::findOrFail($codi_unic)->delete();
        return view('dashboard-basic');
    }

}
