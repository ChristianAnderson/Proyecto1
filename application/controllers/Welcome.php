<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller { // Todos los metdos deben de ser extendidos por CI_Control

	public function index()
	{
		$dato['string'] =  'Hola mundo!';
		$this->load->view('welcome_message',$dato);
	}
}

