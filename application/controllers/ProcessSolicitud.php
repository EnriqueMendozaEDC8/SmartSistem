<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProcessSolicitud extends CI_Controller {
    public function updateSolicitudes(){
        /*Obtiene las solicitudes que aun no han sido procesadas para procesarlas*/
        $this->load->model('querys/SolicitudPending','solicitudP');
        $this->load->model('businessIntelligence/SolicitudProcess','solicitudBI');
        $solicitudes = $this->solicitudP->get_solicitudes();
        $this->solicitudBI->process_solicitudes($solicitudes);

    }
}