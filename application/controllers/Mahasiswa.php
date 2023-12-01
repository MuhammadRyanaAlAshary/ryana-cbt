<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswamodels');
        $this->load->model('adminmodels');
        if ($this->session->userdata('isLogin') == FALSE) {
            redirect('login');
        }
    }
    function index()
    {
        $data['title'] = 'Dashboar Calon Mahasiswa';
        $this->load->view('calon-mahasiswa/dashboard', $data);
    }
    function halamanUjian($id_soal)
    {
        $data['title'] = 'Ujian Saringan Masuk';
        $data['data_soal'] = $this->mahasiswamodels->getSoal($id_soal);
        $data['data_jabawan'] = $this->mahasiswamodels->getJawaban($id_soal);
        $this->load->view('calon-mahasiswa/soal-test/listing', $data);
        // $data['cek_next_page'] = $this->mahasiswamodels->cekNextPage($id_soal);
        // var_dump($data['cek_next_page']);
    }
    function halamanUjianStart()
    {
        $data['title'] = 'Ujian Saringan Masuk';
        $id_calon_mahasiswa = $this->session->userdata('id_calon_mahasiswa');
        $data['data_mahasiswa'] = $this->mahasiswamodels->getMahasiswa($id_calon_mahasiswa);
        $data['data_latest_soal'] = $this->mahasiswamodels->getSoalLatest();
        $this->load->view('calon-mahasiswa/soal-test/index', $data);
    }
    function halamanUjianFinish()
    {
        $data['title'] = 'Ujian Saringan Masuk';
        $data['data_latest_soal'] = $this->mahasiswamodels->getSoalLatest();
        $this->load->view('calon-mahasiswa/soal-test/test-selesai', $data);
    }
    function addJawaban()
    {
        if ($this->input->post()) {
            $id_calon_mahasiswa = $this->session->userdata('id_calon_mahasiswa');
            $data = array(
                'id_calon_mahasiswa' => $id_calon_mahasiswa,
                'id_soal' => $this->input->post('id_soal'),
                'jawaban' => $this->input->post('jawaban')
            );
            $cek_next_page = $this->mahasiswamodels->cekNextPage($this->input->post('id_soal'));
            if ($cek_next_page === 1) {
                $this->mahasiswamodels->addJawaban($data);
                redirect('ujian/halaman-test/' . ($this->input->post('id_soal') + 1));
            } else {
                $this->mahasiswamodels->addJawaban($data);
                $id_calon_mahasiswa = $this->session->userdata('id_calon_mahasiswa');
                $data = array(
                    'password' => $this->session->userdata('password'),
                    'nama_lengkap' => $this->session->userdata('nama_lengkap'),
                    'id_jurusan' => $this->session->userdata('id_jurusan'),
                    'alamat' => $this->session->userdata('alamat'),
                    'asal_sekolah' => $this->session->userdata('asal_sekolah'),
                    'status_test' => 'true',
                );
                $this->adminmodels->updateCalonMahasiswa($id_calon_mahasiswa, $data);
                redirect('ujian/test/finish');
            }
        }
    }
    function addFalseJawaban($id_soal){
        $data = array(
            'id_calon_mahasiswa' => $this->session->userdata('id_calon_mahasiswa'),
            'id_soal' => $id_soal,
            'jawaban' => 'Z'
        );
        $this->mahasiswamodels->addJawaban($data);
        $next = $id_soal + 1;
        redirect('ujian/halaman-test/'.$next);
        // var_dump($data);
    }
    // Nilai
    function getNilai()
    {
        $data['title'] = 'Nilai Siswa';
        $id_calon_mahasiswa = $this->session->userdata('id_calon_mahasiswa');
        $data['data_nilai'] = $this->adminmodels->laporanNilaiSiswa($id_calon_mahasiswa); 
        $data['all_soal_count'] = $this->mahasiswamodels->getNilaiAllCount($id_calon_mahasiswa);
        $data['nilai_count_benar'] = $this->mahasiswamodels->getCountBenar($id_calon_mahasiswa);
        $data['nilai_count_salah'] = $this->mahasiswamodels->getCountSalah($id_calon_mahasiswa);
        $this->load->view('calon-mahasiswa/nilai/lihat-nilai', $data);
        // var_dump($data['data_laporan']);
    }
    function laporanNilaiSiswa()
    {
        $data['title'] = 'Laporan Nilai Siswa';
        $id_calon_mahasiswa = $this->session->userdata('id_calon_mahasiswa');
        $data['data_laporan'] = $this->adminmodels->laporanNilaiSiswa($id_calon_mahasiswa); 
        $data['all_soal_count'] = $this->mahasiswamodels->getNilaiAllCount($id_calon_mahasiswa);
        $data['nilai_count_benar'] = $this->mahasiswamodels->getCountBenar($id_calon_mahasiswa);
        $data['nilai_count_salah'] = $this->mahasiswamodels->getCountSalah($id_calon_mahasiswa);
        $this->load->view('calon-mahasiswa/nilai/laporan', $data); 
    }
}
