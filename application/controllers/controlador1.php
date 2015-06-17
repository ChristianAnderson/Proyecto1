<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador1 extends CI_Controller { // Todos los metdos deben de ser extendidos por CI_Control
	function __contruct(){
		parent:: __construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');
	}
	function index(){

		$this->load->library('menu', array('Inicio', 'Contacto', 'Curso', 'Nombres', 'tipos')); //Podemos enviar parametros
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->helper('mihelper');
		$this->load->view('codigo/headers');
		$this->load->view('codigo/bienvenido', $data);

	}

	function nuevo(){
		$this->load->view('codigo/headers');	
		$this->load->view('codigo/formulario');
	}

}



