<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
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

    public function aksi_login_guru()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_login->login_guru($username, $password)->row_array();

        if ($user) {

            $data = [
                'id_guru' => $user['id_guru'],
                'nuptk' => $user['nuptk'],
                'nama_guru' => $user['nama_guru'],
                'foto_guru' => $user['foto_guru'],
                'tempat_lahir' => $user['tempat_lahir'],
                'tgl_lahir' => $user['tgl_lahir'],
                'jabatan' => $user['jabatan'],
                'password' => $user['password'],
                'id_kelas' => $user['id_kelas'],
                'id_pelajaran' => $user['id_pelajaran'],
                'guru' => TRUE
            ];

            $this->session->set_userdata($data);
            redirect('guru');
        } else {
            $this->session->set_flashdata('pesan', '<div cl ass="alert alert-danger my-2" role="alert">
				<strong>username dan password salah</strong>
				</div>');
            redirect('login');
        }
    }
}
