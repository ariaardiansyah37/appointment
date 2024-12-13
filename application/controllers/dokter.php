<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('mymodel');
    }

	public function index()
	{
		if($this->session->userdata('role')==='dokter'){
			$data['user'] = $this->db->get_where('user',['id'=>$this->session->userdata('id')])->row_array();
			$this->load->view('v_dashboard_dokter', $data);
		}
		else{
			redirect('auth');
		}
	}
}
