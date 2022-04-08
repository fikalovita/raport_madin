<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_admin extends CI_Model
{
    public function tambah_guru($data)
    {
        return $this->db->insert('guru', $data);
    }
    public function get_all_siswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->where('status', 1);
        return $this->db->get();
    }
    public function get_guru()
    {
        $this->db->select('*');
        $this->db->from('guru');
        return $this->db->get();
    }
    public function hapus_guru($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('guru');
    }
    public function tambah_kelas($data)
    {
        return $this->db->insert('kelas', $data);
    }
    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        return $this->db->get();
    }

    public function tambah_siswa($data)
    {
        return $this->db->insert('siswa', $data);
    }

    public function get_siswa($id_kelas)
    {
        $this->db->select('*');
        $this->db->where('id_kelas', $id_kelas);
        $this->db->from('siswa');
        return $this->db->get();
    }

    public function tampil_pelajaran($id_guru)
    {
        $this->db->select('*');
        $this->db->from('pelajaran');
        $this->db->join('guru', 'guru.id_guru = pelajaran.id_guru');
        $this->db->where('pelajaran.id_guru', $id_guru);

        return $this->db->get();
    }
    public function tambah_pelajaran($data)
    {
        return $this->db->insert('pelajaran', $data);
    }

    public function hapus_pelajaran($id_pelajaran)
    {
        $this->db->where('id_pelajaran', $id_pelajaran);
        $this->db->delete('pelajaran');
    }
    public function get_guru_byId($id_guru)
    {
        $result = $this->db->where('id_guru', $id_guru)->get('guru');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ubah_pelajaran($data, $id_pelajaran)
    {
        $this->db->where('id_pelajaran', $id_pelajaran);
        $this->db->update('pelajaran', $data);
    }

    public function ubah_guru($data, $id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->update('guru', $data);
    }

    public function hapus_kelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas');
    }

    public function pindah_kelas($data, $id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('siswa', $data);
    }

    public function ubah_kelas($data, $id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
    }
}
