<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Calculation\TextData\Format;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		if (!$this->session->userdata('admin')) {
			redirect('login/admin');
		}
	}

	public function index()
	{

		$data = [
			'guru' => $this->M_admin->get_guru()->num_rows(),
			'kelas' => $this->M_admin->kelas()->num_rows(),
			'siswa' => $this->M_admin->siswa()->num_rows(),
			'pelajaran' => $this->M_admin->pelajaran()->num_rows(),
			'info' => $this->M_admin->get_info()->result()

		];

		$this->load->view('admin/layout/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/layout/footer');
	}

	public function data_siswa()
	{
		$data = [
			'kelas' => $this->M_admin->get_kelas()
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/data_siswa', $data);
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
			'guru' => $this->M_admin->get_guru(),
			'kelas' => $this->M_admin->get_kelas()->result()
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
	public function ubah_guru()
	{
		$nuptk = $this->input->post('nuptk');
		$nama_guru = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$password = $this->input->post('password');
		$jabatan = $this->input->post('jabatan');
		$id_guru = $this->input->post('id_guru');
		$data = [
			'nuptk' => $nuptk,
			'nama_guru' => $nama_guru,
			'foto_guru' => 'user.jpg',
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'jabatan' => $jabatan,
			'password_guru' => $password
		];
		$this->M_admin->ubah_guru($data, $id_guru);
		$this->session->set_flashdata('pesan', 'diubah');
		redirect('admin/data_guru', 'refresh');
	}
	public function detail_kelas()
	{
		$id_kelas = $this->uri->segment(3);
		$data = [
			'siswa' => $this->M_admin->get_siswa($id_kelas)->result()
		];

		$this->load->view('admin/layout/header');
		$this->load->view('admin/detail_siswa', $data);
		$this->load->view('admin/layout/footer');
	}
	public function pindah_kelas()
	{
		$data = [
			'siswa' => $this->M_admin->get_all_siswa()->result(),
			'kelas' => $this->M_admin->get_kelas()->result()
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/pindah_kelas', $data);
		$this->load->view('admin/layout/footer');
	}
	public function aksi_pindah_kelas()
	{
		$kelas_baru = $this->input->post('nama_kelas');
		$id_siswa = $this->input->post('id_siswa');
		$data = [
			'id_kelas' => $kelas_baru,
			'status' => 0
		];
		$this->M_admin->pindah_kelas($data, $id_siswa);
		$this->session->set_flashdata('pesan', 'dipindahkan');
		redirect('admin/pindah_kelas', 'refresh');
	}
	public function tambah_kelas()
	{
		$nama_kelas = $this->input->post('nama_kelas');
		$guru = $this->input->post('guru');

		$data = [
			'nama_kelas' => $nama_kelas,
			'id_guru' => $guru,
			'tanggal_dibuat' => date('Y-m-d')
		];

		$this->M_admin->tambah_kelas($data);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('admin/data_kelas', 'refresh');
	}

	public function ubah_kelas()
	{
		$id_kelas = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$guru = $this->input->post('guru');

		$data = [
			'id_guru' => $guru,
			'nama_kelas' => $nama_kelas,
		];

		$this->M_admin->ubah_kelas($id_kelas, $data);
		$this->session->set_flashdata('pesan', 'diubah');
		redirect('admin/data_kelas', 'refresh');
	}

	public function tambah_siswa()
	{
		$nisn = $this->input->post('nisn');
		$nism = $this->input->post('nism');
		$nama_siswa = $this->input->post('nama_siswa');
		$alamat = $this->input->post('alamat');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nama_ibu = $this->input->post('nama_ibu');
		$id_kelas = $this->input->post('id_kelas');
		$foto_siswa = $_FILES['foto_siswa']['name'];
		if ($foto_siswa = '') {
		} else {
			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['detect_mime']     = TRUE;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto_siswa')) {

				$foto_siswa = 'user.jpg';
			} else {
				$foto_siswa = $this->upload->data('file_name');
			}
		}
		$data = [
			'id_kelas' => $id_kelas,
			'nisn' => $nisn,
			'nism' => $nism,
			'nama_siswa' => $nama_siswa,
			'alamat' => $alamat,
			'foto_siswa' => $foto_siswa,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tgl_lahir,
			'nama_ibu' => $nama_ibu
		];


		$this->M_admin->tambah_siswa($data);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('admin/detail_kelas/' . $id_kelas, 'refresh');
	}

	public function ubah_siswa()
	{
		$nisn = $this->input->post('nisn');
		$nism = $this->input->post('nism');
		$nama_siswa = $this->input->post('nama_siswa');
		$alamat = $this->input->post('alamat');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nama_ibu = $this->input->post('nama_ibu');
		$id_kelas = $this->input->post('id_kelas');
		$foto_siswa = $_FILES['foto_siswa']['name'];
		$foto_lama = $this->input->post('foto_lama');
		$id_siswa = $this->input->post('id_siswa');

		if ($foto_siswa) {

			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto_siswa')) {
				$data = $this->M_admin->get_siswa_byId($id_siswa);
				$foto = $data->foto_siswa;
				if ($foto != 'user.png') {
					$foto = './assets/uploads/' . $data->foto_siswa;
					unlink($foto);
				}

				$new_foto = $this->upload->data('file_name');
			}
		} else {

			$new_foto = $foto_lama;
		};

		$data = [
			'id_kelas' => $id_kelas,
			'nisn' => $nisn,
			'nism' => $nism,
			'nama_siswa' => $nama_siswa,
			'alamat' => $alamat,
			'foto_siswa' => $new_foto,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tgl_lahir,
			'nama_ibu' => $nama_ibu
		];
		$this->M_admin->ubah_siswa($data, $id_siswa);
		$this->session->set_flashdata('pesan', 'diubah');
		redirect('admin/detail_kelas/' . $id_kelas, 'refresh');
	}
	public function hapus_siswa($id_siswa)
	{
		$data = $this->M_admin->get_siswa_byId($id_siswa);
		$foto = $data->foto_siswa;
		$id_siswa  = array('id_siswa' => $id_siswa);
		if ($foto != 'user.jpg') {
			$foto = './assets/uploads/' . $data->foto_siswa;
			unlink($foto);
		}

		$id_kelas = $data->id_kelas;

		$this->M_admin->hapus_siswa($id_siswa);

		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('admin/detail_kelas/' . $id_kelas, 'refresh');
	}
	public function pelajaran($kelas = null)
	{
		$kelas = $this->input->post('kelas');
		$data =  [
			'tampil' => $this->M_admin->tampil_pelajaran($kelas)->result(),
			'kelas' => $this->M_admin->get_all_kelas()->result()

		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/pelajaran', $data);
		$this->load->view('admin/layout/footer');
	}

	public function tambah_pelajaran()
	{
		$pelajaran = $this->input->post('pelajaran');
		$kelas = $this->input->post('kelas');

		$data = [
			'nama_pelajaran' => $pelajaran,
			'id_kelas' => $kelas
		];
		$this->M_admin->tambah_pelajaran($data, $kelas);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('admin/pelajaran?kelas=' . $kelas, 'refresh');
	}

	public function hapus_pelajaran($id_pelajaran)
	{
		$id_guru = $this->input->get('guru');
		$this->M_admin->hapus_pelajaran($id_pelajaran);
		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('admin/pelajaran/?guru=' . $id_guru, 'refresh');
	}

	public function hapus_kelas($id_kelas)
	{
		$this->M_admin->hapus_kelas($id_kelas);
		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('admin/data_kelas', 'refresh');
	}
	public function mengajar()
	{
		$kelas = $this->input->get('kelas');
		$data = [
			'kelas' => $this->M_admin->get_all_kelas(),
			'guru' => $this->M_admin->get_guru(),
			'mengajar' => $this->M_admin->get_mengajar($kelas)
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/mengajar', $data);
		$this->load->view('admin/layout/footer');
	}

	public function ubah_mengajar()
	{
		$guru = $this->input->post('guru');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_kelas = $this->input->post('id_kelas');
		$data = [];
		foreach ($id_pelajaran as $key => $value) {
			$data[] = [
				'id_pelajaran' => $id_pelajaran[$key],
				'id_guru' => $guru[$key]
			];
		}

		$this->db->update_batch('mengajar', $data, 'id_pelajaran');
		$this->session->set_flashdata('pesan', 'disimpan');
		redirect('admin/mengajar?kelas=' . $id_kelas . '', 'refresh');
	}

	public function hapus_ajar($id_mengajar)
	{
		$id_mengajar = $this->uri->segment(3);
		$id_kelas = $this->input->get('id_kelas');
		// var_dump($id_kelas);
		// die();
		$data = [
			'id_guru' => ""
		];

		$this->M_admin->hapus_ajar($data, $id_mengajar);
		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('admin/mengajar?kelas=' . $id_kelas . '', 'refresh');
	}
	public function nilai()
	{
		$data = [
			'kelas' => $this->M_admin->get_all_kelas()->result()
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/nilai', $data);
		$this->load->view('admin/layout/footer');
	}

	public function detail_nilai($id_kelas)
	{
		$id_kelas = $this->uri->segment(3);
		$data = [
			'siswa' => $this->M_admin->list_siswa_kelas($id_kelas)->result()
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/detail_nilai', $data);
		$this->load->view('admin/layout/footer');
	}
	public function nilai_siswa($id_siswa)
	{
		$id_siswa = $this->uri->segment(3);
		$data = [
			'nilai' => $this->M_admin->get_nilai_siswa($id_siswa)->result()

		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/nilai_siswa', $data);
		$this->load->view('admin/layout/footer');
	}
	public function buka_kunci($id_nilai)
	{

		$data = [
			'kunci' => 0
		];

		$this->M_admin->buka_kunci($id_nilai, $data);
		$this->session->set_flashdata('pesan', 'dikunci');
	}

	public function ubah_pelajaran()
	{
		$pelajaran = $this->input->post('nama_pelajaran');
		$id_pelajaran = $this->input->post('id_pelajaran');

		$data = [
			'nama_pelajaran' => $pelajaran
		];

		$this->M_admin->ubah_pelajaran($data, $id_pelajaran);
	}
	public function banyak_siswa()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/banyak_siswa');
		$this->load->view('admin/layout/footer');
	}

	public function aksi_banyak_siswa()
	{
		$id_kelas = $this->input->post('id_kelas');
		$nama_siswa = $this->input->post('nama_siswa');
		$nisn = $this->input->post('nisn');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$data = [];
		foreach ($nisn as $key => $value) {
			$data[] = [
				'id_kelas' => $id_kelas[$key],
				'nisn' => $nisn[$key],
				'nama_siswa' => $nama_siswa[$key],
				'tempat_lahir' => $tempat_lahir[$key],
				'tanggal_lahir' => $tanggal_lahir[$key]
			];
		}
		$this->db->insert_batch('siswa', $data);
		$this->session->set_flashdata('pesan', 'disimpan');
		redirect('admin/detail_kelas/' . $this->input->post('id_kelas2'), 'refresh');
	}

	public function info()
	{
		$id_info = $this->input->post('id_info');
		$isi_info = $this->input->post('text');

		$data = [
			'isi_info' => $isi_info
		];

		$this->M_admin->update_info($data, $id_info);
		redirect('admin', 'refresh');
	}

	public function banyak_kelas()
	{
		$data = [
			'guru' => $this->M_admin->get_guru()->result()
		];
		$this->load->view('admin/layout/header');
		$this->load->view('admin/banyak_kelas', $data);
		$this->load->view('admin/layout/footer');
	}

	public function aksi_banyak_kelas()
	{
		$kelas = $this->input->post('kelas');
		$guru = $this->input->post('guru');

		$data = [];

		foreach ($kelas as $key => $value) {
			$data[] = [
				'nama_kelas' => $kelas[$key],
				'id_guru' => $guru[$key],
				'tanggal_dibuat' => date('Y-m-d')

			];
		}
		$this->db->insert_batch('kelas', $data);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('admin/data_kelas', 'refresh');
	}
	public function siswa_excel()
	{
		$id_kelas = $this->input->post('id_kelas');
		$file = $_FILES['excel']['name'];
		$config['upload_path'] = './assets/uploads';
		$config['allowed_types'] = 'xlsx|xls';
		$config['detect_mime']     = TRUE;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('excel')) {
		} else {
			$file = $this->upload->data('file_name');
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load('./assets/uploads/' . $file);

			$sheet = $spreadsheet->getActiveSheet()->toArray();
			for ($i = 1; $i < count($sheet); $i++) {
				$data[] = [
					'id_kelas' => $id_kelas,
					'nisn' => $sheet[$i]['0'],
					'nama_siswa' => $sheet[$i]['1'],
					'tempat_lahir' => $sheet[$i]['2'],
					'tanggal_lahir' => $sheet[$i]['3'],


				];
			}
			$this->M_admin->siswa_excel($data);
			unlink('./assets/uploads/' . $file);
			$this->session->set_flashdata('pesan', 'ditambahkan');
			redirect('admin/detail_kelas/' . $id_kelas);
		}
	}

	public function download_template_siswa()
	{
		force_download('./assets/uploads/template_siswa.xlsx', NULL);
	}

	public function guru_excel()
	{
		$file = $_FILES['excel']['name'];
		$config['upload_path'] = './assets/uploads';
		$config['allowed_types'] = 'xlsx|xls';
		$config['detect_mime']     = TRUE;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('excel')) {
		} else {
			$file = $this->upload->data('file_name');
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load('./assets/uploads/' . $file);
			$sheet = $spreadsheet->getActiveSheet()->toArray();
			for ($i = 1; $i < count($sheet); $i++) {
				$data[] = [
					'nuptk' => $sheet[$i]['0'],
					'nama_guru' => $sheet[$i]['1'],
					'tempat_lahir' => $sheet[$i]['2'],
					'tgl_lahir' => $sheet[$i]['3'],
					'jabatan' => $sheet[$i]['4'],
					'password_guru' => $sheet[$i]['5'],
				];
			}
			$this->M_admin->guru_excel($data);
			unlink('./assets/uploads/' . $file);
			$this->session->set_flashdata('pesan', 'ditambahkan');
			redirect('admin/data_guru');
		}
	}
	public function download_template_guru()
	{
		force_download('./assets/uploads/template_guru.xlsx', NULL);
	}

	public function pelajaran_excel()
	{
		$id_kelas = $this->input->post('id_kelas');
		$file = $_FILES['excel']['name'];
		$config['upload_path'] = './assets/uploads';
		$config['allowed_types'] = 'xlsx|xls';
		$config['detect_mime']     = TRUE;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('excel')) {
		} else {
			$file = $this->upload->data('file_name');
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load('./assets/uploads/' . $file);
			$sheet = $spreadsheet->getActiveSheet()->toArray();
			for ($i = 1; $i < count($sheet); $i++) {
				$data1[] = [
					'id_pelajaran' => $sheet[$i]['0'],
					'nama_pelajaran' => $sheet[$i]['1'],
					'id_kelas' => $id_kelas,
				];
			}
			for ($i = 1; $i < count($sheet); $i++) {
				$data2[] = [
					'id_pelajaran' => $sheet[$i]['0'],
					'id_kelas' => $id_kelas,
				];
			}
			$this->M_admin->pelajaran_excel($data1, $data2);
			unlink('./assets/uploads/' . $file);
			$this->session->set_flashdata('pesan', 'ditambahkan');
			redirect('admin/pelajaran/' . $id_kelas, 'refresh');
		}
	}
}
