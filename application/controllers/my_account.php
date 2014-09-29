<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_account extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->library(array('session'));
      $this->load->helper(array('url'));
  }

  public function index()
  {
    $this->load->view('templates/head');
    $this->load->view('templates/header');
    $this->load->view('my_account_view');
  }
}

/* End of file my_account.php */
/* Location: ./application/controllers/my_account.php */
