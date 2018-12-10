<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembeli extends CI_Model {

	public function masuk()
	{
		$nama_pembeli=$this->input->post('nama_pembeli');
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$data_simpan=array(
			'nama_pembeli'=>$nama_pembeli,
			'username'=>$username,
			'password'=>$password
		);
		$this->db->insert('pembeli',$data_simpan);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
		public function get_login()
	{
		return $this->db
		->where('username',$this->input->post('username'))
		->where('password',md5($this->input->post('password')))
		->get('pembeli');
	}

}

/* End of file M_pembeli.php */
/* Location: ./application/models/M_user.php */