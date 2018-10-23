<?php
/**
 * 
 */
class M_mahasiswa extends CI_Model
{
	
	function get_all_mahasiswa(){
		$hsl=$this->db->query("SELECT mahasiswa.*,DATE_FORMAT(mahasiswa_tanggal,'%d/%m/%Y') AS tanggal FROM mahasiswa ORDER BY mahasiswa_id DESC");
		return $hsl;
	}

	function save_mahasiswa($nama,$email,$kontak){
		$hsl=$this->db->query("INSERT into mahasiswa(mahasiswa_nama,mahasiswa_email,mahasiswa_kontak) values ('$nama','$email','$kontak')");
		return $hsl;
	}

	function update_mahasiswa($mahasiswa_id,$nama,$email,$kontak){
		$hsl=$this->db->query("UPDATE mahasiswa set mahasiswa_nama='$nama',mahasiswa_email='$email',mahasiswa_kontak='$kontak' where mahasiswa_id='$mahasiswa_id'");
		return $hsl;
	}

	function hapus_mahasiswa($mahasiswa_id){
		$hsl=$this->db->query("DELETE from mahasiswa where mahasiswa_id='$mahasiswa_id'");
		return $hsl;
	}
}

?>