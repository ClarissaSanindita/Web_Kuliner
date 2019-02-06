<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	// 	public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('M_galeri','mgl');
	// }

  public function index()
  {
    $data['konten']="v_galeri";
    $this->load->view('template', $data);
  }
}

 ?>
