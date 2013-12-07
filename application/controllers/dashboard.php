<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {
 
        function __construct()
        {
                session_start();
                parent::__construct();
                if ( !isset($_SESSION['username']) ) {
                        redirect('admin');
                }
				$this->load->model('mkategori');
				$this->load->library('image_CRUD');
		}
 
        public function index()
        {
			 $data['content'] = 'admin/home'; 
			$this->load->view('admin/dashboard',$data);
		}
		

		function tambah_foto($output = null)
		{
		$this->load->view('admin/tambah_foto',$output);
			
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

		
		function addtempat(){

			$this->load->model(array('mketerangan','mkategori'));
			$data['content'] = 'admin/add_tempat'; 
			$this->load->view('admin/dashboard',$data);
		}	
		
		public function submit()
        {
			$this->load->model(array('mketerangan','mkategori'));
			$nama_tempat=$this->input->post('nama_tempat',TRUE);
			$isi=$this->input->post('isi',TRUE);
			$status=$this->input->post('status',TRUE);
			$kategori=$this->input->post('kategori',TRUE);
			$this->mketerangan->tambahtempat($nama_tempat,$isi,$status,$kategori);
			redirect('dashboard/addtempat');   
        }
		
		function alltempat(){
			$this->load->model(array('mketerangan','mkategori'));
			$data['keterangan']=$this->mketerangan->alltempat();
			$data['content']='admin/list_tempat';
			$this->load->view('admin/dashboard',$data);		
		}

		function edit(){
			$id=$this->uri->segment(3);
			$this->load->model(array('mketerangan','mkategori'));
			$data['keterangan']=$this->mketerangan->ambiltempat($id);
			$data['content']='admin/edit_tempat';
			$this->load->view('admin/dashboard',$data);		
		}

		function edit_submit(){
			$this->load->model(array('mketerangan','mkategori'));
			$id=$this->input->post('id',TRUE);
			$nama_tempat=$this->input->post('nama_tempat',TRUE);
			$isi=$this->input->post('isi',TRUE);
			$status=$this->input->post('status',TRUE);
			$kategori=$this->input->post('kategori',TRUE);
			$this->mketerangan->ubahtempat($id,$nama_tempat,$isi,$status,$kategori);
			redirect('dashboard/alltempat');
	}
	
		function delete(){
			$id=$this->uri->segment(3);
			$this->load->model(array('mketerangan','mkategori'));
			$this->mketerangan->deleteberita($id);
			redirect('dashboard/alltempat');
		}
		
		public function tampilgb()
        {
			$this->load->model('mguestbook');
			$data['data_guest']=$this->mguestbook->tampil_gb();
			$data['content']='admin/gb_view';
			$this->load->view('admin/dashboard',$data);
		}
	
}