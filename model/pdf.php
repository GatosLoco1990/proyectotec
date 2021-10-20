<?php

require 'fpdf/fpdf.php';

class pdf extends FPDF
{

    public function header()
    {
        date_default_timezone_set('America/Bogota');
        $fecha = date('d-m-Y');
        $this->SetFont('Times', 'B', 12);
        //$this->Cell(0,5,date('28/m/Y'),0,1); 
        //$this->Cell(0,5,date("d-m-Y",strtotime($fecha."- 1 days")),0,1,'L');
        $this->SetY(20);
    }

    public function footer()
    {
        $this->SetFont('Times', 'B', 8);
        $this->SetY(-15);
        $this->Write(5, 'Cucuta, Colombia');
        $this->SetX(-20);
            
        $this->AliasNbPages();
        $this->Write(5, $this->PageNo() . '/{nb}');
    }
}
