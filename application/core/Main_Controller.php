<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Main_Controller
 *
 * @author SPPDF
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller{
    private $menu;
    public  $dataUser;
    function __construct() {
        parent::__construct();  
        $this->load->model(array("Admin"));
        $this->menu = '';
        $this->loadCommonCss();
        $this->loadCommonJs();
        $this->dataUser = $this->ion_auth->user()->row();
//        configuration of application
        $this->init();
    }
    function getMenu() {
        return $this->menu;
    }

    function setMenu($menu) {
        $this->menu = $menu;
    }
    
    public function init() {
//        run configuration if the controller isn't auth
        if(strtolower($this->uri->segment(1)) != 'auth' || (strtolower($this->uri->segment(1)) == 'auth' && $this->ion_auth->logged_in())){
//            if the users isn't logged in, you out of system
            if (!$this->ion_auth->logged_in()) {
                // redirect them to the login page
                redirect('auth/login', 'refresh');
            }
//            create menu
            $this->createMenu();
        }
    }

    public function view($view, $vars = array(), $return = FALSE) {
//        load header
        $data["css"] = $this->cssjs->get_css();
        $data["js"] = $this->cssjs->get_js();
        $this->load->view('admin/header', $data);
//        load menu
        $menu["menu"] = $this->menu;
        $this->load->view('admin/menuLateral', $menu);
//        load your view
        $this->load->view($view, $vars, $return);
//        load footer
        $this->load->view('admin/footer', $data);
    }
    
    public function loadCommonCss() {
        $this->cssjs->add_css("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700", false);
        $this->cssjs->add_css("http://fonts.googleapis.com/css?family=Oswald:400,700,300", false);
        $this->cssjs->add_css(array(
            'jquery-ui-1.10.4.custom.min',
            'font-awesome.min',
            'bootstrap.min',
            'animate',
            'all',
            'main',
            'style-responsive',
            'zabuto_calendar.min',
            'pace',
            'jquery.news-ticker',
            'nestable',
            'jplist-custom'
        ));
        
//        load datatable
        $this->cssjs->add_css(array(
            base_url('recursos/script/lib/datatables/css/demo_table_jui'),
            base_url('recursos/script/lib/tabletools/css/dataTables.tableTools'),
        ), false);
    }
    
    public function loadCommonJs() {
//        $this->cssjs->add_js("jquery.getvals_plugin");
//        loading common files
        $this->cssjs->add_js(array(
            'jquery-1.10.2.min',
            "jquery.getvals_plugin",
            'jquery-migrate-1.2.1.min',
            'jquery-ui',
            'bootstrap.min',
            'bootstrap-hover-dropdown',
            'html5shiv',
            'respond.min',
            'jquery.metisMenu',
            'jquery.slimscroll',
            'jquery.cookie',
            'icheck.min',
            'custom.min',
            'jquery.news-ticker',
            'jquery.menu',
            'pace.min',
            'holder',
            'responsive-tabs',
            'jquery.flot',
            'jquery.flot.categories',
            'jquery.flot.pie',
            'jquery.flot.tooltip',
            'jquery.flot.resize',
            'jquery.flot.fillbetween',
            'jquery.flot.stack',
            'jquery.flot.spline',
            'zabuto_calendar.min',
//            'index'
        ));
//        loading scripts for charts
        $this->cssjs->add_js(array(
            'highcharts',
            'data',
            'drilldown',
            'exporting',
            'highcharts-more',
            'charts-highchart-pie',
            'charts-highchart-more',
            'modernizr.min',
            'jplist.min',
            'jplist',
            'animation'
        ));
        
//        loading plugin dropdown
        $this->cssjs->add_js(array(
            'jquery.nestable',
        ));
//        loading core of template
        $this->cssjs->add_js("main");
//        load datatable
        $this->cssjs->add_js(array(
            base_url('recursos/script/lib/datatables/js/jquery.dataTables.min'),
            base_url('recursos/script/lib/datatables/js/dataTables.plugins'),
            base_url('recursos/script/lib/datatables/extras/ColVis/media/js/ColVis.min'),
            base_url('recursos/script/lib/tabletools/js/dataTables.tableTools'),
        ), false);
        
//        librerias que chocan
        $this->cssjs->add_js(array(
            'charts-flotchart',
            'ui-nestable-list'
        ));
        
        
    }
    
    public function loadAngular() {
        $this->cssjs->add_js(array(
            'lib/angular-1.4.8/angular.min',
            'lib/angular-1.4.8/angular-ui-router',
            'lib/angular-1.4.8/angular-touch.min',
            'lib/angular-1.4.8/angular-scenario',
            'lib/angular-1.4.8/angular-sanitize.min',
            'lib/angular-1.4.8/angular-route.min',
            'lib/angular-1.4.8/angular-resource.min',
            'lib/angular-1.4.8/angular-messages.min',
            'lib/angular-1.4.8/angular-message-format.min',
            'lib/angular-1.4.8/angular-loader.min',
            'lib/angular-1.4.8/angular-cookies.min',
            'lib/angular-1.4.8/angular-aria.min',
            'lib/angular-1.4.8/angular-animate.min',
        ));
    }
    
    public function createMenu() {
        $sistemas = $this->Admin->getSistema($this->dataUser->id);
        $this->menu = '';
        if($sistemas != false){
            foreach ($sistemas as $sistema) {
                $this->menu .= '<li>
                        <a href="#">
                            <i class="fa fa-edit fa-fw"></i>
                            <span class="menu-title">'.$sistema->nombreSistema.'<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">';

                $modulos = $this->Admin->getModulos($this->dataUser->id, $sistema->nombreSistema);
                foreach ($modulos as $modulo) {
                    $this->menu .= '<li><a href="'.site_url($modulo->uri).'"><i class="fa"></i> '.$modulo->nombreModulo.'</a></li>';
                }

                $this->menu .= '</ul>';
            }
        }else{
            $this->menu .= '<div class="callout callout-danger">
                              <h4>Sin permisos!</h4>
                              <p>Comuniquese con el administrador del sistema para obtener permisos.</p>
                            </div>';
        }
    }
    
}
