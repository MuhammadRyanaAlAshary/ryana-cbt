<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminmodels extends CI_Model
{
	function addCalonMahasiswa($data)
	{
		$this->db->insert('tb_calon_mahasiswa', $data);
	}
	function updateCalonMahasiswa($id_calon_mahasiswa, $data)
	{
		$this->db->where('id_calon_mahasiswa', $id_calon_mahasiswa);
		$this->db->update('tb_calon_mahasiswa', $data);
	}
	function deleteCalonMahasiswa($id_calon_mahasiswa)
	{
		$this->db->where('id_calon_mahasiswa', $id_calon_mahasiswa);
		$this->db->delete('tb_calon_mahasiswa');
	}
	function countTotalCalonMhs()
	{
		$sql = $this->db->query("SELECT COUNT(id_calon_mahasiswa)+1 as TOTAL_CALON_MHS FROM tb_calon_mahasiswa");
		return $sql->row();
	}
	function getAllCalonMahasiswa()
	{
		$sql = $this->db->query("SELECT
			a.*,
			b.nama_jurusan
		FROM
			tb_calon_mahasiswa a
		LEFT JOIN tb_jurusan b ON
			b.id_jurusan = a.id_jurusan");
		return $sql->result();
	}
	function getCountCalonMahasiswa()
	{
		$sql = $this->db->query("SELECT COUNT(id_calon_mahasiswa) as TOTAL_CALON_MAHASISWA FROM tb_calon_mahasiswa");
		return $sql->row();
	}
	function getCountSoal()
	{
		$sql = $this->db->query("SELECT COUNT(id_soal) as TOTAL_SOAL FROM tb_soal");
		return $sql->row();
	}
	function getAllJurusan()
	{
		$sql = $this->db->query("SELECT * FROM tb_jurusan");
		return $sql->result();
	}
	function getAllTypeSoal()
	{
		$sql = $this->db->query("SELECT * FROM tb_type_soal");
		return $sql->result();
	}
	function getCalonMahasiswaUjian()
	{
		$sql = $this->db->query("SELECT
			a.*,
			b.nama_jurusan
		FROM
			tb_calon_mahasiswa a
		LEFT JOIN tb_jurusan b ON
			b.id_jurusan = a.id_jurusan
		WHERE
			status_test = 'true'");
		return $sql->result();
	}
	function getCalonMahasiswa($id_calon_mahasiswa)
	{
		$sql = $this->db->query("SELECT * FROM tb_calon_mahasiswa WHERE id_calon_mahasiswa = '$id_calon_mahasiswa' ");
		return $sql->row();
	}

	// End Mahasiswa

	// Soal
	function getAllSoal()
	{
		$sql = $this->db->query("SELECT * FROM tb_soal");
		return $sql->result();
	}
	function addSoal($data)
	{
		$this->db->insert('tb_soal', $data);
	}
	function addPilihanJawabanSoal($data)
	{
		$this->db->insert('tb_pilihan_jawaban', $data);
	}
	function countTotalSoal()
	{
		$sql = $this->db->query("SELECT COUNT(id_soal)+1 as TOTAL_SOAL FROM tb_soal");
		return $sql->row();
	}
	function updateSoal($id_soal, $data)
	{
		$this->db->where('id_soal', $id_soal);
		$this->db->update('tb_soal', $data);
	}
	function updatePilihanJawabanSoal($id_soal, $data)
	{
		$this->db->where('id_soal', $id_soal);
		$this->db->update('tb_pilihan_jawaban', $data);
	}
	function getSoal($id_soal)
	{
		$sql = $this->db->query("SELECT * FROM tb_soal WHERE id_soal = '$id_soal' ");
		return $sql->row();
	}
	function getPilihanJawabanSoal($id_soal)
	{
		$sql = $this->db->query("SELECT * FROM tb_pilihan_jawaban WHERE id_soal = '$id_soal' ");
		return $sql->row();
	}
	function deleteSoal($id_soal)
	{
		$this->db->where('id_soal', $id_soal);
		$this->db->delete('tb_soal');
	}
	function deletePilihanJawab($id_soal)
	{
		$this->db->where('id_soal', $id_soal);
		$this->db->delete('tb_pilihan_jawaban');
	}
	// Nilai Calon Mhs
	function getCountBenar($id_calon_mahasiswa)
	{
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
	function getCountSalah($id_calon_mahasiswa)
	{
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
	function laporanNilaiSiswa($id_calon_mahasiswa)
	{
		$sql = $this->db->query("SELECT
			a.*,
			b.nama_jurusan
		FROM
			tb_calon_mahasiswa a
		LEFT JOIN tb_jurusan b ON
			b.id_jurusan = a.id_jurusan 
			WHERE id_calon_mahasiswa = '$id_calon_mahasiswa' ");
		return $sql->row();
	}
}
