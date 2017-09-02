<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function contratar_serguro()
	{
		# variables
		$numero 			= time();
		$name 				= $this->input->post('name');
		$nif 				= $this->input->post('nif');
		$date 				= $this->input->post('date');
		$profesion 			= $this->input->post('profesion');
		$domicilio 			= $this->input->post('domicilio');
		$localidad 			= $this->input->post('localidad');
		$codigo_postal 		= $this->input->post('codigo_postal');
		$pais 				= $this->input->post('pais');
		$provincia 			= $this->input->post('provincia');
		$telefono 			= $this->input->post('telefono');
		$otro_telefono 		= $this->input->post('otro_telefono');
		$email 				= $this->input->post('email');
		$edo_civil 			= $this->input->post('edo_civil');
		$sexo 				= $this->input->post('sexo');
		$beneficiarios 		= $this->input->post('beneficiarios');
		if ($beneficiarios != 'conyugue'){
			$name_bene_1 		= $this->input->post('name_bene_1');
			$name_bene_2 		= $this->input->post('name_bene_2');
			$name_bene_3 		= $this->input->post('name_bene_3');
			$nif_bene_1 		= $this->input->post('nif_bene_1');
			$nif_bene_2 		= $this->input->post('nif_bene_2');
			$nif_bene_3 		= $this->input->post('nif_bene_3');
			$date_bene_1 		= $this->input->post('date_bene_1');
			$date_bene_2 		= $this->input->post('date_bene_2');
			$date_bene_3 		= $this->input->post('date_bene_3');
		}
		$fp_cash = $this->input->post('fp_cash');

		$message =  'Nombre y Apellidos: ' . $name . "\n" ;
		$message .= 'NIF: ' .  $nif . "\n" ;
		$message .= 'Fecha nacimiento: ' .  $date . "\n" ;
		$message .= 'Profesión: ' .  $profesion . "\n" ;
		$message .= 'Domicilio: ' .  $domicilio . "\n" ;
		$message .= 'Localidad: ' .  $localidad . "\n" ;
		$message .= 'Código Postal: ' .  $codigo_postal . "\n" ;
		$message .= 'País: ' .  $pais . "\n" ;
		$message .= 'Provincia: ' .  $provincia . "\n" ;
		$message .= 'Teléfono: ' .  $telefono . "\n" ;
		$message .= 'Otro teléfono: ' .  $otro_telefono . "\n" ;
		$message .= 'E-mail: ' .  $email . "\n" ;
		$message .= 'Estado civil: ' .  $edo_civil . "\n" ;
		$message .= 'Sexo: ' .  $sexo . "\n" ;

		if ($beneficiarios == 'otros'){
			$message .= 'Beneficiarios: Otros (rellenar nombre y apellidos, NIF y fecha de nacimiento)' . "\n" ;
			
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Beneficiarios' . "\n" ;
			$message .= '=================================================================================' . "\n" ;

			$message .= 'Nombre: '.$name_bene_1."\t\t\t"."Nif: ".$nif_bene_1."\t\t\t".'Fecha Nacimiento: '.$date_bene_1."\n" ;
			$message .= 'Nombre: '.$name_bene_2."\t\t\t"."Nif: ".$nif_bene_2."\t\t\t".'Fecha Nacimiento: '.$date_bene_2."\n" ;
			$message .= 'Nombre: '.$name_bene_3."\t\t\t"."Nif: ".$nif_bene_3."\t\t\t".'Fecha Nacimiento: '.$date_bene_3."\n" ;
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Tipo de Pago' . "\n" ;
			$message .= '=================================================================================' . "\n" ;
		}else{
			$message .= 'Beneficiarios: Cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)' . "\n" ;
		}

		switch ($fp_cash) {
			case 'transfe':
				$message .= 'Forma de Pago: Transferencia '. "\n" ;
				break;
			case 'card':
				$message .= 'Forma de Pago: Tarjeta '. "\n" ;
				break;
		}

		$this->email->from($email, $name);
		$this->email->to('info@nachoruizmediacion.es');
		$this->email->cc($email);
		$this->email->bcc('miguel@webactual.com');
		$this->email->bcc('info@luiscordero29.com');
		$this->email->subject('Contratar Seguro N'.$numero);
		$this->email->message($message);
		$this->email->send();

		return $numero;

	}

}

/* End of file anet_model.php */
/* Location: ./application/models/home_model.php */