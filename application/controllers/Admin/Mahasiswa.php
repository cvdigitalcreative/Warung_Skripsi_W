<?php
class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('m_mahasiswa');
	}


	function index(){
		$x['data']=$this->m_mahasiswa->get_all_mahasiswa();
		$y['title'] = 'WS ~ Data Mahasiswa';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_mahasiswa',$x);
	}

	function update_mahasiswa(){
		$mahasiswa_id=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnama'));
		$email=strip_tags($this->input->post('xemail'));
		$kontak=strip_tags($this->input->post('xkontak'));
		$this->m_mahasiswa->update_mahasiswa($mahasiswa_id,$nama,$email,$kontak);
		echo $this->session->set_flashdata('msg','success');
		redirect('Admin/Mahasiswa');
	}
	function hapus_kategori(){
		$mahasiswa_id=strip_tags($this->input->post('kode'));
		$this->m_mahasiswa->hapus_mahasiswa($mahasiswa_id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Mahasiswa');
	}

}