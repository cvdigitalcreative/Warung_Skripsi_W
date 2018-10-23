<?php
/**
 * 
 */
class M_konsultan extends CI_Model
{
	
	function get_all_konsultan(){
		$hsl=$this->db->query("SELECT konsultan.*,DATE_FORMAT(konsultan_tanggal,'%d/%m/%Y') AS tanggal FROM konsultan ORDER BY konsultan_id DESC");
		return $hsl;
	}

	function save_konsultan($nama,$email,$kontak,$alamat){
		$hsl=$this->db->query("INSERT into konsultan(konsultan_nama,konsultan_email,konsultan_kontak,konsultan_alamat) values ('$nama','$email','$kontak','$alamat')");
		return $hsl;
	}

	function update_konsultan($konsultan_id,$nama,$email,$kontak,$alamat){
		$hsl=$this->db->query("UPDATE konsultan set konsultan_nama='$nama',konsultan_email='$email',konsultan_kontak='$kontak', konsultan_alamat='$alamat' where konsultan_id='$konsultan_id'");
		return $hsl;
	}

	function hapus_konsultan($konsultan_id){
		$hsl=$this->db->query("DELETE from konsultan where konsultan_id='$konsultan_id'");
		return $hsl;
	}
}

?>