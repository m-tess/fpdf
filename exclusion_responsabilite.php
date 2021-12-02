<?php
/**********************************************************/
/**********************************************************/
/******************  Les donnees a remplacer    **********/
/**********************************************************/
/**********************************************************/


$image='Logo.jpg';


/**********************************************************/
/**********************************************************/
/******************  fin  data  *******************************/
/**********************************************************/
/**********************************************************/
require('WriteTag.php');

class PDF extends PDF_WriteTag
{

function getPageNumber(){return $this->PageNo();}

}

$pdf=new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetMargins(15,15,15);
$pdf->SetFont('Times','B',12);
// Feuille de style
$pdf->SetStyle("p","Times","N",12,"0,0,0",0);
$pdf->SetStyle("p1","Times","N",12,"0,0,0",10);
$pdf->SetStyle("vb","Times","B",0,"0,0,0");

$pdf->Ln();

$pdf->Image($image,68,10,68);
// Titre

$pdf->Ln(35);
$pdf->SetFont('Ubuntu','b',14);
$pdf->Cell(167,5,"EXCLUSION DE RESPONSABILITé",0,1,'C');

$pdf->Ln(2);
$text ="<p><vb>JE, ...</vb></p>";
$text .="<p>Demeurant et domicilié(e) à </p>";
$text .="<p>Agissant en qualité ...,</p>";
$text .="<p><vb>RENONCE</vb>, coronavirus de la COVID-19.</p>";
$text .="<p>Fait le septembre 2020</p>";

$pdf->WriteTag(0,7,$text,0,"J",0,3);
$pdf->Ln(15);


//Remarques et signature
$pdf->Cell(169,5,"---------------------------------------",0,1,'R');


$pdf->Output();
?>