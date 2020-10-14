<?php
Class Model_mahasiswa extends CI_Model
{
  function TampilMahasiswa() 
    {
        $this->db->order_by('nik', 'ASC');
        return $this->db->from('mahasiswa')
          ->get()
          ->result();
    }  
}
?>