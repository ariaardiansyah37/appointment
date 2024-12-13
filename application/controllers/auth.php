<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('mymodel');
    }

	public function index()
	{
		if($this->session->userdata('role')==='admin'){
			redirect('admin');
		}
		elseif($this->session->userdata('role')==='dokter'){
			redirect('dokter');
		}
		elseif($this->session->userdata('role')==='pasien'){
			redirect('pasien');
		}
		else{
			$this->load->view('auth/login');
		}
	}

	public function page_daftar(){
		if($this->session->userdata('role')==='admin'){
			redirect('admin');
		}
		elseif($this->session->userdata('role')==='dokter'){
			redirect('dokter');
		}
		elseif($this->session->userdata('role')==='pasien'){
			redirect('pasien');
		}
		else{
			$this->load->view('auth/daftar');
		}	
	}

	public function proses_login(){
		$username = $this->input->post('usernamePasien');
		$password = $this->input->post('passwordPasien');

		$cekUser = $this->db->get_where('user',['username'=>$username])->row_array();
		if($cekUser > 0){
			$pass = password_verify($password, $cekUser['password']);
			if($pass){
				$session = [
					'id' => $cekUser['id'],
					'role' => $cekUser['role']
				];
				$this->session->set_userdata($session);
				header('Content-Type: application/json');
				echo json_encode(['status' => 'oke']);
			}else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'pass']);
			}
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function proses_daftar(){
		$nama = $this->input->post('namaPasien');
		$alamat = $this->input->post('alamatPasien');
		$no_ktp = $this->input->post('no_ktpPasien');
		$no_hp = $this->input->post('no_hpPasien');
		$cekKTP = $this->db->get_where('pasien',['no_ktp'=>$no_ktp])->row_array();
		if($cekKTP){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed', 'message' => '']);
		}
		else{
			$dataUser = [
				'username' => $nama,
				'password' => password_hash($alamat, PASSWORD_BCRYPT),
				'role' => 'pasien'
			];
			$this->db->insert('user', $dataUser);

			$iduser = $this->db->insert_id();
			$dataPasien = [
				'nama' => $nama,
				'alamat' => $alamat,
				'no_ktp' => $no_ktp,
				'no_hp' => $no_hp,
				'no_rm' => $this->mymodel->nomor_rm_generator(),
				'id_user' => $iduser
			];
			$this->db->insert('pasien', $dataPasien);
			header('Content-Type: application/json');
			echo json_encode(['status' => 'oke', 'message' => '']);
		}
	}

	public function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('role');
        redirect('auth');
    }
}
