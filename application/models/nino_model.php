<?php

class Nino_model extends CI_Model{

	public function __construct(){
		
		parent::__construct();
	}

	public function crearAnam($nombre,$edad,$rut,$sexo,$fam,$escolaridad,$colegio,$direccion,$comuna,$region,$tratamiento,$notas){
		$data = array(
			'ann_nombre' => $nombre,
			'ann_edad' => $edad,
			'ann_rut' => $rut,
			'ann_sexo' => $sexo,
			'ann_familia' => $fam,
			'ann_escolaridad' => $escolaridad,
			'ann_colegio' => $colegio,
			'ann_dir' => $direccion,
			'ann_comuna' => $comuna,
			'ann_region' => $region,
			'ann_pTratamiento' => $tratamiento,
			'ann_notas' => $notas, 
		);
		
		$this->db->insert('anam_nino',$data);

	}

}