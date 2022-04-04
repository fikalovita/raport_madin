<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$this->load->view('admin/template');
	}

	public function data_siswa()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/data_siswa');
		$this->load->view('admin/layout/footer');
	}
	public function data_guru()
	{
		$data = [
			'guru' => $this->M_admin->get_guru()->result()
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/data_guru', $data);
		$this->load->view('admin/layout/footer');
	}

	public function data_kelas()
	{
		$data = [
			'guru' => $this->M_admin->get_guru()->result()
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/kelas', $data);
		$this->load->view('admin/layout/footer');
	}

	public function tambah_guru()
	{
		$nuptk = $this->input->post('nuptk');
		$nama_guru = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$password = $this->input->post('password');
		$jabatan = $this->input->post('jabatan');
		$data = [
			'nuptk' => $nuptk,
			'nama_guru' => $nama_guru,
			'foto_guru' => 'user.jpg',
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'jabatan' => $jabatan,
			'password_guru' => $password
		];
		$this->M_admin->tambah_guru($data);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('admin/data_guru', 'refresh');
	}

	public function hapus_guru($id_guru)
	{
		$this->M_admin->hapus_guru($id_guru);
		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('admin/data_guru', 'refresh');
	}
	public function detail_kelas()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/detail_siswa');
		$this->load->view('admin/layout/footer');
	}
	public function pindah_kelas()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/pindah_kelas');
		$this->load->view('admin/layout/footer');
	}
	 public function tambah_kelas()
	 {
		 $nama_kelas = $this->input->post('nama_kelas');
		 $guru = $this->input->post('guru');

		 $data = [
			 'nama_kelas' => $nama_kelas,
			 'id_guru' => $guru
		 ];

		 $this->M_admin->tambah_kelas($data);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('admin/data_guru', 'refresh');
	 }
}
