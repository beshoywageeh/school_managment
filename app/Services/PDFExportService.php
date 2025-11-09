<?php

namespace App\Services;

use Carbon\Carbon;
use PDF;
class PDFExportService
{
    public function PrintPDF($view,$type,$data,$oriantation)
    {
        $pdf = PDF::loadView('backend.report.'.$view, ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 2,
            'margin_right' => 2,
            'margin_top' => 35,
            'margin_bottom' => 10,
            'margin_header' => 2,
            'margin_footer' => 2,
            'orientation' => $oriantation,
        ]);

        return $pdf->$type($view.'.pdf');
    }
}
