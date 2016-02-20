<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //Memanggil fungsi session Codeigniter

class Lab_ctr extends CI_Controller 
{
	
	   
 
 //--------------------------------------------

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
    
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['dispstat'] = $session_data['status'];
   // $data['nip'] = $session_data['nip'];

    //$data['dispnama'] = $session_data['nama_praktikan'];
	       
        
        $this->load->view('mainmenu' , $data);

            

     }
   

   else
   {
     //Jika tidak ada session di kembalikan ke halaman login
     redirect('Lab_ctr/login_index', 'refresh');
   }
 }


 //--------------------------------------------
 function login_index()
 {
   if($this->session->userdata('logged_in'))
   {
     redirect('Lab_ctr', 'refresh');
   }
   else 
   {
      $this->load->helper(array('form'));
      $this->load->view('vlab_login');
   }
 }
 //--------------------------------------------

 function ctrprofilmu()
 {

    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $data['namaku']   = $session_data['nama']; 
      $data['kontak']   = $session_data['kontak']; 
        
      $this->load->view('v_profilmu',$data);
  
    }

    else
    {
        redirect('Lab_ctr','refresh');
   
    }



 
 }

 




 //--------------------------------------------
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Lab_ctr/login_index', 'refresh');
 }

/* function cont_cekrow()
 {
    $this->load->model('m_olahdata');
    $data['totrow']=$this->m_olahdata->cek_banyak_row();

    $this->load->view('v_penilaian',$data);


 }
 */
//function view signup
 function signupform(){


      
        $this->load->view('v_signuptoken');


 }

 function insertPraktikan()
 {

  $this->load->model('labti_model');

   
            $this->labti_model->m_insPraktikan();
          

            $this->load->view('sukses_daftar');
         
 }


 function SaveUpload(){

      $this->do_upload();

 }



 public function do_upload()
 {
		$config = array(
            'upload_path'   => './kumpulan/',
            'allowed_types' => '*',
			'max_size'		=> '6000',	
            'encrypt_name'  => false,
		 
        );
		
				
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload()) {
          
		  $this->gotoTugasPage();
			
        
	 
			
			}
		else 
		{
			
			 $upload_data = $this->upload->data();
			 $judul=$this->input->post('judul');
			 $id_praktikum=$this->input->post('id_praktikum');

			$praktikum=$this->input->post('nama_praktikum');

			$varnama=$this->input->post('nama_praktikan');

			$deskripsi=$this->input->post('deskripsi');

			$npm=$this->input->post('npm');

			$peje=$this->input->post('listAsisten');
			
      
			$kelas=$this->input->post('kelas');
      $tanggal=$this->input->post('datethis');


		$data_ary = array(
			         	'id_praktikum'=> $id_praktikum,
                'judul'     => strtoupper($judul),
                'npm'     => $npm,
                'tanggal' => $tanggal,
        				'nama_praktikan'=> strtoupper($varnama),
        				'nama_praktikum'=> strtoupper($praktikum),
                'kelas'     => strtoupper($kelas),
                'deskripsi'     => $deskripsi,
                'penanggung_jawab'     => strtoupper($peje),
                'file_name' => $upload_data['file_name'],
                
            );
			
			$this->load->database();
			$this->db->insert('upload', $data_ary);
			
			 $this->gotoSuksesPage();


			
			
		}
 }
	


 
 
 

 function insertAsisten()
 {

  $this->load->model('labti_model');

   
           $cekmodel= $this->labti_model->m_insAsisten();
          

            //$this->load->view('v_signuptoken');
        
            if($cekmodel)

            {
              $this->gotoSuksesDaftar();

            }

         
 }


function gotoSuksesDaftar(){


  $this->load->view('sukses_daftar');
}



 
 public function asisten_upload()
 {
		$config = array(
            'upload_path'   => './kumpulanAsisten/',
            'allowed_types' => '*',
			'max_size' => '2048',
			'overwrite' => true,
            'encrypt_name'  => false,
		 
        );
		
				
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload()) {
          
		  $this->goAsistenPage();
			
        
	 
			
			}
		else 
		{
			
				$upload_data = $this->upload->data();
				
				$ids= $this->input->post('nid');
				$nmas= $this->input->post('nama');
				$almt = $this->input->post('alamat');
				$port = $this->input->post('portofolio');
				$email = $this->input->post('email');
				$lsm= $this->input->post('linksocmed');
				$kontak = $this->input->post('kontak');
				$jab = $this->input->post('jabatanstruktural');
				$thnmasuk = $this->input->post('tahunmasuk');
				
				
				

		$data_ary = array(
		
				'id_asisten'=> $ids,
                'nama_asisten' =>strtoupper($nmas),
                'alamat'     => strtoupper($almt),
				'portofolio'=> $port,
				'email'=> $email,
                'linksocmed'     => $lsm,
                'kontak'     => $kontak,
                'jabatan_struktural'=> strtoupper($jab) ,
				'tahun_masuk'=> $thnmasuk,
				'filename_photo' => $upload_data['file_name'],
                
            );
			
			$this->load->database();
			$this->db->insert('arsip_asisten', $data_ary);
			
			 $this->goAsistenPage();


			
			
		}
 }
	


 function verifikasiToken()
 {

    $input=$this->input->post('inputToken');
    $token="labti12345";

    if ($input==$token)
    {

        $this->load->view('v_signup');


    }else
    {


      redirect('Lab_ctr','refresh');
    }



 }

 function lihatsemua()
 {

    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $data['namaku']   = $session_data['nama']; 
      $data['kontak']   = $session_data['kontak']; 
        
      $this->load->view('lihat_semua',$data);
  
    }

    else
    {
        redirect('Lab_ctr','refresh');
   
    }



 
 }


