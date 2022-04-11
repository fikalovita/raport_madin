<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
        $this->load->model('M_admin');
    }
    public function profil_guru()
    {
        $this->load->view('guru/layout/header');
        $this->load->view('guru/profil_guru');
        $this->load->view('guru/layout/footer');
    }
    public function penilaian()
    {
        $data = [
            'nilai' => $this->M_guru->get_nilai()->result(),
            'guru' => $this->M_admin->tampil_pelajaran()
        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/penilaian', $data);
        $this->load->view('guru/layout/footer');
    }
    public function nilai()
    {
    }
}
