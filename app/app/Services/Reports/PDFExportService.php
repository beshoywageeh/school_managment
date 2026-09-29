<?php

namespace App\Services\Reports;

use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use PDF;

class PDFExportService
{
    public function printPdf(
        string $view,
        array|Collection $data,
        string $orientation,
        $heading,
    ): Response {
        $pdf = PDF::loadView(
            $view,
            ['data' => $data, 'school' => $heading],
            [],
            [
                'format' => 'A4',
                'default_font_size' => 10,
                'margin_left' => 10,
                'margin_right' => 10,
                'margin_top' => 30,
                'margin_bottom' => 20,
                'margin_header' => 10,
                'margin_footer' => 10,
                'orientation' => $orientation,
            ],
        );

        $filename = Str::afterLast($view, '.').'.pdf';

        return response($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"',
        ]);
    }
}
