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
        $this->db->join('siswa', 'siswa.id_siswa = nilai.id_siswa');
        return $this->db->get();
    }
}
