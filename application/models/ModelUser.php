<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
public function updateUser($data = null, $where = null)
    {
        $this->db->update('user', $data, $where);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function hapususer($where = null)
    {
        $this->db->delete('user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
       public function getRole($where = null)
    {
        return $this->db->get_where('role', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
public function joinData() 
    { 
        $this->db->select('*'); 
        $this->db->from('role'); 
        $this->db->join('user', 'user.role_id=role.id', 'Right'); 
        return $this->db->get()->result_array(); 
    }     }


