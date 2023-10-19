<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms_model extends CI_Model {

	public function foto($id)
	{
        $this->db->from('foto');
        $this->db->where('id_barang',$id);
        return $this->db->get()->result_array();
	}
}