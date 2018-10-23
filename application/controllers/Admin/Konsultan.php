<?php
class Konsultan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('m_konsultan');
	}


	function index(){
		$x['data']=$this->m_konsultan->get_all_konsultan();
		$y['title'] = 'WS ~ Data Konsultan';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_konsultan',$x);
	}

	function update_konsultan(){
		$konsultan_id=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnama'));
		$email=strip_tags($this->input->post('xemail'));
		$kontak=strip_tags($this->input->post('xkontak'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$this->m_konsultan->update_konsultan($konsultan_id,$nama,$email,$kontak,$alamat);
		echo $this->session->set_flashdata('msg','success');
		redirect('Admin/Konsultan');
	}
	function hapus_konsultan(){
		$konsultan_id=strip_tags($this->input->post('kode'));
		$this->m_konsultan->hapus_konsultan($konsultan_id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Konsultan');
	}

}