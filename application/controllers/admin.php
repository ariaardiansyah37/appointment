<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('mymodel');
    }

	public function index()
	{
		if($this->session->userdata('role')==='admin'){
			$data['user'] = $this->db->get_where('user',['id'=>$this->session->userdata('id')])->row_array();
			$this->load->view('v_dashboard_admin', $data);
		}
		else{
			redirect('auth');
		}
	}

	public function view_data_dokter(){
		if($this->session->userdata('role')==='admin'){
			$data['user'] = $this->db->get_where('user',['id'=>$this->session->userdata('id')])->row_array();
			$data['poli'] = $this->db->get('poli')->result_array();
			$this->db->select('dokter.*, poli.nama_poli');
			$this->db->from('dokter');
			$this->db->join('poli', 'dokter.id_poli = poli.id');
			$data['dokter'] = $this->db->get()->result_array();
			$this->load->view('v_data_dokter', $data);
		}
		else{
			redirect('auth');
		}
	}

	public function view_data_pasien(){
		if($this->session->userdata('role')==='admin'){
			$data['user'] = $this->db->get_where('user',['id'=>$this->session->userdata('id')])->row_array();
			$data['pasien'] = $this->db->get('pasien')->result_array();
			$this->load->view('v_data_pasien', $data);
		}
		else{
			redirect('auth');
		}
	}

	public function view_data_poli(){
		if($this->session->userdata('role')==='admin'){
			$data['user'] = $this->db->get_where('user',['id'=>$this->session->userdata('id')])->row_array();
			$data['poli'] = $this->db->get('poli')->result_array();
			$this->load->view('v_data_poli', $data);
		}
		else{
			redirect('auth');
		}
	}

	public function view_data_obat(){
		if($this->session->userdata('role')==='admin'){
			$data['user'] = $this->db->get_where('user',['id'=>$this->session->userdata('id')])->row_array();
			$data['obat'] = $this->db->get('obat')->result_array();
			$this->load->view('v_data_obat', $data);
		}
		else{
			redirect('auth');
		}
	}

	public function tambah_poli(){
		$nama_poli = $this->input->post('namaPoli');
		$keterangan = $this->input->post('keteranganPoli');

		$datas = [
			'nama_poli' => $nama_poli,
			'keterangan' => $keterangan
		];

		if($this->db->insert('poli',$datas)){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'oke']);
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function ambil_data_poli_by_id(){
		$idpoli = $this->input->post('id');
		$data = $this->db->get_where('poli',['id'=>$idpoli])->row_array();
		if($data){
			echo json_encode($data);
		}
	}

	public function ubah_poli(){
		$id_poli = $this->input->post('idPoli');
		$nama_poli = $this->input->post('namaPoli');
		$keterangan = $this->input->post('keteranganPoli');

		$datas = [
			'nama_poli' => $nama_poli,
			'keterangan' => $keterangan
		];

		$where = ['id'=>$id_poli];

		if($this->db->update('poli',$datas,$where)){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'oke']);
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function hapus_poli(){
		$id_poli = $this->input->post('id');
		$where = ['id'=>$id_poli];

		if($this->db->delete('poli',$where)){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'oke']);
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}
	
	public function tambah_obat(){
		$nama_obat = $this->input->post('namaObat');
		$kemasan = $this->input->post('kemasanObat');
		$harga = $this->input->post('hargaObat');

		$datas = [
			'nama_obat' => $nama_obat,
			'kemasan' => $kemasan,
			'harga' => $harga,
		];

		if($this->db->insert('obat',$datas)){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'oke']);
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function ambil_data_obat_by_id(){
		$idobat = $this->input->post('id');
		$data = $this->db->get_where('obat',['id'=>$idobat])->row_array();
		if($data){
			echo json_encode($data);
		}
	}

	public function ubah_obat(){
		$id_obat = $this->input->post('idObat');
		$nama_obat = $this->input->post('namaObat');
		$kemasan = $this->input->post('kemasanObat');
		$harga = $this->input->post('hargaObat');

		$datas = [
			'nama_obat' => $nama_obat,
			'kemasan' => $kemasan,
			'harga' => $harga,
		];

		$where = ['id'=>$id_obat];

		if($this->db->update('obat',$datas,$where)){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'oke']);
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function hapus_obat(){
		$id_obat = $this->input->post('id');
		$where = ['id'=>$id_obat];

		if($this->db->delete('obat',$where)){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'oke']);
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function tambah_dokter(){
		$nama_dokter = $this->input->post('namaDokter');
		$alamat = $this->input->post('alamatDokter');
		$no_hp = $this->input->post('no_hpDokter');
		$poli = $this->input->post('poliDokter');
		
		$dataUser = [
			'username' => $nama_dokter,
			'password' => password_hash($alamat, PASSWORD_BCRYPT),
			'role' => 'dokter'
		];

		if($this->db->insert('user',$dataUser)){
			$iduser = $this->db->insert_id();
			$datas = [
				'nama' => $nama_dokter,
				'alamat' => $alamat,
				'no_hp' => $no_hp,
				'id_poli' => $poli,
				'id_user' => $iduser
			];
			if($this->db->insert('dokter',$datas)){
				header('Content-Type: application/json');
				echo json_encode(['status' => 'oke']);
			}
			else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'failed']);
			}
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function ambil_data_dokter_by_id(){
		$iddokter = $this->input->post('id');
		$data = $this->db->get_where('dokter',['id'=>$iddokter])->row_array();
		if($data){
			echo json_encode($data);
		}
	}

	public function ubah_dokter(){
		$id_dokter = $this->input->post('idDokter');
		$nama_dokter = $this->input->post('namaDokter');
		$alamat = $this->input->post('alamatDokter');
		$no_hp = $this->input->post('no_hpDokter');
		$idPoli = $this->input->post('idPoli');
		$iduser = $this->input->post('iduser');

		$dataUser = [
			'username' => $nama_dokter,
			'password' => password_hash($alamat, PASSWORD_BCRYPT)
		];

		$datas = [
			'nama' => $nama_dokter,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'id_poli' => $idPoli,
		];

		$where = ['id'=>$id_dokter];
		$whereUser = ['id'=>$iduser];

		if($this->db->update('dokter',$datas,$where)){
			if($this->db->update('user',$dataUser, $whereUser)){
				header('Content-Type: application/json');
				echo json_encode(['status' => 'oke']);
			}
			else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'failed']);
			}
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function hapus_dokter(){
		$id_dokter = $this->input->post('id');
		$dokter = $this->db->get_where('dokter',['id'=>$id_dokter])->row_array();
		$where = ['id'=>$dokter['id_user']];

		if($this->db->delete('user',$where)){
			$where = ['id'=>$id_dokter];
			if($this->db->delete('dokter',$where)){
				header('Content-Type: application/json');
				echo json_encode(['status' => 'oke']);
			}else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'failed']);
			}
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function tambah_pasien(){
		$nama_pasien = $this->input->post('namapasien');
		$alamat = $this->input->post('alamatpasien');
		$no_hp = $this->input->post('no_hppasien');
		$no_ktp = $this->input->post('no_ktppasien');
		
		$dataUser = [
			'username' => $nama_pasien,
			'password' => password_hash($alamat, PASSWORD_BCRYPT),
			'role' => 'pasien'
		];

		if($this->db->insert('user',$dataUser)){
			$iduser = $this->db->insert_id();
			$datas = [
				'nama' => $nama_pasien,
				'alamat' => $alamat,
				'no_ktp' => $no_ktp,
				'no_hp' => $no_hp,
				'no_rm' => $this->mymodel->nomor_rm_generator(),
				'id_user' => $iduser
			];
			if($this->db->insert('pasien',$datas)){
				header('Content-Type: application/json');
				echo json_encode(['status' => 'oke']);
			}
			else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'failed']);
			}
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

	public function ambil_data_pasien_by_id(){
		$idpasien = $this->input->post('id');
		$data = $this->db->get_where('pasien',['id'=>$idpasien])->row_array();
		if($data){
			echo json_encode($data);
		}
	}

