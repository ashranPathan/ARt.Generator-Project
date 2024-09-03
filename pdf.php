<?php
//pdf.php;

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Dom extends Dompdf{

public function __construct() {
      parent::__construct();
     }
 }

// $pdf = new Dom();
//  $file_name = 'Invoice-'.$row["order_no"].'.pdf';
//  $pdf->loadHtml($output);
//  $pdf->render();
//  $pdf->stream($file_name, array("Attachment" => false));

?>