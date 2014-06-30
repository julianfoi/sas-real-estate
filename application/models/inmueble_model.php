<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inmueble_Model
 *
 * @author Julian Ortiz 
 */
class Inmueble_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_units() {
//        $query= $this->db->query("SELECT * FROM coinor");
        $query = $this->db->get('coinor');
        return $query->result_array();
    }

    function get_for_rent() {
        $this->db->select('*');
        $this->db->from('coinor');
        $this->db->where("inmueble", '1');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_for_sale() {
//        $query= $this->db->where("inmueble =",$EN_VENTA);
        $this->db->select('*');
        $this->db->from('coinor');
        $this->db->where("inmueble", '2');
        $query = $this->db->get();
        return $query->result_array();
    }

    function add_unit($unit, $image) {
        $didItGoThrough=$this->db->insert('inmuebles',$unit);
//        $didItGoThrough = TRUE;
        if ($didItGoThrough) {
             $newImageId=$this->db->insert_id();
//            $newImageId = 999999;
            return $this->relocateImage($image, $newImageId);
        } else {
            $msg = $this->db->_error_message();
            $num = $this->db->_error_number();

            log_message('error', '<INMUEBLE_MODEL> ERROR ADDING UNIT DB MESSAGE '.$msg);
            log_message('error', '<INMUEBLE_MODEL> ERROR ADDING UNIT DB ERRRO CODE '.$num);
            return array( RESPONSE_CODE => ERROR_ADDING_UNIT, 'REASON'=>$msg);
        }
    }

    function relocateImage($Image, $newId) {
//      
        $image_ary = array(
            'file' => $Image['file_name'],
            'full_path' => $Image['full_path'],
            'width' => $Image['image_width'],
            'height' => $Image['image_height'],
            'type' => $Image['image_type'],
            'size' => $Image['file_size'],
            'date' => time(),
        );
//        
//        $config['image_library'] = '/usr/local/bin/convert';
////        $config['library_path']= 'imagemagick';
//        $config['source_image'] = $image_ary['full_path'];
////        $config['new_image']='/images/picture.jpg';
//        $config['new_image'] = PICTURE_PATH . $newId . IMAGE_TYPE_JPG;
//        $config['width'] = $image_ary['width'];
//        $config['height'] = $image_ary['height'];


//        $this->load->library('image_lib');
//        $this->image_lib->initialize($config);
//        $this->image_lib->fit();
//        
//        $image_data=fopen($this->gallery_path.'/'.$upload_data['file_name'],'rb');
//        $image_data1= fread($image_data,$upload_data['file_size']);
//        $image_type='image/'.$upload_data['image_type'];        
        $image_tempname = $image_ary['full_path'];
//        $today = date("Y-m-d");
//upload image and check for image type
//        $ImageDir = "fotos/";
        $ImageName = $image_tempname;

        $lastpicid = $newId;
//change the following line:
//        $newfilename = PICTURE_PATH . $newId . IMAGE_TYPE_JPG;
        $newfilename = TMP_MULTIMEDIA_PATH . $newId . IMAGE_TYPE_JPG;
//**insert these lines
        log_message('info', 'THIS IS THE VALUE OF IMAGE TYPE '.$image_ary['type'] );
        log_message('info', 'THIS IS THE VALUE OF IMAGE TEMPNAME '.$image_tempname );
        log_message('info', 'THIS IS THE VALUE OF NEW FILE NAME '.$newfilename );
        if ($image_ary['type'] === 'jpg') {
            rename($ImageName, $newfilename);
        } else {
            if ($image_ary['type'] === 'gif') {
                $image_old = imagecreatefromgif($ImageName);
            } elseif ($image_ary['type'] === 'png') {
                $image_old = imagecreatefrompng($ImageName);
            }else{
                log_message('info', '<INMUEBLE_MODEL> PICTURE UPLOADED HAS NOT MATCHING/AUTHORIZED IMAGE TYPE');
                $msg='POR FAVOR REVISAR EL TIPO DE IMAGEN QUE SE HA SUBIDO';
                return array( RESPONSE_CODE => ERROR_ADDING_UNIT, 'REASON'=>$msg);
            }
//"convert" the image to jpg
            $image_jpg = imagecreatetruecolor($image_ary['width'], $image_ary['height']);
            imagecopyresampled($image_jpg, $image_old, 0, 0, 0, 0, $image_ary['width'], $image_ary['height'], $image_ary['width'], $image_ary['height']);
            imagejpeg($image_jpg, $newfilename);
            imagedestroy($image_old);
            imagedestroy($image_jpg);
            $msg='';
            return array( RESPONSE_CODE => SUCCESS, 'REASON'=>$msg);
        }
    }

}
