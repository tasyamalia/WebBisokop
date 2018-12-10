<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_film extends CI_Model {

	public function tampil_film($value='')
	{
		$tm_film=$this->db->get('film')->result();
		return $tm_film;
	}
	public function detail($a)
	{
		$tm_film=$this->db->where('id_film',$a)->get('film')->row();
		return $tm_film;
	}

}
