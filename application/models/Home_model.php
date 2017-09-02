<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function contratar_serguro()
	{
		# variables
		$data['numero'] 			= time();
		$data['name'] 				= $this->input->post('name');
		$data['nif'] 				= $this->input->post('nif');
		$data['date'] 				= $this->input->post('date');
		$data['profesion'] 			= $this->input->post('profesion');
		$data['domicilio'] 			= $this->input->post('domicilio');
		$data['localidad'] 			= $this->input->post('localidad');
		$data['codigo_postal'] 		= $this->input->post('codigo_postal');
		$data['pais'] 				= $this->input->post('pais');
		$data['provincia'] 			= $this->input->post('provincia');
		$data['telefono'] 			= $this->input->post('telefono');
		$data['otro_telefono'] 		= $this->input->post('otro_telefono');
		$data['email'] 				= $this->input->post('email');
		$data['edo_civil'] 			= $this->input->post('edo_civil');
		$data['sexo'] 				= $this->input->post('sexo');
		$data['beneficiarios'] 		= $this->input->post('beneficiarios');
		if ($data['beneficiarios'] != 'conyugue'){
			$data['name_bene_1'] 		= $this->input->post('name_bene_1');
			$data['name_bene_2'] 		= $this->input->post('name_bene_2');
			$data['name_bene_3'] 		= $this->input->post('name_bene_3');
			$data['nif_bene_1'] 		= $this->input->post('nif_bene_1');
			$data['nif_bene_2'] 		= $this->input->post('nif_bene_2');
			$data['nif_bene_3'] 		= $this->input->post('nif_bene_3');
			$data['date_bene_1'] 		= $this->input->post('date_bene_1');
			$data['date_bene_2'] 		= $this->input->post('date_bene_2');
			$data['date_bene_3'] 		= $this->input->post('date_bene_3');
		}
		$data['fp_cash'] = $this->input->post('fp_cash');

		$message =  'Nombre y Apellidos: ' . $data['name'] . "\n" ;
		$message .= 'NIF: ' .  $data['nif'] . "\n" ;
		$message .= 'Fecha nacimiento: ' .  $data['date'] . "\n" ;
		$message .= 'Profesión: ' .  $data['profesion'] . "\n" ;
		$message .= 'Domicilio: ' .  $data['domicilio'] . "\n" ;
		$message .= 'Localidad: ' .  $data['localidad'] . "\n" ;
		$message .= 'Código Postal: ' .  $data['codigo_postal'] . "\n" ;
		$message .= 'País: ' .  $data['pais'] . "\n" ;
		$message .= 'Provincia: ' .  $data['provincia'] . "\n" ;
		$message .= 'Teléfono: ' .  $data['telefono'] . "\n" ;
		$message .= 'Otro teléfono: ' .  $data['otro_telefono'] . "\n" ;
		$message .= 'E-mail: ' .  $data['email'] . "\n" ;
		$message .= 'Estado civil: ' .  $data['edo_civil'] . "\n" ;
		$message .= 'Sexo: ' .  $data['sexo'] . "\n" ;

		if ($data['beneficiarios'] == 'otros'){
			$message .= 'Beneficiarios: Otros (rellenar nombre y apellidos, NIF y fecha de nacimiento)' . "\n" ;
			
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Beneficiarios' . "\n" ;
			$message .= '=================================================================================' . "\n" ;

			$message .= 'Nombre: '.$data['name_bene_1']."\t\t\t"."Nif: ".$data['nif_bene_1']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_1']."\n" ;
			$message .= 'Nombre: '.$data['name_bene_2']."\t\t\t"."Nif: ".$data['nif_bene_2']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_2']."\n" ;
			$message .= 'Nombre: '.$data['name_bene_3']."\t\t\t"."Nif: ".$data['nif_bene_3']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_3']."\n" ;
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Tipo de Pago' . "\n" ;
			$message .= '=================================================================================' . "\n" ;
		}else{
			$message .= 'Beneficiarios: Cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)' . "\n" ;
		}

		switch ($data['fp_cash']) {
			case 'transfe':
				$message .= 'Forma de Pago: Transferencia '. "\n" ;
				break;
			case 'card':
				$message .= 'Forma de Pago: Tarjeta '. "\n" ;
				break;
		}

		$this->email->from($data['email'], $data['name']);
		$this->email->to('info@nachoruizmediacion.es');
		$this->email->cc($data['email']);
		$this->email->bcc('miguel@webactual.com');
		$this->email->bcc('info@luiscordero29.com');
		$this->email->subject('Contratar Seguro N'.$data['numero']);
		$this->email->message($message);
		$this->email->send();

		return $data;

	}

}

/* End of file anet_model.php */
/* Location: ./application/models/home_model.php */