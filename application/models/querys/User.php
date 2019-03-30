<?php

class User extends CI_Model {

    public function get_user($user){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name', $user);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
        return "new_user";
    }
    public function create_user($user){
        $data = array(
            'user_name'=> $user
        );
        $this->db->insert('user',$data);
    }
    public function get_credit_history($user){
        $this->db->select('*');
        $this->db->from('credito');
        $this->db->where('id_usuario', $user);
        $this->db->order_by("fecha", "desc");
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ){
            return $query->result_array();
        }else{
            return array(
                array(
                    'monto'=> "0",
                    'edad'=> "0",
                    'tarjeta_de_credito'=> "0",
                    'plazo'=> "0",
                    'fecha'=> " ",
                    'id_usuario'=> "0",
                    'estatus'=> "0",
                    'autorizacion'=> "0"
                )
            );
        }
    }
}