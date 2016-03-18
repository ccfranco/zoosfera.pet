<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador1 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Len_model');
		$this->load->model('Nino_model');
		$this->load->library('Grocery_CRUD');
		  $this->load->database();
	}
	function index(){
		$this->load->view('Pagina/index');
		$this->load->view('Pagina/footer');
	
	}
	function  consulta(){
		$this->load->view('Pagina/consulta');
		$this->load->view('Pagina/footer');
	}
	function ingreso(){
		$this->load->view('Pagina/ingreso');
		//this->load->view('Pagina/carga');
		$this->load->view('Pagina/footer');


	}
	function modificar(){
		$this->load->view('Pagina/modificar');
		$this->load->view('Pagina/footer');
	}
	function preguntas(){
		$this->load->view('Pagina/preguntas');
		$this->load->view('Pagina/footer');
	}
    	public function formulario(){

		$this->load->view('Pagina/ingreso');
		$this->load->view('Pagina/footer');
	}

       public function validar(){	

/*
		$this->form_validation->set_rules('nombre','Nombre de Usuario','required|trim');
		$this->form_validation->set_rules('rut','Rut','required|trim');
		
		$this->form_validation->set_message('required','El campo %s Es Obligatorio');
		
		if ($this->form_validation->run() == FALSE){
			
			$this->formulario();
		
		}
		else
		{
			$nombre= $this->input->post('nombre');
			$edad= $this->input->post('edad');
			$rut= $this->input->post('rut');
			$sexo= $this->input->post('sexo');
			$fam= $this->input->post('fam');
			$escolaridad= $this->input->post('escolaridad');
			$colegio= $this->input->post('colegio');
			$direccion= $this->input->post('direccion');
			$comuna= $this->input->post('comuna');
			$region= $this->input->post('region');
			$tratamiento= $this->input->post('tratamiento');
			$notas= $this->input->post('notas');




			$this->load->model('Nino_model');
			$this->nino_model->crearAnam($nombre,$edad,$rut,$sexo,$fam,$escolaridad,$colegio,$direccion,$comuna,$region,$tratamiento,$notas);
			$this->load->view('Pagina/ingreso');
			echo 'anamnesis OK';



			echo "Totos los datos estan ok: ".$this->input->post('nombre');
			//$this->load->view('formsuccess');
	
  	}
	*/


  $this->load->helper('form');
  $this->load->library('form_validation');

  $this->form_validation->set_rules('nombre', 'Nombre', 'required');
  $this->form_validation->set_rules('rut', 'Rut', 'required');
  $this->form_validation->set_rules('fecha', 'Fecha', 'required');
  $this->form_validation->set_rules('edad', 'Edad', 'required');
  $this->form_validation->set_rules('telefono', 'Telefono', 'required');
  $this->form_validation->set_rules('Laboratorio', 'laboratorio', 'required');
  $this->form_validation->set_rules('motivo', 'Motivo Consulta', 'required');

  if ($this->form_validation->run() == FALSE) {
    $this->load->view('Pagina/ingreso');
  } else {
    $nombre = $this->input->post('nombre');
    $rut = $this->input->post('rut');
    $fecha = $this->input->post('fecha');
    $edad = $this->input->post('edad');
    $sexo = $this->input->post('sexo');
    $telefono = $this->input->post('telefono');
    $laboratorio = $this->input->post('laboratorio');
    $diagnostico = $this->input->post('diagnostico');
    $motivo = $this->input->post('motivo');
    $ayudas = $this->input->post('ayudas');
    $ocupacion = $this->input->post('ocupacion');
    $notas = $this->input->post('notas');
    $this->load->model('Nino_model');
    $this->Nino_model->crearIngreso($nombre,$rut,$fecha,$edad,$sexo,$telefono,$laboratorio,$diagnostico,$motivo,$ayudas,$ocupacion,$notas);
   $this->load->view('Pagina/ingreso');
    echo 'Paciente Ingresado';
    
  }

  }
	


 /* function login(){

   $this->load->helper(array('form'));
   
   $this->load->view('Pagina/footer');
   
  }
	*/
