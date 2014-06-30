<?php

/**
 *  TODO:  Present error messages directly in front of the field
 */
/**
 * Description of Addunit
 *
 * @author Julian Ortiz 
 */
class Addunit extends CI_Controller {

    private $custom_errors = array();

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('date');
        $this->load->library('form_validation');
    }

    function index() {
        $this->load->view('addunit_form');
    }

    function validate_fields() {
//        realpath(APPPATH . '../img');
        $config['upload_path'] = TMP_MULTIMEDIA_PATH;
        $config['allowed_types'] = VALID_PICTURE_FORMATS;
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);
        $fileTagName = 'photo'; // <input  type='file'  name='photo'>

        if ($this->upload->do_upload($fileTagName)) {
            //Success in validation of all fields.
            $this->setValidationRules();
            if ($this->form_validation->run() == TRUE) {
                //Proceed to add the unit
                $this->load->model('inmueble_model','inmuebles');
                $new_unit=$this->convertFormDataToArray();
                $image_post_data=$this->upload->data();
                $result = $this->inmuebles->add_unit($new_unit,$image_post_data);
                if($result[RESPONSE_CODE]==SUCCESS){
                    $this->load->view('formsuccess');
                }
                else{
                    $this->form_validation->set_message('validate_fiedls',$result['REASON']);
                    $this->load->view('addunit_form');
                }
            }else{
                //Return errors after validating all other fields that are no image
                $this->load->view('addunit_form');
            }
                
            
        } else {
            $photoErrorMessage = 'Error en foto: ';
            //<input type="hidden" value="C1B2" name="pmctrl"
            $this->setValidationRules();
            $this->form_validation->set_rules('pmctrl', $photoErrorMessage, 'callback_display_photo_message');
            $this->form_validation->run();
            $this->load->view('addunit_form');
        }
    }
    function convertFormDataToArray() {
        return array(
        'inmueble' => $this->input->post('inmueble'),
        'lugar' => $this->input->post('lugar'),
        'zona' => $this->input->post('zona'),
        'tipo' => $this->input->post('tipo'),
        'edad' => $this->input->post('edad'),
        'area' => $this->input->post('area'),
        'descripcion' => $this->input->post('descripcion'),
        'valor' => $this->input->post('valor'),
        'fecha' => date("Y-m-d")
            
        );
    }

    function setValidationRules(){
         $this->form_validation->set_rules('inmueble', 'En Venta o Renta', 'required');
            $this->form_validation->set_rules('lugar', 'Lugar', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('zona', 'zona', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('tipo', 'Tipo', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('edad', 'Edad', 'trim|required|numeric|min_length[1]');
            $this->form_validation->set_rules('area', 'Area', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('valor', 'valor', 'trim|required|numeric|min_length[5]');
    }

    function display_photo_message() {
        $customizedPhotoMessage = $this->upload->display_errors('', '');
        $this->form_validation->set_message('display_photo_message', $customizedPhotoMessage);
        return FALSE;
    }
    
    

    function create_unit() {

        $this->form_validation->set_rules('inmueble', 'En Venta o Renta', 'required');
        $this->form_validation->set_rules('lugar', 'Lugar', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('zona', 'zona', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('tipo', 'Tipo', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('edad', 'Edad', 'trim|required|numeric|min_length[1]');
        $this->form_validation->set_rules('area', 'Area', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('valor', 'valor', 'trim|required|numeric|min_length[5]');
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $this->load->library('upload', $config);
            $fileTagName = 'photo'; // <input  type='file'  name='photo'>

            if ($this->upload->do_upload($fileTagName)) {
                //Success in validation of all fields.
            } else {
                //Failed to upload file.
                echo $this->upload->display_errors('', '');
            }
        } else {
            $this->load->view('addunit_form');
        }
    }

    function add_unit() {
        $ImageDir = "/fotos/";
        $today = date("Y-m-d");
//            
//        $image_tempname = $_FILES['image_filename']['name'];
        $image_tempname = $this->upload->data('client_name');
        $today = date("Y-m-d");
//upload image and check for image type
//        $ImageDir = "fotos/";
        $ImageName = $ImageDir . $image_tempname;
        if (move_uploaded_file($_FILES['image_filename']['tmp_name'], $ImageName)) {
//get info about the image being uploaded
//            list($width, $height, $type, $attr) = getimagesize($ImageName);
        }
        return FALSE;
    }

}
