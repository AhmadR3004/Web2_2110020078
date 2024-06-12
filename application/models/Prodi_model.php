<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
    public function lihatData()
    {
        return $this->db->get('prodi')->result();
    }

    public function metodeRow()
    {
        return $this->db->get('prodi')->row();
    }

    public function metoderesultArray()
    {
        return $this->db->get('prodi')->result_array();
    }

    public function metodeRowArray()
    {
        return $this->db->get('prodi')->row_array();
    }

    public function simpan($data)
    {
        return $this->db->insert('prodi', $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('prodi', ['id_prodi' => $id])->row();
    }

    public function perbaharui($id, $data)
    {
        $this->db->where('id_prodi', $id);
        return $this->db->update('prodi', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_prodi', $id);
        return $this->db->delete('prodi');
    }
}
