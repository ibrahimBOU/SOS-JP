<?php
require('fpdf/fpdf.php');

//Connect to your database

class PDF extends FPDF
{
        // En-tête
        function Header()
        {
                // Logo
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
        }

        // Pied de page
        function Footer()
        {
                // Positionnement à 1,5 cm du bas
                // $this->SetY(-15);
                // Police Arial italique 8
                // $this->SetFont('Arial', 'I', 8);
                // Numéro de page
                // $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Times', '', 12);
$pdf->Output();
