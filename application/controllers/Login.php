<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/layout//header');
        $this->load->view('login/guru');
        $this->load->view('login/layout/footer');
    }

    public function admin()
    {
        $this->load->view('login/layout//header');
        $this->load->view('login/admin');
        $this->load->view('login/layout/footer');
    }
}
