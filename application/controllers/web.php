<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Web extends CI_Controller
{
       function __construct()
		{
			parent::__construct();
			$this->load->model(array('mguestbook','mkategori','mgallery'));
			$this->load->library('image_CRUD');
		} 
		function foto_output($output = null)
		{
		$this->load->view('content/gallery_foto',$output);
			
		}
		
		function tambah_foto($output = null)
		{
		$this->load->view('admin/tambah_foto',$output);
			
		}
	
		function index()
		{
			$this->foto_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
			$this->tambah_foto((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		}	
	
		public function bukutamu()
        {
			$data['content']='content/gb';
			$this->load->view('template',$data);
		}
 
		function simpangb(){
			$data=array(
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'pesan'=>$this->input->post('pesan')
				);

			$this->mguestbook->simpan_gb($data);
			$this->session->set_flashdata('message','Data berhasil disimpan');
			redirect('web/bukutamu');
		}
		
		
        public function tentang()
        {
			$data['content']='content/tentang';
			$this->load->view('template',$data);
		}
		
		public function gallery_foto()
        {
			$data['content']='content/gallery_foto';
			$this->load->view('template',$data);
		}

		public function gallery_video()
        {
			$data['content']='content/gallery_video';
			$this->load->view('template',$data);
		}
		
		public function seni_budaya()
        {
			$data['content']='content/seni_budaya';
			$this->load->view('template',$data);
		}
		
		public function peta()
        {
			$data['content']='content/peta';
			$this->load->view('template',$data);
		}
		
		function tambahfoto()
		{
			$image_crud = new image_CRUD();
		
			$image_crud->set_primary_key_field('id');
			$image_crud->set_url_field('url');
			$image_crud->set_title_field('title');
			$image_crud->set_table('gallery_foto')
			->set_ordering_field('priority')
			->set_image_path('assets/uploads');
				
			$output = $image_crud->render();
		
			$this->tambah_foto($output);
		}
	
		function tampilfoto()
		{
			$image_crud = new image_CRUD();
			
			$image_crud->unset_upload();
			$image_crud->unset_delete();
			
			$image_crud->set_primary_key_field('id');
			$image_crud->set_url_field('url');
			$image_crud->set_table('gallery_foto')
			->set_image_path('assets/uploads');
			
			$output = $image_crud->render();
			
			$this->foto_output($output);		
		}
		
		
}