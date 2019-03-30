<?php

class SolicitudPending extends CI_Model {

    public function get_solicitudes(){
        $this->db->select('*');
        $this->db->from('credito');
        $this->db->where('estatus', 0);
        $this->db->where('autorizacion', 0);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ){
            return $query->result_array();
        }
        return 0;
    }
}