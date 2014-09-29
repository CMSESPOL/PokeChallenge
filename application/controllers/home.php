<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
    }

    public function index()
    {
        if($this->session->userdata('rol') == FALSE)
        {
            redirect(base_url().'login');
        }
        $this->load->view('templates/head');
        $this->load->view('templates/header');

        $data['titulo'] = 'Bienvenido a la web '.$this->session->userdata('rol');
        $this->load->view('home_view',$data);
    }
}
