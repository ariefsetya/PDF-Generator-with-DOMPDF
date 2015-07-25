<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class general extends CI_Model {

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
	public function load($page,$data=array())
	{
		$this->session->set_userdata('idpengguna',1);
		$this->load->view('Utility/Header');
		$this->load->view('Utility/Menu');
		$this->load->view($page,$data);
		$this->load->view('Utility/Footer');
		$this->general->logdata($page,$data);
	}

	public function logdata($page,$data)
	{
		$in['post_data'] = json_encode($this->input->post());
		$in['get_data'] = json_encode($_GET);
		$in['server'] = json_encode($_SERVER);
		$in['data'] = json_encode($data);
		$in['page'] = $page;
		$in['url'] = current_url();
		$in['ip'] = $_SERVER['REMOTE_ADDR'];
		$in['idpengguna'] = ($this->session->userdata('idpengguna')!="")?$this->session->userdata('idpengguna'):0;
		$in['tanggal'] = date("Y-m-d");
		$in['jam'] = date("H:i:s");
		$in['day'] = date("l");
		$this->db->insert('ixvi_logdata',$in);
	}
}
