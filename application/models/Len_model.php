<?php

class Len_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearFicha($data){
		$this->db->insert('anamnesis_lenguaje',array(
			'anl_rut'=>$data['rut'],
			'anl_nombre'=>$data['nombre'],
			'anl_fecha_nacimiento'=>$data['fechan'],
			'anl_edad'=>$data['edad']));/*
			'anl_idioma'=>$data['idioma'],
			'anl_direccion'=>$data['direccion'],
			'anl_numfon'=>$data['numfon'],
			'anl_estado_civil'=>$data['estado_civil'],
			'anl_hijos'=>$data['hijos'],
			'anl_con_quien_vive'=>$data['conQuienVive'],
			'anl_fam_acompañante'=>$data['famAcompanante'],
			'anl_derivado_p'=>$data['derivadoP'],
			'anl_fecha_evaluacion'=>$data['fechaEvaluacion'],
			'anl_escolaridad'=>$data['escolaridad'],
			'anl_desempeño_escolar'=>$data['desempenoEscolar'],
			'anl_mejor_desempeño'=>$data['mejorDesempeno'],
			'anl_peor_desempeño'=>$data['peorDesempeno'],
			'anl_escolaridad_padres'=>$data['escolaridadPadres'],
			'anl_profesion_oficio'=>$data['profesionOficio'],
			'anl_perferc'=>$data['perferc'],
			'anl_años_perfec'=>$data['anosPerfec'],
			'anl_ocupacion_prev'=>$data['ocupacionPrev'],
			'anl_situacion_queja'=>$data['situacionQueja'],
			'anl_situacion_act'=>$data['situacionAct'],
			'anl_habilidad_no'=>$data['habilidadNo'],
			'anl_actividades_previ'=>$data['actividadPrevi'],
			*/

	}
}

?>