<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getPDF(){
        $pdf = PDF::loadView('pdf.invoice', array('data' => $data));
        return $pdf->download('invoice.pdf');
    }
}
