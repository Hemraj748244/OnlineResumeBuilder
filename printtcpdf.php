<?php 
$html=' <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">

<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">

<span style="font-size:50px; font-weight:bold">Certificate of Completion</span>

<br><br>

<span style="font-size:25px"><i>This is to certify that</i></span>

<br><br>

<span style="font-size:30px"><b>Student Name here</b></span><br/><br/>

<span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>

<span style="font-size:30px">Course Name here</span> <br/><br/>

<span style="font-size:20px">with score of <b>Grade here</b></span> <br/><br/>

</div>

</div>';

$rostersCount = count($html);

$rostersPerPage = 14;

$totalPages = ceil($rostersCount/$rostersPerPage);

$maxTitleLength = 18;

$filename = '$html'.time().'.pdf';

$this->response->header(array(

'Content-Type' => 'application/pdf',

'Content-Disposition' => 'attachment; filename='.$filename

) );

$this->autoRender = false;

$this->layout = 'pdf';

$pdf = new TCPDF ( 'P', 'mm', 'A4' );

$count = 0;

$pageNumber = 1;

while ( $pageNumber <= $totalPages )

{

$pdf->AddPage ( 'L' );

$bMargin = $pdf->getBreakMargin();

$auto_page_break = $pdf->getAutoPageBreak();

$pdf->SetAutoPageBreak(false, 0);

$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);

$pdf->SetAutoPageBreak($auto_page_break, $bMargin);

$pdf->setPageMark();

$storeNameTitle = Configure::read ( 'storeNameTitle' );

$pdf->WriteHTML($html);

$pageNumber ++;

}

$pdf->Output ();

 ?>