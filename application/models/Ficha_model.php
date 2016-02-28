<?php
class Ficha_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function crearFicha( $nombre,$profesional,$fecha,$laboratorio,$comentario) {
    $data = array(

      'fta_fecha' => $fecha,
      'fta_com' => $comentario,
      'fta_profesional' => $profesional,
      'fta_nombre' => $nombre,
      'fta_lab' => $laboratorio
      
    );

    $this->db->insert('ft_adulto', $data);
  }
}
?>