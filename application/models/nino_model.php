<?php

class Nino_model extends CI_Model{

	public function __construct(){
		
		parent::__construct();
	}

	public function crearAnam($nombre,$rut,$fecha,$edad,$sexo,$telefono,$laboratorio,$diagnostico,$motivo,$ayudas,$ocupacion,$notas){
		$data = array(
			'ann_nombre' => $nombre,
			'ann_rut' => $rut,
			'ann_edad' => $edad,
			'ann_fecha' => $fecha,
			'ann_edad' => $edad,
			'ann_sexo' => $sexo,
			'ann_telefono' => $telefono,
			'ann_laboratorio' => $laboratorio,
			'ann_diagnostico' => $diagnostico,
			'ann_motivo' => $motivo,
			'ann_ayudas' => $ayudas,
			'ann_ocupacion' => $ocupacion,
			'ann_notas' => $notas, 
		);
		
		$this->db->insert('anam_nino',$data);

	}

}