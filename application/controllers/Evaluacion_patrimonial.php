<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evaluacion_patrimonial
 *
 * @author SPPDF
 */
class Evaluacion_patrimonial extends Main_Controller {
    //put your code here
    public function index() {
//        $this->view("entorno/buscarIdEvaluado");
        
        $vistas["tab3"] = $this->load->view("entorno/tab3", '', true);
        $vistas["tab4"] = $this->load->view("entorno/tab4", '', true);
        $this->view("entorno/evaluacionPatrimonial", $vistas);
    }
}
