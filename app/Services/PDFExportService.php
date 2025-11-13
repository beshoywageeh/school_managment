<?php

namespace App\Services;

use PDF;
use App\Http\Traits\SchoolTrait;

class PDFExportService
{
    public function PrintPDF($view, $type, $data, $orientation,$heading)
    {

        
        $pdf = PDF::loadView('backend.report.PDF.' . $view, ['data' => $data,'school'=>$heading], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 30,
            'margin_bottom' => 20,
            'margin_header' => 10,
            'margin_footer' => 10,
            'orientation' => $orientation,
        ]);

       
        return $pdf->$type($view . '.pdf');
    }
}
