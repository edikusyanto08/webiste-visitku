<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller
{
       function __construct()
 {
         session_start(); //mengadakan session
  parent::__construct();
 } 
  
        public function index()
        {
              if ( isset($_SESSION['username']) ) { //cek apakah session ada
                 redirect('dashboard'); //redirect controller admin/dashboard
              }
               
              $this->load->library('form_validation'); //load library form_validation
              $this->form_validation->set_rules('username', 'Username', 'required'); //cek, validasi username
              $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]'); //cek, validasi password
              if ( $this->form_validation->run() == TRUE ) { //apabila validasi true(benar semua)
                 $this->load->model('muser'); // load model muser
                 $result = $this->muser->cek_user_login( //jalankan fungsi cek_user_login dari model muser
                             $this->input->post('username'),  //menangkap username dari form
                             $this->input->post('password') //menangkap password dari form
                          );
                  
                             
                        if ( $result == TRUE) { //apabila result = true(ada data)
                                $_SESSION['username'] = $this->input->post('username'); //create session
                                redirect('dashboard'); // redirect controller admin/dashboard
                        }
              }  
               
                $this->load->view('login'); //apabila session kosong load login/login
        }
         
        public function logout() //fungsi logout
        {
             session_destroy(); //session destroy
             $this->index();//redirect function index()
        }
}