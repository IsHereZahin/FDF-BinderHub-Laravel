<?php

namespace App\Http\Controllers;

use mPDF;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = view('pdfbinder')->render();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('page.pdf', 'D');
    }
}
