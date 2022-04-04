<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_admin extends CI_Model
{

    public function tambah_guru($data)
    {
        return $this->db->insert('guru', $data);
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
}