public function ubah_pasien(){
		$id_pasien = $this->input->post('idPasien');
		$nama_pasien = $this->input->post('namaPasien');
		$alamat = $this->input->post('alamatPasien');
		$no_hp = $this->input->post('no_hpPasien');
		$no_ktp = $this->input->post('no_ktpPasien');
		$iduser = $this->input->post('iduser');

		$dataUser = [
			'username' => $nama_pasien,
			'password' => password_hash($alamat, PASSWORD_BCRYPT)
		];

		$datas = [
			'nama' => $nama_pasien,
			'alamat' => $alamat,
			'no_ktp' => $no_ktp,
			'no_hp' => $no_hp,
		];

		$where = ['id'=>$id_pasien];
		$whereUser = ['id'=>$iduser];

		$cekKTP = $this->db->get_where('pasien',['no_ktp'=>$no_ktp])->row_array();
		if($cekKTP && $cekKTP['id'] === $id_pasien){
			if($this->db->update('pasien',$datas,$where)){
				if($this->db->update('user',$dataUser, $whereUser)){
					header('Content-Type: application/json');
					echo json_encode(['status' => 'oke']);
				}
				else{
					header('Content-Type: application/json');
					echo json_encode(['status' => 'failed']);
				}
			}
			else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'failed']);
			}
		}
		elseif($cekKTP){
			header('Content-Type: application/json');
			echo json_encode(['status' => 'duplikat']);
		}
		else{
			if($this->db->update('pasien',$datas,$where)){
				if($this->db->update('user',$dataUser, $whereUser)){
					header('Content-Type: application/json');
					echo json_encode(['status' => 'oke']);
				}
				else{
					header('Content-Type: application/json');
					echo json_encode(['status' => 'failed']);
				}
			}
			else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'failed']);
			}
		}
		
	}

	public function hapus_pasien(){
		$id_pasien = $this->input->post('id');
		$pasien = $this->db->get_where('pasien',['id'=>$id_pasien])->row_array();
		$where = ['id'=>$pasien['id_user']];

		if($this->db->delete('user',$where)){
			$where = ['id'=>$id_pasien];
			if($this->db->delete('pasien',$where)){
				header('Content-Type: application/json');
				echo json_encode(['status' => 'oke']);
			}else{
				header('Content-Type: application/json');
				echo json_encode(['status' => 'failed']);
			}
		}
		else{
			header('Content-Type: application/json');
			echo json_encode(['status' => 'failed']);
		}
	}

}
