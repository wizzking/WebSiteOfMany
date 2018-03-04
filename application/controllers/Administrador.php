<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Administrador/Inicio');
	}
	public function Error404()
	{
		$this->load->view('Administrador/Error/Error404');
	}
	public function Error500()
	{
		$this->load->view('Administrador/Error/Error500');
	}
}
