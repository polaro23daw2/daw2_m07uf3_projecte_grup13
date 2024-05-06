<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Apartament;
use App\Models\Lloga;
use App\Models\Treballador;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($dni_client)
    {
        $client = Client::where('dni_client', $dni_client)->firstOrFail();
        $pdf = PDF::loadView('pdfView', compact('client'))->setPaper('a4', 'landscape');
        return $pdf->stream("client_{$dni_client}.pdf");
    }
    public function generateApartmentPDF($codi_unic)
    {
        $apartament = Apartament::where('codi_unic', $codi_unic)->firstOrFail();
        $pdf = PDF::loadView('unicApartamentPDF', compact('apartament'))->setPaper('a4', 'landscape');
        return $pdf->stream("apartament_{$codi_unic}.pdf");
    }
    public function generateLlogaPDF($dni_client,$codi_unic)
    {
        $lloga = Lloga::where('dni_client', $dni_client)
                    ->where('codi_unic', $codi_unic)
                    ->first();
        $pdf = PDF::loadView('pdfLloga', compact('lloga'))->setPaper('a4', 'landscape');
        return $pdf->stream("lloga" . $dni_client . $codi_unic . ".pdf");
    }
    public function generateTreballadorsPDF($tid)
    {
        $treballador = Treballador::where('tid', $tid)->firstOrFail();
        $pdf = PDF::loadView('pdfTreballadors', compact('treballador'))->setPaper('a4', 'landscape');
        return $pdf->stream("treballadors_{$tid}.pdf");
    }
    
}
