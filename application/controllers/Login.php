<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginmodels');
    }
    public function index()
    {
        $data['title'] = 'Login | Admin CBT';
        $this->load->view('admin/login', $data);
    }
    public function loginMahasiswa()
    {
        $data['title'] = 'Login | Peserta Ujian Masuk';
        $this->load->view('calon-mahasiswa/login', $data);
    }
    function doLogin()
    {
        if ($this->input->post()) {
            $loginuser = $this->loginmodels->getLogin();
            if ($loginuser != '') {
                $data_session = array(
                    'isLogin' => TRUE,
                    'username' => $loginuser->username,
                    'password' => $loginuser->password,
                    'fullname' => $loginuser->fullname
                );
                $this->session->set_userdata($data_session);
                redirect('admin/dashboard');
            } else {
                    $this->session->set_flashdata('pesan', 'Maaf, Username Atau Password Salah.');
                    redirect('login');
                }
        }
    }
    function doLoginMahasiswa()
    {
        if ($this->input->post()) {
            $loginuser = $this->loginmodels->getLoginMahasiswa();
            if ($loginuser != '') {
                $data_session = array(
                    'isLogin' => TRUE,
                    'id_calon_mahasiswa' => $loginuser->id_calon_mahasiswa,
                    'password' => $loginuser->password,
                    'nama_lengkap' => $loginuser->nama_lengkap,
                    'jenis_kelamin' => $loginuser->jenis_kelamin,
                    'id_jurusan' => $loginuser->id_jurusan,
                    'alamat' => $loginuser->alamat,
                    'asal_sekolah' => $loginuser->asal_sekolah,
                );
                $this->session->set_userdata($data_session);
                redirect('ujian/dashboard');
            } else {
                    $this->session->set_flashdata('pesan', 'Maaf, Username Atau Password Salah.');
                    redirect('ujian/login');
                }
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    function logoutCalon()
    {
        $this->session->sess_destroy();
        redirect('ujian/login');
    }
}
