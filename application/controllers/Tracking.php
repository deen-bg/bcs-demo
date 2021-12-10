<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tracking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation'); 
		// $this->load->model('Banner_model');
	}
	public function order_tracking()
	{
        $this->load->view('header'); // load header script,menu
		$this->load->view('tracking/order-tracking');
	}

}
