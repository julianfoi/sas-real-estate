<?php


/**
 * Description of Inmuebles
 *
 * @author Julian Ortiz 
 */
class Inmuebles extends CI_Controller {
    
    public function index() {
//        echo 'ingreso a inmuebles';
       $this->load->model('inmueble_model','inmuebles');
       $units=$this->inmuebles->get_units();
       $units_sale=$this->inmuebles->get_for_sale();
       $units_rent=$this->inmuebles->get_for_rent();
       $this->load->library('inmuebledto');
//       print_r($units);
       $data['title']='VIEW testing';
       $data['ALL']=$units;
       $data['FOR_RENT']=$units_rent;
       $data['FOR_SALE']=$units_sale;
       $this->load->view('header');
       $this->load->view('unidades',$data);
       $this->load->view('footer');
    }
    
    public function add(){
        $this->load->helper('helper','inmuebles');
        $this->load->model('inmueble_model','inmuebles');
    }
    
}
