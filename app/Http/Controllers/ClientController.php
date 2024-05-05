<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use PDF;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $dades_clients = Client::all();
        return view('llistaClients', compact('dades_clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createClients');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'dni_client' => 'required|string|max:20|unique:clients,dni_client',
            'nom_i_cognoms' => 'required|string|max:255',
            'edat' => 'required|integer',
            'telefon' => 'required|string',
            'adreca' => 'required|string',
            'ciutat' => 'required|string',
            'pais' => 'required|string',
            'email' => 'required|email',
            'tipus_de_targeta' => 'required|in:Dèbit,Crèdit',
            'numero_de_la_targeta' => 'required|string'
        ]);
    
        $Client = Client::create($nouClient);
        return view('dashboard-basic');
    }

    /**
     * Display the specified resource.
     */
    public function show($dni_client)
    {
        $dades_client = Client::findOrFail($dni_client);
        return view('mostraClient',compact('dades_client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dni_client){
        $dades_client = Client::findOrFail($dni_client);
        return view('actualitzaClient', compact('dades_client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $dni_client)
    {
        $noves_dades_clients = $request->validate([
            'dni_client' => 'required|string|max:20|unique:clients,dni_client,' . $dni_client . ',dni_client',
            'nom_i_cognoms' => 'required|string|max:255',
            'edat' => 'required|integer',
            'telefon' => 'required|string',
            'adreca' => 'required|string',
            'ciutat' => 'required|string',
            'pais' => 'required|string',
            'email' => 'required|email',
            'tipus_de_targeta' => 'required|in:Dèbit,Crèdit',
            'numero_de_la_targeta' => 'required|string'
        ]);
    
        Client::findOrFail($dni_client)->update($noves_dades_clients);
        return view('dashboard-basic');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dni_client)
    {
    $Client = Client::findOrFail($dni_client)->delete();
    return view('dashboard-basic');
    }
    
}