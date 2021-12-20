<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation'); 
		// $this->load->model('Banner_model');
	}
	public function payment_ticket()
	{
		$this->load->view('header'); // load header script,menu
		$this->load->view('payment/payment-ticket');
		$this->load->view('script-js');
		$this->load->view('footer');
	}

}
