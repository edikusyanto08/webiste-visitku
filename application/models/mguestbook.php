<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Mguestbook extends CI_Model
{
         
        function __construct()
		{
			parent::__construct();
		}
  
        //untuk menampilkan data awal
		var $table="buku_tamu";
		
		function tampil_gb(){
			$data_guest=$this->db->query("select * from buku_tamu order by id_gb asc");
			return $data_guest;
		}
		
			//untuk simpan data
		function simpan_gb($data){
			$this->db->insert($this->table,$data);
		}

			//untuk update data
		function update_gb($id_gb,$data){
			$this->db->where('id_gb', $id_gb);
			$this->db->update($this->table, $data);
		
		}
			//untuk hapus data		
		function hapus_gb($id_gb){
			$this->db->where('id_gb',$id_gb);
			$this->db->delete($this->table);
		}
		
	//cari data saat akan di edit
		function cari_data($id_gb){
			return $this->db->get_where($this->table, array('id_gb'=>$id_gb), 1)->row();
		}

	

		
		
}