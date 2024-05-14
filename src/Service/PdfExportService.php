<?php
namespace App\Service;

use App\Entity\Intern;
use TCPDF;

class PdfExportService {
    public function generateInternsPdf($interns) {
        $pdf = new TCPDF();

        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);

        $htmlContent = '<h1>Interns Report</h1>';
        $htmlContent .= '<table border="1" cellpadding="4"><tr><th>First Name</th><th>Last Name</th><th>Duration</th><th>Subject</th><th>Salary</th><th>Eval</th></tr>';

        foreach ($interns as $intern) {
            $htmlContent .= sprintf(
                '<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>',
                $intern->getFirstName(),
                $intern->getLastName(),
                $intern->getDuration(),
                $intern->getSubject(),
                $intern->getSalary(),
                $intern->getEval()
            );
        }

        $htmlContent .= '</table>';
        $pdf->writeHTML($htmlContent, true, false, true, false, '');

        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        return $pdf->Output('interns_report.pdf', 'I');
    }
}
