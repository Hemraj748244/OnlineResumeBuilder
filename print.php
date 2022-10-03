<?php 

ob_start();
require_once('template3.php');
$temp=ob_get_clean();

require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;

$dompdf=new Dompdf();
$dompdf->loadHtml($temp);
$dompdf->setPaper('letter','portrait');
$dompdf->render();
$dompdf->stream('message-'.time());

 ?>