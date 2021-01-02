<?php
   
    require("../fpdf182/fpdf.php");
    $db=new PDO("mysql:host=localhost;dbname=test", "root", "");
   
    class myPDF extends FPDF
    {
   
    function header()
    {
    $this->SetFont("Arial","B",14);
            $this->Cell(10,10,"Medias",'C');
            $this->Ln(20);
            $this->Cell(5,5,"Liste des Medias:",'C');
            $this->ln();
    }
    function headertable()
    {
    $this->SetFont('Times','B',12);
    $this->Cell(40,10,'Type',1,0,'C');
    $this->Cell(40,10,"Date d'ajout",1,0,'C');

    $this->Cell(40,10,'Dimension',1,0,'C');
    $this->Cell(40,10,'Generique',1,0,'C');
    $this->Cell(40,10,'Prix',1,0,'C');

    $this->Cell(40,10,'Quantite',1,0,'C');
    $this->ln();
    }
    function viewsTable($db)
    {
    $this->SetFont('times','',12);
    $stmt = $db->query("SElECT * From media where id_user=6");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
       $this->Cell(40,10,$data->type,1,0,'C');
       $this->Cell(40,10,$data->date_dajout,1,0,'C');

       $this->Cell(40,10,$data->dimension,1,0,'L');
       $this->Cell(40,10,$data->generique,1,0,'L');
       $this->Cell(40,10,$data->prix,1,0,'C');
       $this->Cell(40,10,$data->quantite,1,0,'C');

       $this->ln();
            }

    }
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("Medias.pdf", "D");


?>