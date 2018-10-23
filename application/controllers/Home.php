<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct(){
		parent:: __construct();
		$this->load->model('m_mahasiswa');
		$this->load->model('m_konsultan');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}

	public function index()
	{
		$this->load->view('v_home');
	}

	public function saveMahasiswa()
	{
		$name=strip_tags($this->input->post('name'));
		$email=strip_tags($this->input->post('email'));
		$kontak=strip_tags($this->input->post('kontak'));
		$this->m_mahasiswa->save_mahasiswa($name,$email,$kontak);
        echo $this->session->set_flashdata('msg',' <p>NB: </strong> Terima Kasih Telah Mendaftar.</p>');
        redirect();
	}

	public function saveKonsultan()
	{
		$name=strip_tags($this->input->post('name'));
		$email=strip_tags($this->input->post('email'));
		$kontak=strip_tags($this->input->post('kontak'));
		$alamat=strip_tags($this->input->post('alamat'));
		$this->m_konsultan->save_konsultan($name,$email,$kontak,$alamat);
        echo $this->session->set_flashdata('msg',' <p>NB: </strong> Terima Kasih Telah Mendaftar.</p>');
        redirect();
	}
}
