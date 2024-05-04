<?php

namespace App\Http\Controllers;

use App\Models\Lloga;
use Illuminate\Http\Request;

class LloguerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_lloga = Lloga::all();
        return view('llistaLloga', compact('dades_lloga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createLloga');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dni_client' => 'required|string|exists:clients,dni_client',
            'codi_unic' => 'required|string|exists:apartament,codi_unic',
            'data_inici_lloguer' => 'required|date',
            'hora_inici_lloguer' => 'required',
            'data_finalitzacio_lloguer' => 'required|date',
            'hora_finalitzacio_lloguer' => 'required',
            'lloc_lliurament_claus' => 'required|string',
            'lloc_devolucio_claus' => 'required|string',
            'preu_per_dia' => 'required|numeric',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'required|numeric',
            'tipus_asseguranca' => 'required|string|in:Franquícia fins a 1000 Euros,Franquícia fins a 500 Euros,Sense franquícia',
        ]);

        // Crear lloguer
        Lloga::create($validatedData);

        return redirect('dashboard-basic');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dni_client, $codi_unic)
    {
        $dades_lloga = Lloga::where('dni_client', $dni_client)
            ->where('codi_unic', $codi_unic)
            ->firstOrFail();

        return view('actualitzaLloga', compact('dades_lloga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $dni_client, string $codi_unic)
    {
        $noves_dades_lloga = $request->validate([
            'data_inici_lloguer' => 'required|date',
            'hora_inici_lloguer' => 'required',
            'data_finalitzacio_lloguer' => 'required|date',
            'hora_finalitzacio_lloguer' => 'required',
            'lloc_lliurament_claus' => 'required|string',
            'lloc_devolucio_claus' => 'required|string',
            'preu_per_dia' => 'required|numeric',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'required|numeric',
            'tipus_asseguranca' => 'required|string|in:Franquícia fins a 1000 Euros,Franquícia fins a 500 Euros,Sense franquícia',
        ]);
    
        $lloga = Lloga::where('dni_client', $dni_client)
            ->where('codi_unic', $codi_unic)
            ->firstOrFail();
    
        $lloga->update($noves_dades_lloga);
    
        return redirect()->route('dashboard-basic')->with('success', 'Lloguer updated successfully.');
    }
        

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni_client, string $codi_unic)
    {
        //
    }
    
}
