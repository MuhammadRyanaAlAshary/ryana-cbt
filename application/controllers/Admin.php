<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminmodels');
        $this->load->model('mahasiswamodels');
        if ($this->session->userdata('isLogin') == FALSE) {
            redirect('login');
        }
    }
    function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['calon_mahasiswa'] = $this->adminmodels->getCountCalonMahasiswa();
        $data['data_soal'] = $this->adminmodels->getCountSoal();
        $this->load->view('admin/dashboard', $data);
    }
    // Mahasiswa
    function getAllCalonMahasiswa()
    {
        $data['title'] = 'Data Calon Mahasiswa';
        $data['calon_mhs'] = $this->adminmodels->getAllCalonMahasiswa();
        $this->load->view('admin/calon-mahasiswa/listing', $data);
    }
    function addCalonMahasiswa()
    {
        if ($this->input->post()) {
            $dateNow = date('dmY'); 
            $totalCalon = $this->adminmodels->countTotalCalonMhs();
            $data = array(
                'id_calon_mahasiswa' => $this->input->post('id_jurusan').$dateNow.$totalCalon->TOTAL_CALON_MHS,
                'password' => $this->input->post('id_jurusan').$dateNow.$totalCalon->TOTAL_CALON_MHS,
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'id_jurusan' => $this->input->post('id_jurusan'),
                'alamat' => $this->input->post('alamat'),
                'asal_sekolah' => $this->input->post('asal_sekolah')
            );
            $this->adminmodels->addCalonMahasiswa($data);
            redirect('admin/calon-mahasiswa');
        } else {
            $data['title'] = 'Form Input Calon Mahasiswa';
            $data['jurusan'] = $this->adminmodels->getAllJurusan();
            $this->load->view('admin/calon-mahasiswa/form-input', $data);
        }
    }
    function updateCalonMahasiswa($id_calon_mahasiswa)
    {
        if ($this->input->post()) {
            $dateNow = date('dmY'); 
            $totalCalon = $this->adminmodels->countTotalCalonMhs();
            $data = array(
                'password' => $this->input->post('password'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'id_jurusan' => $this->input->post('id_jurusan'),
                'alamat' => $this->input->post('alamat'),
                'asal_sekolah' => $this->input->post('asal_sekolah')
            );
            $this->adminmodels->updateCalonMahasiswa($id_calon_mahasiswa, $data);
            redirect('admin/calon-mahasiswa');
        } else {
            $data['title'] = 'Form Input Calon Mahasiswa';
            $data['jurusan'] = $this->adminmodels->getAllJurusan();
            $data['calon_mhs'] = $this->adminmodels->getCalonMahasiswa($id_calon_mahasiswa);
            $this->load->view('admin/calon-mahasiswa/form-input', $data);
            // var_dump($data['calon_mhs']);
        }
    }
    function deleteCalonMahasiswa($id_calon_mahasiswa){ 
		$this->adminmodels->deleteCalonMahasiswa($id_calon_mahasiswa); 
		redirect ('admin/calon-mahasiswa'); 
    }
    function getAllLaporanMahasiswa()
    {
        $data['title'] = 'Laporan | Data Calon Mahasiswa';
        $data['calon_mhs'] = $this->adminmodels->getAllCalonMahasiswa();
        $this->load->view('admin/calon-mahasiswa/laporan', $data);
    }
    function getCalonMahasiswaUjian()
    {
        $data['title'] = 'Laporan | Data Calon Mahasiswa Lulus';
        $data['calon_mhs_ujian'] = $this->adminmodels->getCalonMahasiswaUjian();
        $this->load->view('admin/data-nilai/listing', $data);
    }
    // End Mahasiswa
    function getAllSoal()
    {
        $data['title'] = 'Data Soal';
        $data['data_soal'] = $this->adminmodels->getAllSoal();
        $this->load->view('admin/data-soal/listing', $data);
    }
    function addSoal()
    { 
        if ($this->input->post()) {
            $data = array(
                'id_soal' => $this->input->post('id_soal'),
                'soal' => $this->input->post('soal'),
                'jawaban' => $this->input->post('jawaban'), 
                'type_soal' => $this->input->post('type_soal')
            );  
            $this->adminmodels->addSoal($data);
            $data = array(
                'id_soal' => $this->input->post('id_soal'),
                'pilihan_a' => $this->input->post('pilihan_a'),
                'pilihan_b' => $this->input->post('pilihan_b'),
                'pilihan_c' => $this->input->post('pilihan_c'),
                'pilihan_d' => $this->input->post('pilihan_d'),
                'pilihan_e' => $this->input->post('pilihan_e'),
            ); 
            $this->adminmodels->addPilihanJawabanSoal($data);
            redirect('admin/data-soal');
        } else {
            $data['title'] = 'Data Soal';
            $data['data_type'] = $this->adminmodels->getAllTypeSoal();
            $data['total_soal'] = $this->adminmodels->countTotalSoal();
            $this->load->view('admin/data-soal/form-input', $data);
            // var_dump($data['type_soal']);
        }
    }
    function updateSoal($id_soal)
    { 
        if ($this->input->post()) {
            $data = array(
                'soal' => $this->input->post('soal'),
                'jawaban' => $this->input->post('jawaban'), 
                'type_soal' => $this->input->post('type_soal')
            );  
            $this->adminmodels->updateSoal($id_soal, $data);
            $data = array(
                'pilihan_a' => $this->input->post('pilihan_a'),
                'pilihan_b' => $this->input->post('pilihan_b'),
                'pilihan_c' => $this->input->post('pilihan_c'),
                'pilihan_d' => $this->input->post('pilihan_d'),
                'pilihan_e' => $this->input->post('pilihan_e'),
            ); 
            $this->adminmodels->updatePilihanJawabanSoal($id_soal, $data);
            redirect('admin/data-soal');
        } else {
            $data['title'] = 'Data Soal';
            $data['data_type'] = $this->adminmodels->getAllTypeSoal();
            $data['data_soal'] = $this->adminmodels->getSoal($id_soal);
            $data['data_pilihan_jawaban'] = $this->adminmodels->getPilihanJawabanSoal($id_soal);
            $this->load->view('admin/data-soal/form-input', $data);
        }
    }
    function deleteSoal($id_soal){ 
		$this->adminmodels->deleteSoal($id_soal); 
		$this->adminmodels->deletePilihanJawab($id_soal); 
		redirect ('admin/data-soal'); 
    }
    // Nilai
    function laporanNilaiSiswa($id_calon_mahasiswa)
    {
        $data['title'] = 'Laporan Nilai Siswa'; 
        $data['data_laporan'] = $this->adminmodels->laporanNilaiSiswa($id_calon_mahasiswa); 
        $data['all_soal_count'] = $this->mahasiswamodels->getNilaiAllCount($id_calon_mahasiswa);
        $data['nilai_count_benar'] = $this->mahasiswamodels->getCountBenar($id_calon_mahasiswa);
        $data['nilai_count_salah'] = $this->mahasiswamodels->getCountSalah($id_calon_mahasiswa);
        $this->load->view('admin/data-nilai/laporan', $data);
        // var_dump($data['all_soal_count']);
    }
}

