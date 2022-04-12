<?php
require('fpdf/fpdf.php');

//Connect to your database

class PDF extends FPDF
{
    // En-tête
    function Header()
    {
        // Logo
<<<<<<< HEAD
        // $this->Image('logo.png', 8, 5, 15);  

        // Police Arial gras 15
        // $this->SetFont('Arial', 'B', 15);
        // Décalage à droite
        // $this->Cell(80);
        // Titre
        // $this->Cell(30, 10, 'Titre', 1, 0, 'C');
        // Saut de ligne
        // $this->Ln(20);

        // Image de fond
        $this->Image('img/page1.jpg', 0, 0, 297, 210);
=======
        $this->Image('logo.png', 8, 5, 15);
        // Police Arial gras 15
        $this->SetFont('Arial', 'B', 15);
        // Décalage à droite
        $this->Cell(80);
        // Titre
        $this->Cell(30, 10, 'Titre', 1, 0, 'C');
        // Saut de ligne
        $this->Ln(20);
>>>>>>> 64a9f3c0c9a16853ce4405b50f70a94f248c302b
    }

    // Pied de page
    function Footer()
    {
        // Positionnement à 1,5 cm du bas
<<<<<<< HEAD
        // $this->SetY(-15);
        // Police Arial italique 8
        // $this->SetFont('Arial', 'I', 8);
        // Numéro de page
        // $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
=======
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial', 'I', 8);
        // Numéro de page
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
>>>>>>> 64a9f3c0c9a16853ce4405b50f70a94f248c302b
    }
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
<<<<<<< HEAD
$pdf->AddPage('L');
$pdf->SetFont('Times', '', 12);
=======
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
for ($i = 1; $i <= 40; $i++)
    $pdf->Cell(0, 20, 'Impression de la ligne numero ' . $i, 0, 1);
>>>>>>> 64a9f3c0c9a16853ce4405b50f70a94f248c302b
$pdf->Output();
