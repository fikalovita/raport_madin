<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_login extends CI_Model
{
    public function login_guru($username, $password)
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('kelas', 'kelas.id_guru = guru.id_guru');
        $this->db->join('pelajaran', 'pelajaran.id_guru = guru.id_guru');
        $this->db->where('nuptk', $username);
        $this->db->where('password_guru', $password);
        return $this->db->get();
    }
}
