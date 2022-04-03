<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_admin extends CI_Model
{

    public function guru()
    {
        return $this->db->insert('guru');
    }
}
