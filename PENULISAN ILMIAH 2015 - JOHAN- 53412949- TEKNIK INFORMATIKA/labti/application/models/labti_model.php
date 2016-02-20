<?php
//DATABASE PASSWORD FIELD NYA KURANG PANJANG MINIMAL 50
Class Labti_model extends CI_Model
{

 function loginpraktikan($username, $password)
 {
      $this->db->select('*');
       $this->db->from('praktikan');
       $this->db->where('username', $username);
       $this->db->where('password', MD5($password));
       $this->db->limit(1);
    
       $query=$this->db->get();
   if($query->num_rows()> 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

  function loginasisten($username, $password)
 {
      $this->db->select('*');
       $this->db->from('asisten');
       $this->db->where('username', $username);
       $this->db->where('password', MD5($password));
       $this->db->limit(1);
      
       $query=$this->db->get();
   if($query->num_rows()> 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }


 function m_insPraktikan()
 {

  $npm = $this->input->post('npmPraktikan');
  $nama = $this->input->post('namaPraktikan');
  $username = $this->input->post('usernamePraktikan');
  $password =md5($this->input->post('passwordPraktikan'));
  $kelas = $this->input->post('kelasPraktikan');
  $email = $this->input->post('emailPraktikan');
   
  $thn_masuk = $this->input->post('tahunPraktikan');
  $status=1;


  $data=array

      (
        'npm'=>$npm,
        'nama_praktikan'=>$nama,
        'email' =>$email,
        'kelas' =>$kelas,
        'username'=>$username,
        'password'=>$password,
        'angkatan' =>$thn_masuk,
        'status'=>$status


      );

  $this->db->insert('praktikan',$data); 

      
 } 



 function m_insAsisten()
 {

  $nip = $this->input->post('nipAsisten');
  $nama = $this->input->post('namaAsisten');
  $username = $this->input->post('usernameAsisten');
  $password =md5($this->input->post('passwordAsisten'));
  $jabatan = $this->input->post('jabatanAsisten');
  $email = $this->input->post('emailAsisten');
   
  $thn_masuk = $this->input->post('tahunAsisten');
  $status=2;


  $data=array

      (
        'nip'=>$nip,
        'nama'=>$nama,
        'email' =>$email,
        'username'=>$username,
        'password'=>$password,
        'tahun_masuk' =>$thn_masuk,
        'jabatan'=>$jabatan,
        'status'=>$status


      );

  $this->db->insert('asisten',$data);    
 } 
 


  function getPost() 
 {
        

         $query = $this->db->query("SELECT * FROM asisten");

         if ($query->num_rows()>0){

          return $query->result();
         }
         else{


          return false;
         }
}


  public function mget_data_proyek()
    {

         $query = $this->db->get('upload');  
         return $query;  

    }
    public function mget_data_search(){

        $match=$this->input->post('searchme');


        $this->db->like('npm',$match  );
        $this->db->or_like('nama_praktikum', $match);
        $this->db->or_like('id_praktikum', $match);
        $this->db->or_like('penanggung_jawab', $match);
        $this->db->or_like('nama_praktikan', $match);
                 $query = $this->db->get('upload');  
        
        return $query;      

    }  
}

?> 