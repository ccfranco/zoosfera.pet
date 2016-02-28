<?php
class Ficha_model_nino extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function crearFichanino( $nombre,$profesional,$fecha,$laboratorio,$comentario) {
    $data = array(

      'ftn_fecha' => $fecha,
      'ftn_com' => $comentario,
      'ftn_profesional' => $profesional,
      'ftn_nombre' => $nombre,
      'ftn_lab' => $laboratorio
      
    );

    $this->db->insert('ft_nino', $data);
  }
}
?>