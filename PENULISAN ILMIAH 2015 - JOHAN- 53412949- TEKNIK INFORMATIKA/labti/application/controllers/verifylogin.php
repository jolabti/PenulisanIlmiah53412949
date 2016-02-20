<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('labti_model','',TRUE);
 }

 function index()
 {
   //Aksi untuk melakukan validasi
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Jika validasi gagal user akan diarahkan kembali ke halaman login
     $this->load->view('vlab_login');
   }
   else
   {
     //Jika berhasil user akan di arahkan ke private area 
     redirect('Lab_ctr', 'refresh');
   }
 }

 function check_database($password)
 {
   //validasi field terhadap database 
   $username = $this->input->post('username');

   //query ke database
   $result  = $this->labti_model->loginpraktikan($username, $password);
   //$result2 = $this->labti_model->login2($username, $password);
   

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'npm'=>$row->npm,
         'username' => $row->username,
         'nama_praktikan'=> $row->nama_praktikan,
         'alamat'=>$row->alamat,
         'email'=>$row->email,
         'thn_masuk'=>$row->tahun_masuk,
         'status'=>$row->status
       );

       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}

?>