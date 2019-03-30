<?php

class SolicitudModel extends CI_Model {

    public function create_solicitud($monto,$edad,$tarjeta,$plazo){
        $datetime= getdate();
        $data = array(
            'monto'=> $monto,
            'edad'=> $edad,
            'tarjeta_de_credito'=> $tarjeta,
            'plazo'=> $plazo,
            'fecha'=> $datetime['year']."-".$datetime['mon']."-".$datetime['mday'],
            'id_usuario'=> $this->session->userdata('id'),
        );
        $this->db->insert('credito',$data);
    }
}