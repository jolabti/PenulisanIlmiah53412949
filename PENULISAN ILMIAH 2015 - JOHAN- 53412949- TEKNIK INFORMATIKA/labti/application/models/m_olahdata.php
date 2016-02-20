<?php

Class M_olahdata extends CI_Model
{

 function ambildataNamaKelas()
 {

  $query=$this->db->query('SELECT * from datamahasiswa_sheet1');

  if($query->num_rows() > 0)
    {
      foreach ($query->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }

 

}


 
}
?> 