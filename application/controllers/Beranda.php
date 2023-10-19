<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Cms_model');
    }

	public function index()
	{
        $this->db->from('barang');
        $barang = $this->db->get()->result_array();

        $this->db->from('about');
        $about = $this->db->get()->row();

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        
        $data = array(
            'konfigurasi'   => $konfigurasi,
            'about'         => $about,
            'barang'        => $barang,
            'galeri'        => $galeri,
            'judul_halaman' => "Halaman Registrasi"
        );
		$this->load->view('brnda',array_merge($data));
	}
}