<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginmodels extends CI_Model
{
	function cek($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tb_admin');
	}
	function getLogin()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('tb_admin');
		if ($query->num_rows() == 1)
			return $query->row();
		else
			return '';
	} 
	function getLoginMahasiswa()
	{
		$this->db->where('id_calon_mahasiswa', $this->input->post('id_calon_mahasiswa'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('tb_calon_mahasiswa');
		if ($query->num_rows() == 1)
			return $query->row();
		else
			return '';
	} 
}
