<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model{

    public function insert_data($tabel, $data)
    {
        return $this->db->insert($tabel,$data);
    }

    public function delete_data($tabel, $where)
    {
        return $this->db->delete($tabel,$where);
    }

    public function update_data($tabel, $data, $where){
        return $this->db->update($tabel, $data, $where);
    }

    public function get_data($tabel){
        return $this->db->get($tabel)->result_array();
    }

    public function get_where_data($tabel, $where){
        return $this->db->get_where($tabel,$where);
    }

    public function nomor_rm_generator() {
        // Ambil tahun dan bulan sekarang
        $tahun_bulan = date('Ym'); // Format: 202411
    
        // Hitung jumlah pasien yang terdaftar dengan prefix tahun-bulan yang sama
        $this->db->like('no_rm', $tahun_bulan, 'after'); // Menggunakan 'after' agar mencari yang setelah prefix tahun-bulan
        $this->db->from('pasien');
        $jumlah_pasien = $this->db->count_all_results(); // Menghitung jumlah pasien yang memiliki prefix yang sama
    
        // Posisi data adalah jumlah pasien + 1
        $posisi_data = $jumlah_pasien + 1;
        
        // Buat NoRM dengan format tahunbulan-posisi tanpa padding angka
        $norm = $tahun_bulan . '-' . $posisi_data; // Misalnya 202411-1, 202411-2
        
        return $norm;
    }

    public function get_data_dokter_with_poli(){
        $this->db->select('dokter.*, poli.id AS idpoli, poli.nama_poli');
        $this->db->from('dokter');
        $this->db->join('poli', 'dokter.id_poli = poli.id');
        return $this->db->get()->result_array();
    }

    public function get_where_data_dokter_and_poli($target){
        $this->db->select('dokter.*, poli.id AS poli_id, poli.nama_poli');
        $this->db->from('dokter');
        $this->db->join('poli', 'dokter.id_poli = poli.id');
        $this->db->where('dokter.id', $target['id']);
        return $this->db->get()->row_array();
    }

}