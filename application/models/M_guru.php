<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_guru extends CI_Model
{

    public function guru()
    {
        return $this->db->insert('guru');
    }

    public function get_nilai()
    {
        $this->db->select('*');
        $this->db->from('nilai');
        return $this->db->get();
    }

    public function get_siswa()
    {
        $this->db->select('*');
        $this->db->where('id_kelas', $this->session->userdata('id_kelas'));
        $this->db->from('siswa');
        return $this->db->get();
    }

    public function get_pelajaran()
    {
        $this->db->select('*');
        $this->db->where('id_guru', $this->session->userdata('id_guru'));
        $this->db->from('pelajaran');
        return $this->db->get();
    }
    public function get_mapel()
    {
        $this->db->select('*');
        $this->db->where('id_pelajaran', $this->uri->segment(3));
        $this->db->from('pelajaran');
        return $this->db->get();
    }
    public function input_nilai($data)
    {
        $this->db->update_batch('nilai', $data, 'nilai.id_siswa');
    }

    public function update_guru($id_guru, $data)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->update('guru', $data);
    }

    public function get_nilai_pelajaran($id_pelajaran)
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.id_siswa = nilai.id_siswa');
        $this->db->where('id_pelajaran', $id_pelajaran);
        $this->db->where('id_guru', $this->session->userdata('id_guru'));
        return $this->db->get();
    }

    public function update_nilai($id_nilai, $data)
    {
        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai', $data);
    }

    public function kunci_nilai($id_pelajaran, $data)
    {
        $this->db->where('id_pelajaran', $id_pelajaran);
        $this->db->where('id_guru', $this->session->userdata('id_guru'));
        $this->db->update('nilai', $data);
    }

    public function presensi()
    {
        $this->db->select('*');
        $this->db->where('id_kelas', $this->session->userdata('id_kelas'));
        $this->db->from('siswa');

        return $this->db->get();
    }
}
