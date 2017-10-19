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
		$this->form_validation->set_rules('otro_telefono', 'Otro teléfono', 'trim');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('edo_civil', 'Estado Civil', 'trim|required');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
		$this->form_validation->set_rules('beneficiarios', 'Beneficiarios', 'trim|required');
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
		$this->form_validation->set_rules('fp_cash', 'Forma de Pago', 'required');
		$this->form_validation->set_rules('terminos_1', 'Ley de protección de datos', 'required');
		$this->form_validation->set_rules('terminos_2', 'Autoricen para usar los datos con fines comerciales', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['swal'] = false;
			$this->load->view('home/view_index',$data);
        }else{
        	$data = $this->home_model->registar_contrato();
        	switch (set_value('fp_cash')) {
        		case 'transfe':
        			# pago por transferencia.
        			$this->home_model->enviar_contrato($data['numero']);
        			redirect('home/home/'.$data['numero'], 'refresh');
        			break;
        		case 'card':
        			# pago por tarjeta.
           			redirect('home/tpv/'.$data['numero'], 'refresh');
        			break;
        		default:
        			# error
        			redirect('home/index', 'refresh');
        			break;
        	}
        }
	}

	public function tpv($numero)
	{
		$data = $this->home_model->contrato($numero);
		if (!empty($data)) {
			if ($data['fp_cash'] == 'card' and $data['estatus'] == 0) {
				$this->home_model->contrato_estatus($numero);
				$this->load->helper('ceca_config');
				$this->load->helper('ceca');
				$config = ceca_config();
				$TPV = new Ceca\Tpv\Tpv($config);
				# Indicamos los campos para el pedido
				$TPV->setFormHiddens(array(
				    'Num_operacion' 	=> $numero,
				    'Descripcion' 		=> 'Contratar Seguro N'.$numero,
				    'Importe' 			=> '5,66',
				    'URL_OK' 			=> site_url('home/pdf_tpv/'.$numero),
				    'URL_NOK' 			=> site_url(),
				));
				echo '<form action="'.$TPV->getPath().'" method="post">'.$TPV->getFormHiddens().'</form>';
				die('<script>document.forms[0].submit();</script>');
			}else{
				redirect('home/home/'.$numero, 'refresh');
			}
		}else{
			redirect('home/index', 'refresh');
		}
	}

	public function home($numero)
	{
		$data['swal'] = true;
		$data['numero'] = $numero;
		$this->load->view('home/view_index',$data);
	}

	public function pdf($numero)
	{
		$data = $this->home_model->contrato($numero);
		$this->load->view('home/view_pdf',$data);
	}

	public function pdf_certificado($numero)
	{
		$data = $this->home_model->contrato($numero);
		$this->load->view('home/view_certificado_pdf',$data);
	}

	public function pdf_tpv($numero)
	{
		$this->home_model->enviar_contrato_certificado($numero);
		$data = $this->home_model->contrato($numero);
		$this->load->view('home/view_pdf',$data);
	}

}
