<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->general->load('Home/Home');
	}

	public function save_to_pdf()
	{
	    $html = $this->load->view('Home/Home', NULL, true);
	    $data = pdf_create($html, '', false);
	    write_file("assets/pdf/".date("Y-m-d H:i:s").'.pdf', $data);
	}
	
	public function download_pdf()
	{
	    $html = $this->load->view('Home/Home', NULL, true);
	    pdf_create($html, date("Y-m-d H:i:s"));
	}
	
}
