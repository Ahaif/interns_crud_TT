<?php
namespace App\Service;

use App\Entity\Intern;
use TCPDF;

class PdfSingleExportService {
    public function generateInternPdf(Intern $intern) {
        $pdf = new TCPDF();

        $pdf->SetTitle('Intern Report');
        $pdf->SetSubject('Internship Details');

        $pdf->AddPage();

        $html = '<h1>Intern Details</h1>';
        $html .= '<table border="1" cellpadding="5">';
        $html .= '<tr><th>Name:</th><td>' . $intern->getFirstName() . ' ' . $intern->getLastName() . '</td></tr>';
        $html .= '<tr><th>Duration:</th><td>' . $intern->getDuration() . '</td></tr>';
        $html .= '<tr><th>Subject:</th><td>' . $intern->getSubject() . '</td></tr>';
        $html .= '<tr><th>Salary:</th><td>' . $intern->getSalary() . '</td></tr>';
        $html .= '<tr><th>Eval:</th><td>' . $intern->getEval() . '</td></tr>';
        $html .= '</table>';

        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->Output('intern_details.pdf', 'I');
    }
}
