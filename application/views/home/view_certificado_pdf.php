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

$obj_pdf->Image(base_url().'assets/img/logo.gif', '15', '10', 40, 10, '', '', 'T', false, 100, '', false, false, 0, false, false, false);
$obj_pdf->Ln(10);
$obj_pdf->SetFont('helvetica', 'B', 16);
$obj_pdf->Cell(0, 0, 'Departamento de Emisión y Suscripción', 0, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(1);
$obj_pdf->Cell(0, 0, 'Subcentral Aragón', 0, 1, 'C', 0, '', 0,  0, '', 0);
$obj_pdf->Ln(20);
$obj_pdf->SetFont('helvetica', '', 14);
$html = '
<p style="margin-top: 40px; margin-bottom: 40px;line-height: 30px; ">
<b>JOSÉ MIGUEL NAVARRO PARDOS</b>, como apoderado de <b>MAPFRE VIDA</b>, Compañía de Seguros y Reaseguros <b>CIF A28229599</b> Y CON DOMICILIO SOCIAL EN CTRA.POZUELO, 50, 28222 MAJADAHONDA (MADRID)
</p>

<p style="text-align: center; margin-top: 40px; margin-bottom: 40px; line-height: 30px">
CERTIFICA:
</p>

<p style="margin-top: 40px; margin-bottom: 40px;line-height: 30px">
Que <b>UNIVERSIDAD DE ZARAGOZA</b>, con CIF <b>Q5018001G</b> tiene contratada con esta Compañía póliza de seguro colectivo nº <b>0551780159947</b>. Que la póliza suscrita es de duración <b>Anual</b>.
</p>

<p style="margin-top: 40px; margin-bottom: 40px;line-height: 30px;">
Universitario que forma parte de esta póliza:
</p>

<p style="line-height: 30px">
'.$name.' CON NIF '.$nif.' Y FECHA DE NACIMIENTO '.$date.'.
</p>

<p style="margin-top: 40px; margin-bottom: 40px;line-height: 30px;">
Y para su constancia se expide el presente certificado en Zaragoza a '.date("d", strtotime($registro)).' de '.$this->home_model->mes(date("m", strtotime($registro))).'  de '.date("Y", strtotime($registro)).'.
</p>
<p style="margin-top: 100px; margin-bottom: 40px;text-align: right; padding-right: 40px; font-weight: 900;line-height: 30px;">
<b>MAPFRE VIDA</b>
</p>
';

// output the HTML content
$obj_pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
// This method has several options, check the source code documentation for more information.*/
$obj_pdf->Output('CERTIFICADO-'.$numero.'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>