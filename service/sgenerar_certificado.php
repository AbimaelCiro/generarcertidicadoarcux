<?php

require_once '../resorurce/fpdf/fpdf.php';


$tipo = isset($_GET["tipo"]) != '' ? $_GET["tipo"] : '';

$ape = $_POST['ape'];
$nom = $_POST['nom'];
$cur = $_POST['cur'];
$fi = $_POST['fi'];
$ff = $_POST['ff'];

$an = $ape . " " . $nom;
class pdf extends FPDF {

    public function header() {

        $this->Image('../resorurce/img/logo_ga.png', 10, 8, 25, 25, 'png');

        $this->Image('../resorurce/img/Server.png', 266, 8, 25, 25, 'png');
    }

    public function footer() {
        $this->SetFont('Arial', 'B', 10);
        $this->SetY(-15);
        $this->Write(5, '---ARCUX---');
        $this->SetXY(-38, 282);
        $this->AliasNbPages('tpagina');
        $this->Write(5, $this->PageNo() . '/tpagina');
    }

}

$fpdf = new FPDF();

$fpdf = new pdf();

$fpdf->AddPage('LANDSCAPE', 'a4', 90);
$fpdf->SetFont('Arial', 'B', 14);
$fpdf->SetY(20);
$fpdf->SetTextColor(16, 87, 97);
$fpdf->Cell(0, 5, 'CERTIFICADO DEL CURSO', 0, 0, 'C');
$fpdf->SetDrawColor(61, 174, 233);
$fpdf->SetLineWidth(2);
$fpdf->Line(100, $fpdf->GetY() + 7, 200, $fpdf->GetY() + 7);
$fpdf->Ln(20);

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->SetTextColor(61, 174, 233);
$fpdf->Ln(8);

$fpdf->Cell(20, 5, 'CURSO : ');
$fpdf->SetTextColor(40, 40, 40);
$fpdf->Cell(20, 5, ''.$cur);
$fpdf->Ln(8);
$fpdf->SetTextColor(61, 174, 233);
$fpdf->Cell(20, 5, 'OTORGADO :');
$fpdf->Cell(20, 5, '');
$fpdf->SetTextColor(40, 40, 40);
$fpdf->Cell(40, 5, ''.$an);
$fpdf->Ln(20);

$fpdf->SetFont('Arial', '');
$fpdf->SetTextColor(40, 40, 40);
$fpdf->SetDrawColor(255, 255, 255);

$fpdf->SetFont('Arial', '', 15);
$fpdf->Cell(50, 5, '');
$fpdf->Cell(45, 5, utf8_decode('POR HABER CONCLUIDO SATISFACTORIAMENTE'), 0, 0, 'L', 0);


$fpdf->SetDrawColor(61, 174, 233);

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->SetTextColor(61, 174, 233);
$fpdf->Ln(20);

$fpdf->Cell(20, 5, 'FECHA INICIO :');
$fpdf->SetTextColor(40, 40, 40);
$fpdf->Cell(20, 5, '');
$fpdf->Cell(20, 5, ''.$fi);
$fpdf->Ln(8);
$fpdf->SetTextColor(61, 174, 233);
$fpdf->Cell(20, 5, 'FECHA FIN :');
$fpdf->Cell(20, 5, '');
$fpdf->SetTextColor(40, 40, 40);
$fpdf->Cell(20, 5, ''.$ff);

$fpdf->Ln(20);


$fpdf->SetTextColor(0, 0, 0);
$fpdf->SetFillColor(156, 156, 156);


$fpdf->Ln(50);

$fpdf->SetFont('Arial', 'B', 14);
$fpdf->Cell(180, 5, '');
$fpdf->Cell(67, 5, 'Firma y Sello del Director(a)', 0, 0, 'C', 0);

$fpdf->Output('lista_estudiates.pdf', 'D');
