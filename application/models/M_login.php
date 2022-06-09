<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_login extends CI_Model
{
    public function login_guru($username, $password)
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('kelas', 'kelas.id_guru = guru.id_guru');
        $this->db->where('nuptk', $username);
        $this->db->where('password_guru', $password);
        return $this->db->get();
    }
    public function login_admin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }
}
