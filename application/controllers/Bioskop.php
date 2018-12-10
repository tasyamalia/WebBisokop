<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bioskop extends CI_Controller {

	public function index()
	{
		$data['judul']="Homepage";
		$data['nama']="Tasya";
		$data['konten']="home";
		$data['user_data']=$this->session->get_userdata();
		$this->load->view('template',$data);
	}
		public function jadwal()
	{
		$data['konten']="Jadwal";
		$data['judul']="Jadwal";
		$data['user_data']=$this->session->get_userdata();
		$this->load->view('template',$data);
	}
			public function Tiket()
	{
		$data['konten']="Tiket";
		$data['judul']="Tiket";
		$data['user_data']=$this->session->get_userdata();
		$this->load->view('template',$data);
	}
				public function Bookingtab()
	{
		$data['konten']="Bookingtab";
		$data['judul']="Booking";
		$data['user_data']=$this->session->get_userdata();
		$this->load->view('template',$data);
	}
				public function Home()
	{
		$data['konten']="Home";
		$data['judul']="Home";
		$data['user_data']=$this->session->get_userdata();
		$this->load->view('template',$data);
	}
		public function Kritik()
	{
		$data['konten']="Kritik";
		$data['judul']="Kritik";
		$data['user_data']=$this->session->get_userdata();
		$this->load->view('template',$data);
	}
		public function tm_film()
	{
		$this->load->model('m_film');
		$data['tampil_film']=$this->m_film->tampil_film();
		$data['konten']="film";
		$data['judul']="Daftar film";
		$data['user_data']=$this->session->get_userdata();
		$this->load->view('template', $data);
	}
		public function detail_film($id_film='')
	{
		$this->load->model('m_film','fil');
		$data['detail']=$this->fil->detail($id_film);
		$data['konten']="detail_film";
		$data['judul']="Detail Film";
		$data['user_data']=$this->session->get_userdata();
		if($this->session->userdata('login')==TRUE){
			$data['booking']='Booking';
			$data['url']="index.php/cart/add_cart/$id_film";
		}else{
			$data['booking']="LOGIN DULU SEBELUM BOOKING";
			$data['url']="index.php/bioskop/login";
		}
		$this->load->view('template', $data);
	}
	
	public function login()
		{
		if($this->session->userdata('login')==TRUE){
			redirect('bioskop','refresh');
		}else{
			$this->load->view('login');
		}
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function simpan()
	{
		if($this->input->post('submit')){
			$this->form_validation->set_rules('nama_pembeli', 'Nama Lengkap', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$this->load->model('m_pembeli');
				if($this->m_pembeli->masuk()==TRUE){
				$this->session->set_flashdata('pesan','sukses simpan');
				redirect('bioskop/login','refresh');
		}else{
				$this->session->set_flashdata('pesan', 'gagal simpan');
				redirect('bioskop/register','refresh');
		}

			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('bioskop/register','refresh');
			}
		}
	}
		public function proses_login()
	{
		if($this->input->post('login')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('m_pembeli');
			if($this->m_pembeli->get_login()->num_rows()>0){
				$data=$this->m_pembeli->get_login()->row();
				$array = array(
					'login' => TRUE,
					'username'=> $data->username,
					'password'=> $data->password
				);
				$this->session->set_userdata( $array );
				redirect('bioskop','refresh');
			}else{
				$this->session->set_flashdata('pesan', 'salah username dan password');
				redirect('bioskop/login','refresh');
			}
		} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('bioskop/login','refresh');
			}
		}
	}
			public function logout()
{
	$this->session->sess_destroy();
	redirect('bioskop/login','refresh');
}
}

/* End of file Bioskop.php */
/* Location: ./application/controllers/Bioskop.php */