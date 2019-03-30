<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {
    public function index(){
        $this->load->view('header');
        $this->load->view('Solicitudes/form_solicitud');
    }
    public function save_solicitud(){
        $monto = $this->input->post("Monto");
        $edad = $this->input->post("Edad");
        if($this->input->post("TarjetaDeCredito") == "on"){
            $tarjeta = true;
        }else{
            $tarjeta = false;
        }
        $plazo = $this->input->post("Plazo");
        /* Guarda la solicitud */
        $this->load->model('querys/SolicitudModel','solicitudQ');
        $this->solicitudQ->create_solicitud($monto,$edad,$tarjeta,$plazo);
        redirect(base_url(), 'refresh');
    }
}