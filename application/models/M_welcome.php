<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model
{
	function select()
    {
        $this->db->select('*');
        $this->db->from('ucapan');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    function daftar()
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }
}