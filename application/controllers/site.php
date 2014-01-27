<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{	
		
		/*
		$arreglo = array('cedula' => 24559884,
		                 'nombre' => 'Maria',
		                 'apellido' => 'Rodriguez'
		                 );

		$this->load->model("model_DB");
		$this->model_DB->eliminar($arreglo,"abogados");

		echo "Ahora anda a verificar si funciono";
		*/

		$this->home();


	}

	public function content_form()
	{
		$nombre="content_form";	

		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("$nombre");
		$this->load->view("site_footer");

	}

	public function post_insert()
	{
		$datosusuario = (array) json_decode($this->input->post('datosusuario'),true);
		$this->load->model("model_DB");
		$this->model_DB->insertar($datosusuario,'abogados');		
	}

	public function post_delete()
	{
 
		$datosusuario = (array) json_decode($this->input->post('datosusuario'),true);
		$this->load->model("model_DB");
		$this->model_DB->eliminar($datosusuario,'abogados');

	}

	public function home()
	{
		
		$this->load->model("model_DB");
		$data["resultados"] = $this->model_DB->obtener("abogados");

		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home",$data);
		$this->load->view("site_footer");

	}

	public function about()
	{
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}

	public function bootstrap()
	{
		$this->load->view("bootstrap");
	}


}
