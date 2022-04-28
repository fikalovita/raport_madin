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
    public function penilaian($id_pelajaran)
    {
        $data = [
            'pelajaran' => $this->M_guru->get_mapel()->result(),
            'nilai' => $this->M_guru->get_nilai()->result(),
            'siswa' => $this->M_guru->get_siswa()->result(),

            'nilai_kunci' => $this->M_guru->get_nilai_kunci($id_pelajaran)
        ];
        $id_pelajaran = ['id_pelajaran' => $id_pelajaran];
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
        $id_param = $this->input->post('id_param');
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
                'deskripsi' => $deskripsi[$key],
                'tanggal_diupdate' => date('Y-m-d'),
            ];
        }

        $this->db->insert_batch('nilai', $data);
        $this->session->set_flashdata('pesan', 'disimpan');
        redirect('guru/penilaian/' . $id_param, 'refresh');
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
    public function update_nilai()
    {
        $id_pelajaran = $this->uri->segment(3);
        $data = [
            'nilai' => $this->M_guru->get_nilai_pelajaran($id_pelajaran)->result()
        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/view_nilai', $data);
        $this->load->view('guru/layout/footer');
    }
    public function lihat_nilai()
    {
        $id_pelajaran = $this->uri->segment(3);
        $data = [
            'nilai' => $this->M_guru->get_lihat_nilai($id_pelajaran)->result()
        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/lihat_nilai', $data);
        $this->load->view('guru/layout/footer');
    }
    public function ubah_nilai()
    {
        $id_nilai = $this->input->post('id_nilai');
        $nilai = $this->input->post('nilai');
        $deskripsi = $this->input->post('deskripsi');
        $param = $this->input->post('param');

        $data = [
            'nilai' => $nilai,
            'deskripsi' => $deskripsi

        ];

        $this->M_guru->update_nilai($id_nilai, $data);
        $this->session->set_flashdata('pesan', 'diubah');
        redirect('guru/update_nilai/' . $param, 'refresh');
    }

    public function kunci_nilai()
    {
        $id_pelajaran = $this->input->post('id_pelajaran');

        $data = [
            'kunci' => 1
        ];

        $this->M_guru->kunci_nilai($id_pelajaran, $data);
        $this->session->set_flashdata('pesan', 'dikunci');
        redirect('guru/penilaian/' . $id_pelajaran, 'refresh');
    }

    public function presensi()
    {
        $data = [
            'presensi' => $this->M_guru->presensi(),
            'kunci_presensi' => $this->M_guru->get_kunci_presensi()

        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/presensi', $data);
        $this->load->view('guru/layout/footer');
    }

    public function input_presensi()
    {
        $id_siswa = $this->input->post('id_siswa');
        $id_kelas = $this->input->post('id_kelas');
        $izin = $this->input->post('izin');
        $sakit = $this->input->post('sakit');
        $alpha = $this->input->post('alpha');

        $data = [];

        foreach ($id_siswa as $key => $value) {
            $data[] = [
                'id_siswa' => $id_siswa[$key],
                'id_kelas' => $id_kelas[$key],
                'izin' => $izin[$key],
                'sakit' => $sakit[$key],
                'alpha' => $alpha[$key]
            ];
        }

        $this->db->insert_batch('presensi', $data);
        $this->session->set_flashdata('pesan', 'disimpan');
        redirect('guru/presensi', 'refresh');
    }
    public function view_presensi()
    {
        $data = [

            'presensi' => $this->M_guru->get_presensi()->result()

        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/view_presensi', $data);
        $this->load->view('guru/layout/footer');
    }
    public function ubah_presensi()
    {
        $id_presensi = $this->input->post('id_presensi');
        $izin = $this->input->post('izin');
        $sakit = $this->input->post('sakit');
        $alpha = $this->input->post('alpha');

        $data = [
            'izin' => $izin,
            'sakit' => $sakit,
            'alpha' => $alpha
        ];

        $this->M_guru->update_presensi($id_presensi, $data);
        $this->session->set_flashdata('pesan', 'diubah');
        redirect('guru/view_presensi', 'refresh');
    }
    public function data_siswa()
    {
        $data = [
            'siswa' => $this->M_guru->get_siswa()
        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/siswa', $data);
        $this->load->view('guru/layout/footer');
    }
    public function tingkatan_siswa()
    {
        $data = ['siswa' => $this->M_guru->get_siswa()];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/tingkat', $data);
        $this->load->view('guru/layout/footer');
    }
    public function cetak()
    {
        $this->load->view('guru/layout/header');
        $this->load->view('guru/cetak_nilai');
        $this->load->view('guru/layout/footer');
    }

    public function kunci_absensi()
    {
        $data = [
            'kunci' => 1
        ];

        $this->M_guru->kunci_absensi($data);
        $this->session->set_flashdata('pesan', 'dikunci');
        redirect('guru/presensi/' . 'refresh');
    }
    public function aksi_tingkatan()
    {
        $id_siswa = $this->input->post('id_siswa');
        $tingkat = $this->input->post('tingkat');
        $data = [
            'status' => $tingkat
        ];

        $this->M_guru->tingkatan($data, $id_siswa);
        $this->session->set_flashdata('pesan', 'disimpan');
        redirect('guru/view_presensi', 'refresh');
    }
    public function lihat_presensi()
    {
        $data = [
            'presensi' => $this->M_guru->get_presensi()->result()
        ];
        $this->load->view('guru/layout/header');
        $this->load->view('guru/lihat_presensi', $data);
        $this->load->view('guru/layout/footer');
    }
}
