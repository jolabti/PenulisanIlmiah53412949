<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //Memanggil fungsi session Codeigniter

class Ctr_arsip extends CI_Controller 
{
	 
 
 //--------------------------------------------
function do_upload()
 {
		$config = array(
            'upload_path'   => './kumpulan/',
            'allowed_types' => '*',
            'max_size'      => '2048',
            'encrypt_name'  => true,
		 
        );
			
		 		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload()) {
          
		  $this->goAsistenPage();
			
        
	 
			
			}
			
			
		else 
		{
			
			 $upload_data = $this->upload->data();
			  

		$data_ary = array(
				 
                'id_asisten'=> $nid,
                'nama'=> $nama,
                'alamat'=> $alamat,
				'portofolio'=> $portofolio,
				'email'=> $email,
                'linksocmed'=> $linksocmed,
                'kontak'     =>$kontak,
                'jabatan_struktural'=> $jabatanstruktural,
                'tahun_masuk'	=>$tahunmasuk,				
				'filename_photo' => $upload_data['asistenphoto']
                
            );
			
			$this->load->database();
			$this->db->insert('arsip_asisten', $data_ary);

            $data = array('upload_data' => $upload_data);
            $this->load->view('upload_success', $data);
			
			
			
		}


   
 }
 
}
?>

 

