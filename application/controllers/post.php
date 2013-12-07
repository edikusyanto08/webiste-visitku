<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Controller
{
       function __construct()
		{
			parent::__construct();
			$this->load->model(array('mketerangan','mkategori'));
		} 
  
        public function index()
        {
			$data['title']='Visitku';
			$data['content']='content';
			$data['keterangan']=$this->mketerangan->getketerangan();
			$this->load->view('template',$data);
		}
		
		function selengkapnya(){
			$id=$this->uri->segment(3);
			$data['title']='contoh codeigniter';
			$data['content']='selengkapnya';
			$data['keterangan']=$this->mketerangan->selengkapnya($id);
			$this->load->view('template',$data);
		}

		function category(){
		$id=$this->uri->segment(3);
		$data['title']='contoh codeiniter'; 
        $data['content']='perkategori'; 
        $data['keterangan']=$this->mketerangan->getkategori($id);
        $this->load->view('template',$data); 
		}

		

	
	}
?>