public function dataproyek()
{
 if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $data['namaku']   = $session_data['nama']; 
      $data['kontak']   = $session_data['kontak']; 
        
      $this->load->view('form_proyek',$data);
  
    }

    else
    {
        redirect('Lab_ctr','refresh');
   
    }



}

public function gotoTugasPage()

{

 if($this->session->userdata('logged_in'))
   {
    
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['dispstat'] = $session_data['status'];
    $data['dispnpm'] = $session_data['npm'];
    //$data['dispnip'] = $session_data['nip'];
    $data['namaprak'] = $session_data['nama_praktikan'];
    //$data['namaasist'] = $session_data['nama'];
    
  	$this->load->library('upload');
  	$data['error']=$this->upload->display_errors();
      
      
    $data['query']=$this->labti_model->getPost();
    
	
	$this->load->view('tugas_page',$data);             
           
       
        
     

          
      

     }
   

   else
   {
     //Jika tidak ada session di kembalikan ke halaman login
     redirect('Lab_ctr/login_index', 'refresh');
   }


}



public function gotoSuksesPage()

{

 if($this->session->userdata('logged_in'))
   {
    
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    
    $this->load->view('upload_success',$data);             
           
       
                   

     }
   

   else
   {
     //Jika tidak ada session di kembalikan ke halaman login
     redirect('Lab_ctr/login_index', 'refresh');
   }


}




public function goToLoginAsisten()
{

      $this->load->view('vlab_logasisten');

}


public function goAsistenPage()

{
 if($this->session->userdata('logged_in'))
   {
     
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['dispstat'] = $session_data['status'];
	 	  
    $this->load->library('upload');
	 $data['error']= $this->upload->display_errors();
            
           
       
        
        $this->load->view('arsip_asisten' , $data);

          
      

     }
   

   else
   {
     //Jika tidak ada session di kembalikan ke halaman login
     redirect('Lab_ctr/login_index', 'refresh');
   }


}


public function admin()
{

    $this->load->view('admin_view');

}



public function ajax_data_proyek()
{
	
	$result=$this->db->get('upload')->result();
	
	$array_data=array();
	$inc=0;
	
		foreach($result as $row){
			
			$array_data[$inc]['id_praktikum']= $row->id_praktikum;
			$array_data[$inc]['judul']= $row->judul;
			$array_data[$inc]['npm']= $row->npm;
			$array_data[$inc]['nama_praktikan']= $row->nama_praktikan;
			$array_data[$inc]['nama_praktikum']= $row->nama_praktikum;
			$array_data[$inc]['kelas']= $row->kelas;
			$array_data[$inc]['deskripsi']= $row->deskripsi;
			$array_data[$inc]['peje']= $row->peje;
			$array_data[$inc]['file_name']= $row->file_name;
			$inc++;
		}
	
	echo json_encode($array_data);
  }

    public function cget_data_proyek()
    {

            $this->load->model('labti_model');
            $data['h'] = $this->labti_model->mget_data_proyek();
            $this->load->view('view_proyek',$data);



    }


    public function cget_data_search()
    {

             if($this->session->userdata('logged_in'))
   {
    
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['dispstat'] = $session_data['status'];
      
    
     //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('labti_model');  
         //load the method of model  
         $data['h']=$this->labti_model->mget_data_search();  
         //return the data in view  
  
      $this->load->view('view_proyek',$data);             
           
       
        
     

          
      

     }




    }


  
  
  public function ajax_data_asisten()
{
	
	$result=$this->db->get('arsip_asisten')->result();
	
	$array_data=array();
	$inc=0;
	
		foreach($result as $row){
			
			$array_data[$inc]['id_asisten']= $row->id_asisten;
			$array_data[$inc]['nama_asisten']= $row->nama_asisten;
			$array_data[$inc]['alamat']= $row->alamat;
			$array_data[$inc]['portofolio']= $row->portofolio;
			$array_data[$inc]['email']= $row->email;
			$array_data[$inc]['linksocmed']= $row->linksocmed;
			$array_data[$inc]['kontak']= $row->kontak;
			$array_data[$inc]['jabatan_struktural']= $row->jabatan_struktural;
			$array_data[$inc]['tahun_masuk']= $row->tahun_masuk;
			
			$array_data[$inc]['filename_photo']= $row->filename_photo;
			 
			
			$inc++;
		}
	
	echo json_encode($array_data);
  
  }


  function downloadProjek($file)
{
    $this->load->helper('download');
    $file_data = file_get_contents(base_url()."kumpulan/".$file);
    $file_name = $file;
    force_download($file_name, $file_data);
}

public function gotoMainMenu(){

    $this->login_index();

}

public function goToLoginPraktikan(){

    $this->load->view('vlab_login');

}

  
  
  
  
  
  
  
  
  
  



public function c_viewproyek()
{
     if($this->session->userdata('logged_in'))
   {
    
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['dispstat'] = $session_data['status'];
      
    
     //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('labti_model');  
         //load the method of model  
         $data['h']=$this->labti_model->mget_data_proyek();  
         //return the data in view  
  
      $this->load->view('view_proyek',$data);             
           
       
        
     

          
      

     }

}	


public function c_viewasisten()
{
     if($this->session->userdata('logged_in'))
   {
    
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['dispstat'] = $session_data['status'];
      
    
     
  
      $this->load->view('view_asisten',$data);             
           
       
        
     

          
      

     }

}	



}


//kontroller untuk mengmbil nama asisten 
  
 





 //--------------------------------------------


?>