function administracion()
  {
    try{
 
    /* Creamos el objeto */
    $crud = new grocery_CRUD();
 
    /* Seleccionamos el tema */
    $crud->set_theme('flexigrid');
 
    /* Seleccionmos el nombre de la tabla de nuestra base de datos*/
    $crud->set_table('ft_nino');
 
    /* Le asignamos un nombre */
    $crud->set_subject('Fichas_Tratamiento');
 
    /* Asignamos el idioma español */
    $crud->set_language('spanish');
 
    /* Aqui le decimos a grocery que estos campos son obligatorios */
    $crud->required_fields(
      'id',
      'ftn_nombre',
      'ftn_profesional',
      'ftn_fecha',
      'ftn_lab',
      'ftn_com'
    );
 
    /* Aqui le indicamos que campos deseamos mostrar */
    $crud->columns(
   		'id',
      'ftn_nombre',
      'ftn_profesional',
      'ftn_fecha',
      'ftn_lab',
      'ftn_com'
    );
 
    /* Generamos la tabla */
    $output = $crud->render();
 		$this->load->view('Pagina/consulta');
    /* La cargamos en la vista situada en
    /applications/views/productos/administracion.php */
    $this->load->view('Pagina/administracion', $output);
	 $this->load->view('Pagina/footer');
    }catch(Exception $e){
      /* Si algo sale mal cachamos el error y lo mostramos */
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }
	
	
   function crearficha() {
  $this->load->helper('form');
  $this->load->library('form_validation');

  $this->form_validation->set_rules('nombre', 'Nombre', 'required');
  $this->form_validation->set_rules('profesional', 'Profesional', 'required');
  $this->form_validation->set_rules('fecha', 'Fecha', 'required');
  $this->form_validation->set_rules('laboratorio', 'Laboratorio', 'required');
  $this->form_validation->set_rules('comentario', 'Comentario', 'required');

  if ($this->form_validation->run() == FALSE) {
    $this->load->view('Pagina/preguntas');
  } else {
    $nombre = $this->input->post('nombre');
    $profesional = $this->input->post('profesional');
    $fecha = $this->input->post('fecha');
    $laboratorio = $this->input->post('laboratorio');
    $comentario = $this->input->post('comentario');
    $this->load->model('Ficha_model');
    $this->Ficha_model->crearFicha($nombre,$profesional, $fecha, $laboratorio, $comentario);
   $this->load->view('Pagina/preguntas');
    echo 'Ficha insertada';
    
  }
}

   function crearficha_nino() {
  $this->load->helper('form');
  $this->load->library('form_validation');

  $this->form_validation->set_rules('nombre', 'Nombre', 'required');
  $this->form_validation->set_rules('profesional', 'Profesional', 'required');
  $this->form_validation->set_rules('fecha', 'Fecha', 'required');
  $this->form_validation->set_rules('laboratorio', 'Laboratorio', 'required');
  $this->form_validation->set_rules('comentario', 'Comentario', 'required');

  if ($this->form_validation->run() == FALSE) {
    $this->load->view('Pagina/preguntas');
  } else {
    $nombre = $this->input->post('nombre');
    $profesional = $this->input->post('profesional');
    $fecha = $this->input->post('fecha');
    $laboratorio = $this->input->post('laboratorio');
    $comentario = $this->input->post('comentario');
    $this->load->model('Ficha_model_nino');
    $this->Ficha_model_nino->crearFichanino($nombre,$profesional, $fecha, $laboratorio, $comentario);
   $this->load->view('Pagina/preguntas');
    echo 'Ficha insertada';
    
  }
}	
	
	
	
	
	
	
	
	
	
	
	
}
?>