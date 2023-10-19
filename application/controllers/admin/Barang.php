<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Cms_model');
    }
	public function index()
	{   $this->db->select('*')->from('barang');
        $this->db->order_by('id_barang','ASC');
        $barang = $this->db->get()->result_array();
        $data = array(
            'barang' => $barang,
            'judul_halaman' => "Halaman Registrasi"
        );
		$this->template->load('admin/template','admin/form_barang',array_merge($data));
	}
    public function simpan()
	{	
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'harga' => $this->input->post('harga'),
			'keterangan' => $this->input->post('keterangan')
		 );
		 $this->db->insert('barang',$data);
		 redirect('admin/barang/');
	}

	public function hapus($id_barang)
    {
        $filename=FCPATH.'/aset/temadmin/img/barang/'.$id_barang;
        if (file_exists($filename)){
            unlink("./aset/temadmin/img/barang/".$id_barang);
        }

        $where = array('foto' => $id_barang);

        $this->db->Delete('foto', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>data berhasil di hapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/barang/');
    }

	public function update()
    {
        
        $data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'harga' => $this->input->post('harga'),
			'keterangan' => $this->input->post('keterangan')
		);
        $where = array(
            'id_barang'      => $this->input->post('id_barang')
        );
		$data = $this->db->update('barang',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>data berhasil di simpan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/barang/');
    }
    
    
}