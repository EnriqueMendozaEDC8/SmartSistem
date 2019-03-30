<?php

class SolicitudProcess extends CI_Model {

    public function process_solicitudes($solicitudes){
        if($solicitudes != 0){
            foreach ($solicitudes as $row) {
                if($row['edad']>19 && $row['tarjeta_de_credito']==1){
                    $this->db->where('id_solicitud', $row['id_solicitud']);
                    $this->db->update('credito', array('estatus' => 1,'autorizacion' => 1));
                }else{
                    $this->db->where('id_solicitud', $row['id_solicitud']);
                    $this->db->update('credito', array('estatus' => 1,'autorizacion' => 0));
                }
            }
        }
        
    }
}