<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $clients = Client::all(); // Obtiene todos los clientes de la base de datos
    
        $pdf = PDF::loadView('pdfView', compact('clients'));
    
        return $pdf->download('llista_clients.pdf');
    }
}
