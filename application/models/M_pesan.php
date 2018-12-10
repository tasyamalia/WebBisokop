<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {

		public function tm_pesan ()
	{
		return $this->db->where('id_pembeli',$this->session->userdata('id_pembeli'))->get('nota')->result();
	}
	public function hapus($id)
	{
		$this->db->where('id_nota', $id)->delete('pembelian');
		$this->db->where('id_nota', $id)->delete('nota');
		redirect('pesanan','refresh');
	}

}

/* End of file M_pesan.php */
/* Location: ./application/models/M_pesan.php */