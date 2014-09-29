<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ranking extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->library(array('session'));
      $this->load->helper(array('url'));
  }

  public function index()
  {
    $this->load->view('templates/head');
    $this->load->view('templates/header');
    $this->load->view('ranking_view');
  }
}

/* End of file ranking.php */
/* Location: ./application/controllers/ranking.php */
