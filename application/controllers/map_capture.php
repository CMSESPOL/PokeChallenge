<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map_capture extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->library(array('session'));
      $this->load->helper(array('url'));
  }

  public function index()
  {
    $this->load->view('templates/head');
    $this->load->view('templates/header');
    $this->load->view('map_capture_view');
  }
}

/* End of file map_capture.php */
/* Location: ./application/controllers/map_capture.php */
