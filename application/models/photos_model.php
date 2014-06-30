<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of photos_model
 *
 * @author Julian Ortiz 
 */
class photos_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    
    function get_for_rent(){
        $this->db->select('*');
        $this->db->from('fotos');
        $this->db->where("inmueble",'*******');
        $query= $this->db->get();
        return $query->result_array();
    }
}
