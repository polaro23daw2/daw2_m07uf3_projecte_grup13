<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Apartament;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($dni_client)
    {
        $client = Client::where('dni_client', $dni_client)->firstOrFail();
        $pdf = PDF::loadView('pdfView', compact('client'))->setPaper('a4', 'landscape');
        return $pdf->stream("client_{$dni_client}.pdf");
    }
    public function generateApartamentsPDF()
    {
        $apartaments = Apartament::all(); 
        $pdf = PDF::loadView('apartamentsPDF', compact('apartaments'))->setPaper('a4', 'landscape');
        return $pdf->stream('llista_apartaments.pdf');
    }
    
}
