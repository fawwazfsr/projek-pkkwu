<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kariawan extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->template->load('admin/template','admin/form_kariawan');
	}
    public function simpan()
	{
		$namafile = date('YmdHis').'.jpg';
        $config['upload_path']          = 'aset/temadmin/img/kariawan';
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
			'nama' => $this->input->post('nama_kariawan'),
			'jabatan' => $this->input->post('jabatan'),
			'foto' => $namafile
		 );
		 $this->db->insert('kariawan',$data);
		 redirect('admin/kariawan/');
	}
}