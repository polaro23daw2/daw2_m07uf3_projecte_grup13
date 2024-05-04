<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Apartament;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $clients = Client::all();
        $pdf = PDF::loadView('pdfView', compact('clients'))->setPaper('a4', 'landscape');
        return $pdf->stream('llista_clients.pdf');
    }
    public function generateApartamentsPDF()
    {
        $apartaments = Apartament::all(); 
        $pdf = PDF::loadView('apartamentsPDF', compact('apartaments'))->setPaper('a4', 'landscape');
        return $pdf->stream('llista_apartaments.pdf');
    }
    
}
