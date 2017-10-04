<?php
tcpdf();  
// create new PDF document
class MYPDF extends TCPDF {

    //Page header
    public function Header() {              
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', '', 7);
        // Page number
        $this->Cell(0, 10, '', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

$obj_pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$obj_pdf->SetCreator(PDF_CREATOR);
$obj_pdf->SetAuthor('APP - Nacho Ruiz Compés');
$obj_pdf->SetTitle('CONTRATO');
$obj_pdf->SetSubject('Nacho Ruiz Compés');
$obj_pdf->SetKeywords('Nacho Ruiz Compés');

// set default header data
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$obj_pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$obj_pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

// set default font subsetting mode
$obj_pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
// Add a page
// This method has several options, check the source code documentation for more information.
$obj_pdf->AddPage();

$obj_pdf->Image(base_url().'assets/img/logo.png', '15', '10', 40, 10, '', '', 'T', false, 100, '', false, false, 0, false, false, false);
$obj_pdf->Ln(10);
$obj_pdf->SetFont('helvetica', 'B', 12);
$obj_pdf->Cell(0, 0, 'OFERTA DE SEGURO DE ACCIDENTES COLECTIVOS 2016/2017', 0, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(3);
$obj_pdf->Cell(0, 0, 'DIRIGIDA A UNIVERSIDAD DE ZARAGOZA, Q5018001G', 0, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);

$obj_pdf->SetFont('helvetica', '', 10);
$obj_pdf->Cell(60, 0, '* Cobertura:', 'LTR', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'Durante la Estancia en Instalaciones Universidad de Zaragoza, ', 'LTR', 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '', 'LR', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'actividades comprendidas dentro del estudio correspondientes y', 'LR', 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '', 'LRB', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'RIESGO IN ITINIRE', 'LRB', 1, 'L', 0, '', 0,  0, '', 0);

$obj_pdf->SetFont('helvetica', 'B', 10);
$obj_pdf->Cell(0, 0, 'Garantías y Sumas Aseguradas por Persona', 0, 1, 'L', 0, '', 0,  0, '', 0);

$obj_pdf->SetFont('helvetica', '', 10);
$obj_pdf->Ln(10);

$obj_pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'Fallecimiento Accidental:', 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, '9.000 €', 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);
$obj_pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'Invalidez Permanente Baremo:', 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, '18.000 €', 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);
$obj_pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'Gastos Sanitarios:', 'LRT', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, ' Ilimitados en centros concertados', 'LRT', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '', 'LR', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, ' en territorio Nacional (Máximo 2', 'LR', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '', 'LRB', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, ' años)', 'LRB', 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);

$obj_pdf->SetFont('helvetica', 'B', 10);
$obj_pdf->Cell(80, 0, '', 'LRT', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '', 'LRT', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(80, 0, 'PRIMA NETA POR PERSONA', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '5,66 €', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(80, 0, '', 'LRB', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '', 'LRB', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 0, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);

$obj_pdf->SetFont('helvetica', '', 10);
$obj_pdf->Cell(0, 0, 'DATOS DE LAS PERSONA A ASEGURAR', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'NOMBRES Y APELLIDOS: '.$name, 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(70, 0, 'FECHA DE NACIMIENTO: '.$date, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(50, 0, 'NIF: '.$nif, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'PROFESIÓN: '.$profesion, 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'DOMICILIO: '.$domicilio, 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'LOCALIDAD: '.$localidad, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'C-POSTAL: '.$codigo_postal, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'PAIS: '.$pais, 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'PROVINCIA: '.$provincia, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'TELÉFONO: '.$telefono, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'OTRO TFNO.: '.$otro_telefono, 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, 'ESTADO CIVIL: '.$edo_civil, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, 'SEXO: '.$sexo, 1, 0, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'E-MAIL: '.$email, 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);

$obj_pdf->Cell(40, 0, '', 'LTR', 0, 'C', 0, '', 0,  0, '', 0);
if ($beneficiarios == 'conyugue') {
    $obj_pdf->Cell(0, 0, '( X ) El cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto los', 1, 1, 'L', 0, '', 0,  0, '', 0);
}else{
    $obj_pdf->Cell(0, 0, '(   ) El cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto los', 1, 1, 'L', 0, '', 0,  0, '', 0);
}
$obj_pdf->Cell(40, 0, '', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, ' herederos legales (esta designación será la que aparezca en caso de  ', 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(40, 0, '', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, 'ausencia de designación expresa)', 1, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(40, 0, '', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
if ($beneficiarios == 'otros') {
    $obj_pdf->Cell(0, 0, '( X ) Otros ', 1, 1, 'L', 0, '', 0,  0, '', 0);
}else{
    $obj_pdf->Cell(0, 0, '(   ) Otros ', 1, 1, 'L', 0, '', 0,  0, '', 0);
}
$obj_pdf->Cell(40, 0, ' BENEFICIARIOS ', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, ' NOMBRES Y APELLIDOS ', 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, ' NIF ', 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, ' FECHA DE NACIMIENTO ', 1, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(40, 0, '', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, ''.$name_bene_1, 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, ''.$nif_bene_1, 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, ''.$date_bene_1, 1, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(40, 0, '', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, ''.$name_bene_2, 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, ''.$nif_bene_2, 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, ''.$date_bene_2, 1, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(40, 0, '', 'LR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, ''.$name_bene_3, 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, ''.$nif_bene_3, 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, ''.$date_bene_3, 1, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(40, 0, '', 'LBR', 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(60, 0, '', 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(30, 0, '', 1, 0, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Cell(0, 0, '', 1, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);

$obj_pdf->SetFont('helvetica', '', 10);
$obj_pdf->Cell(0, 0, 'El pago del Seguro se puede efectuar mediante: ', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(1);
$obj_pdf->Cell(0, 0, 'Transferencia Bancaria a favor de Jose Ignacio Ruiz Cómpes: ES38 2085 8366 8003 3040 1759', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(1);
$obj_pdf->Cell(0, 0, 'Entidad IBERCAJA', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(1);
$obj_pdf->Cell(0, 0, 'Ingreso Directo en misma cuenta.', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(5);
$obj_pdf->Cell(0, 0, 'Una ve recibida la solicitud debidamente cumplimentada y copia del pago efectuado, se expedirá', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(1);
$obj_pdf->Cell(0, 0, 'certificado en un máximo de 48 horas.', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(1);
$obj_pdf->Cell(0, 0, 'Por favor enviar datos a mjroble@mapfre.com', 0, 1, 'L', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(1);
$obj_pdf->Cell(0, 0, 'Teléfono: 636 78 78 15 para cualquier duda.', 0, 1, 'L', 0, '', 0,  0, '', 0);

// Close and output PDF document
// This method has several options, check the source code documentation for more information.*/
$obj_pdf->Output('CONRTRATO-'.$numero.'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>