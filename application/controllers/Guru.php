<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function profil_guru()
    {
        $this->load->view('guru/layout/header');
        $this->load->view('guru/profil_guru');
        $this->load->view('guru/layout/footer');
    }
    public function penilaian()
    {
        $this->load->view('guru/layout/header');
        $this->load->view('guru/penilaian');
        $this->load->view('guru/layout/footer');
    }
}
