<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->helper('pdf_helper');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->form_validation->set_rules('name', 'Nombre y Apellidos', 'trim|required');
		$this->form_validation->set_rules('nif', 'NIF', 'trim|required');
		$this->form_validation->set_rules('date', 'Fecha nacimiento', 'trim|required');
		$this->form_validation->set_rules('profesion', 'Profesión', 'trim|required');
		$this->form_validation->set_rules('domicilio', 'Domicilio', 'trim|required');
		$this->form_validation->set_rules('localidad', 'Localidad', 'trim|required');
		$this->form_validation->set_rules('codigo_postal', 'Código postal', 'trim|required');
		$this->form_validation->set_rules('pais', 'País', 'trim|required');
		$this->form_validation->set_rules('provincia', 'Provincia', 'trim|required');
		$this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required');
		$this->form_validation->set_rules('otro_telefono', 'Otro teléfono', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('edo_civil', 'Estado Civil', 'trim|required');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
		$this->form_validation->set_rules('beneficiarios', 'Sexo', 'trim|required');
		if (set_value('beneficiarios') == 'otros'){
			$this->form_validation->set_rules('name_bene_1', 'Nombre y Apellidos del Beneficiario', 'trim|required');
			$this->form_validation->set_rules('name_bene_2', 'Nombre y Apellidos del Beneficiario', 'trim');
			$this->form_validation->set_rules('name_bene_3', 'Nombre y Apellidos del Beneficiario', 'trim');
			$this->form_validation->set_rules('nif_bene_1', 'NIF del Beneficiario', 'trim|required');
			$this->form_validation->set_rules('nif_bene_2', 'NIF del Beneficiario', 'trim');
			$this->form_validation->set_rules('nif_bene_3', 'NIF del Beneficiario', 'trim');			
			$this->form_validation->set_rules('date_bene_1', 'Fecha nacimiento del Beneficiario', 'trim|required');			
			$this->form_validation->set_rules('date_bene_2', 'Fecha nacimiento del Beneficiario', 'trim');			
			$this->form_validation->set_rules('date_bene_3', 'Fecha nacimiento del Beneficiario', 'trim');			
		}
		$this->form_validation->set_rules('fp_cash', 'Sexo', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('home/view_index');
        }else{
        	$data = $this->home_model->contratar_serguro();
            $this->load->view('home/view_pdf',$data);
			$fp_cash = $this->input->post('fp_cash');
			if ($fp_cash == 'card') {
				$this->tpv($data['numero']);
			}
        }
	}

	public function tpv($numero)
	{
		
		$this->load->helper('ceca_config');
		$this->load->helper('ceca');
		$config = ceca_config();
		$TPV = new Ceca\Tpv\Tpv($config);
		# Indicamos los campos para el pedido
		$TPV->setFormHiddens(array(
		    'Num_operacion' 	=> $numero,
		    'Descripcion' 		=> 'Contratar Seguro N'.$numero,
		    'Importe' 			=> '5,66',
		    'URL_OK' 			=> 'http://www.nachoruizmediacion.es/',
		    'URL_NOK' 			=> 'http://www.nachoruizmediacion.es/'
		));
		echo '<form target="_blank" action="'.$TPV->getPath().'" method="post">'.$TPV->getFormHiddens().'</form>';
		die('<script>document.forms[0].submit();</script>');
	}

}
