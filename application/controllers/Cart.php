<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_cart','crt');
}

	public function index()
	{
		$data['konten']="showcart";
		$this->load->view('template',$data,FALSE);
	}
	public function add_cart($id)
	{
		$this->load->model('m_film');
		$detail=$this->m_film->detail($id);

        $data = array(
        'id'      => $detail->id_film,
        'qty'     => 1,
        'price'   => 1000,
        'name'    => $detail->judul_film,
        );
           
        $this->cart->insert($data);
        redirect('bioskop/detail_film/'.$id,'refresh');
	}
	public function hapus_item($id)
	{
		$data = array(
			'rowid'=>$id,
			'qty'=>0,
		);
		$this->cart->update($data);
        redirect('cart','refresh');
	}
	public function simpan()
	{
		if($this->input->post('simpan')){
			$this->load->model('m_cart');
			$id_nota=$this->m_cart->simpan_cart();
			if($id_nota>0){
				$this->cart->destroy();
				redirect('cart/pembayaran/'.$id_nota,'refresh');
			}else{
				redirect('cart');
			}
		}
	}
	public function pembayaran($id)
	{
		$this->load->model('m_cart');
		$nota=$this->m_cart->get_total($id);
		$data['total']=$nota->grandtotal+$id;
		$data['konten']="v_pembayaran";
		$this->load->view('template',$data,FALSE);
	}
	public function konfirm($id_nota)
	{
		$data['id_nota']=$id_nota;
		$data['konten']="v_konfirm";
		$this->load->view('template',$data, FALSE);
	}
	public function proses_upload()
	{
		$config['upload_path'] = './asset/bukti/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '5000';
		$config['max_width']  = '5000';
		$config['max_height']  = '3000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('bukti')){
			$this->session->set_flashdata('pesan',$this->upload->display_errors());
			redirect('cart/konfirm/'.$this->input->post('id_nota'),'refresh');
		}
		else{
			if($this->crt->update_bukti($this->upload->data('file_name'))){
				$this->session->set_flashdata('pesan', 'sukses upload bukti pembayaran silahkan tunggu konfirmasi admin');
			redirect('cart/konfirm/'.$this->input->post('id_nota'),'refresh');
			}
		}
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */