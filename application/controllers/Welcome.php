<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function __construct()
    {
        parent::__construct();
        $this->load->library('rajaongkir');

    }

    // Controller RajaOngkir, versi Free / Paket Starter

	public function listProvinsi()
	{
		
		$data['respon'] = json_decode($this->rajaongkir->listProvinsi());
        
        var_dump($data);die;
		
	}

	public function listCity()
	{
		
		$data['respon'] = json_decode($this->rajaongkir->listCity());
        
        var_dump($data);die;
		
	}

	public function v_form_cost()
	{
		
		 $this->load->view('v_form_cost');
		
	}

	public function listCost()
	{
		
	$data['respon'] = json_decode($this->rajaongkir->listCost());
        
    var_dump($data);

    $this->load->view('v_form_cost');
	  
	}

	// End Controller RajaOngkir Versi Free/Starter
}
