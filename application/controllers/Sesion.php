<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller {

	public function index(){
		$this->load->view('header');
		$this->load->model('querys/User','userQ');
		/* verificar la sesion */
		$infoData = array(
			'infoData' =>  $this->userQ->get_credit_history($this->session->userdata('id'))
		);
		if($this->session->userdata('user_name') !=''){
			$this->load->view(
				'dashboard',$infoData
			);
		}else{ 
			$this->load->view('form');
		}
	}

	public function log_in(){
		$this->load->view('header');
		$this->load->model('querys/User','userQ');
		$user = $this->input->post("User");
		/* Verificar que el nombre de usuario no sea muy corto */
		if(strlen($user) < 3){
			$this->load->view('form');
			return;
		}
		$user_data = $this->userQ->get_user($user);
		/* Si es un usuario nuevo se crea */
		if($user_data== "new_user"){
			$this->userQ->create_user($user);
			$user_data = $this->userQ->get_user($user);
		}
		/* Asigna el usuario a la sesion */
		$data = array(
			'id'=> $user_data['id_user'],
            'user_name'=> $user
        );
		$this->session->set_userdata($data);
		redirect(base_url(), 'refresh');
	}
	public function log_out(){
		/* se cierra sesion*/
		$data = array(
            'id'=> '',
            'user_name'=> ''
        );
		$this->session->set_userdata($data);
		redirect(base_url(), 'refresh');
	}
}
