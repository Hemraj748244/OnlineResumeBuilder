<?php 

echo file_get_contents('http://localhost/resume/template3.php');
$html2pdf = new HTML2PDF('P', 'A4');
 $html2pdf->writeHTML($html_content);
 $file = $html2pdf->Output('temp.pdf','F');
 $im = new imagick('temp.pdf');
$im->setImageFormat( "jpg" );
$img_name = time().'.jpg';
$im->setSize(800,600);
$im->writeImage($img_name);
$im->clear();
$im->destroy();
 ?>