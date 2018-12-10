<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_pesan','psn');
}
	public function index()
	{
		$data['pesanan']=$this->psn->tm_pesan();
		$data['konten']="v_pesan";
		$this->load->view('template',$data, FALSE);		
	}
	public function hapus()
	{
		$id_nota=$this->uri->segment(3);
		$this->load->model('M_pesan');
		$hapus=$this->M_pesan->hapus($id_nota);
		if($hapus){
			redirect('pesanan','refresh');
		}
	}

}


/* End of file Pesanan.php */
/* Location: ./application/controllers/Pesanan.php */