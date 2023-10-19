<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {

	public function index()
	{
		{   $this->db->from('foto');
			$galeri = $this->db->get()->result_array();
			$data = array(
				'galeri' => $galeri,
				'judul_halaman' => "Halaman barang"
			);
			$this->template->load('admin/template','admin/form_barang',array_merge($data));
		}
	}
	public function simpan()
	{
		$namafile = date('YmdHis').'.jpg';
        $config['upload_path']          = 'aset/temadmin/img/barang';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']        = '*';
        $config['file_name']            = $namafile;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galeri/'.$this->input->post('foto'));  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

		$data = array(
			'id_barang' => $this->input->post('id_barang'),
			'foto' => $namafile
		 );
		 $this->db->insert('foto',$data);
		 redirect('admin/barang/');
	}

	public function hapus($id_galeri)
    {
        $filename=FCPATH.'/aset/temadmin/img/galeri/'.$id_galeri;
        if (file_exists($filename)){
            unlink("./aset/temadmin/img/galeri/".$id_galeri);
        }

        $where = array('foto' => $id_galeri);

        $this->db->Delete('galeri', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>data berhasil di hapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/barang/');
    }

}
