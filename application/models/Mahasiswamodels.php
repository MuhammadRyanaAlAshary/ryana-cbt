<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswamodels extends CI_Model
{
	function getSoal($id_soal)
	{
		$sql = $this->db->query("SELECT * FROM `tb_soal` WHERE id_soal = '$id_soal'");
		return $sql->row();
	}
	function getJawaban($id_soal)
	{
		$sql = $this->db->query("SELECT * FROM `tb_pilihan_jawaban` WHERE id_soal = '$id_soal'");
		return $sql->row();
	}
	function getMahasiswa($id_calon_mahasiswa)
	{
		$sql = $this->db->query("SELECT * FROM `tb_calon_mahasiswa` WHERE id_calon_mahasiswa = '$id_calon_mahasiswa'");
		return $sql->row();
	}
	function getSoalLatest()
	{
		$sql = $this->db->query("SELECT * FROM `tb_soal` LIMIT 1");
		return $sql->row();
	}
	function addJawaban($data)
	{
		$this->db->insert('tb_test_jawaban', $data);
	}
	function cekNextPage($id_soal)
	{
		$sql = $this->db->query("SELECT * FROM `tb_soal` WHERE id_soal = '$id_soal'+1");
		return $sql->num_rows();
	}
	function getNilaiBenar($id_calon_mahasiswa){
		$sql = $this->db->query("SELECT
			a.*
		FROM
			tb_test_jawaban a
		LEFT JOIN tb_soal b ON
			b.id_soal = a.id_soal
		WHERE
			a.id_calon_mahasiswa = '$id_calon_mahasiswa' AND a.jawaban = b.jawaban");
		return $sql->result();
	}
	function getNilaiAllCount($id_calon_mahasiswa){
		$sql = $this->db->query("SELECT COUNT(id_tb_test_jawaban) as TOTAL_SOAL FROM tb_test_jawaban WHERE id_calon_mahasiswa = '$id_calon_mahasiswa'");
		return $sql->row();
	}
	function getCountBenar($id_calon_mahasiswa){
		$sql = $this->db->query("SELECT
			COUNT(a.id_tb_test_jawaban) AS TOTAL_JAWABAN_BENAR
		FROM
			tb_test_jawaban a
			LEFT JOIN tb_soal b ON
			b.id_soal = a.id_soal
		WHERE
			a.id_calon_mahasiswa = '$id_calon_mahasiswa' AND b.jawaban = a.jawaban");
		return $sql->row();
	}
	function getCountSalah($id_calon_mahasiswa){
		$sql = $this->db->query("SELECT
			COUNT(a.id_tb_test_jawaban) AS TOTAL_JAWABAN_SALAH
		FROM
			tb_test_jawaban a
			LEFT JOIN tb_soal b ON
			b.id_soal = a.id_soal
		WHERE
			a.id_calon_mahasiswa = '$id_calon_mahasiswa' AND b.jawaban != a.jawaban");
		return $sql->row();
	}
}
