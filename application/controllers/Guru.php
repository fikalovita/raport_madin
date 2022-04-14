<?php

use function PHPSTORM_META\map;

defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
        $this->load->model('M_admin');
        if (!$this->session->userdata('guru')) {
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->view('guru/layout/header');
        $this->load->view('guru/dashboard');
        $this->load->view('guru/layout/footer');
    }
    public function profil_guru()
    {
        $this->load->view('guru/layout/header');
        $this->load->view('guru/profil_guru');
        $this->load->view('guru/layout/footer');
    }
    public function list_pelajaran()
    {
        $data = [

            'pelajaran' => $this->M_guru->get_pelajaran()->result(),

        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/list_pelajaran', $data);
        $this->load->view('guru/layout/footer');
    }
    public function penilaian()
    {
        $data = [
            'pelajaran' => $this->M_guru->get_mapel()->result(),
            'nilai' => $this->M_guru->get_nilai()->result(),
            'siswa' => $this->M_guru->get_siswa()->result(),

        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/penilaian', $data);
        $this->load->view('guru/layout/footer');
    }
    public function cetak_nilai()
    {
        $data = [
            'nilai' => $this->M_guru->get_nilai()->result(),

        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/cetak_nilai', $data);
        $this->load->view('guru/layout/footer');
    }
    public function edit_profile()
    {
        $this->load->view('guru/layout/header');
        $this->load->view('guru/edit_profile');
        $this->load->view('guru/layout/footer');
    }
    public function input_nilai()
    {
        $id_guru = $this->input->post('id_guru');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_siswa = $this->input->post('id_siswa');
        $nilai = $this->input->post('nilai');
        $deskripsi = $this->input->post('deskripsi');
        $data = [];
        foreach ($id_siswa as $key => $value) {
            $data[] = [
                'id_siswa' => $id_siswa[$key],
                'id_pelajaran' => $id_pelajaran[$key],
                'id_guru' => $id_guru[$key],
                'nilai' => $nilai[$key],
                'deskripsi' => $deskripsi[$key]
            ];
        }
        var_dump($data);

        $this->db->insert_batch('nilai', $data);
    }

    public function ubah_profile()
    {
        $nama_guru = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $foto_guru = $_FILES['foto_guru']['name'];
        $id_guru = $this->input->post('id_guru');
        $foto_lama = $this->input->post('foto_lama');

        if ($foto_guru) {

            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_guru')) {
                $data = $this->M_admin->get_guru_byId($id_guru);
                $foto = $data->foto_guru;
                if ($foto != 'user.jpg') {
                    $guru = './assets/uploads/' . $data->foto_guru;
                    unlink($guru);
                }

                $new_foto = $this->upload->data('file_name');
            }
        } else {

            $new_foto = $foto_lama;
        };

        $data = [
            'nama_guru' => $nama_guru,
            'foto_guru' => $new_foto,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jabatan' => $jabatan

        ];

        $this->M_guru->update_guru($id_guru, $data);
        $this->session->set_userdata($data);
    }
}
