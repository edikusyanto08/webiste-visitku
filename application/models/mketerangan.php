<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Mketerangan extends CI_Model
{
         
        function __construct()
		{
			parent::__construct();
		}
  
		function getketerangan(){
			$this->db->order_by('id','desc');
			$this->db->where('status',1);
			$q=$this->db->get('keterangan');
			return $q;
		}
		
		function selengkapnya($id){
			$this->db->where('id',$id);
			$this->db->where('status',1);
			$q=$this->db->get('keterangan');
			return $q;
		}	
		
		function getkategori($id){
			$this->db->where('id_kategori',$id);
			$this->db->order_by('id','desc');
			$q=$this->db->get('keterangan');
			return $q;
		}
		
		function tambahtempat($nama_tempat,$isi,$status,$kategori){
		$data=array('nama_tempat'=>$nama_tempat,
					'isi'=>$isi,
					'tanggal'=>date('Y-m-d'),
					'status'=>$status,
					'id_kategori'=>$kategori
					);
		$this->db->insert('keterangan',$data);
	}
		function alltempat(){
		$this->db->order_by('id','desc');
		$q=$this->db->get('keterangan');
		return $q;
	}
	
		function ambiltempat($id){
		$this->db->where('id',$id);
		$q=$this->db->get('keterangan');
		return $q;
		}
	
		function ubahtempat($id,$nama_tempat,$isi,$status,$kategori){
		$data=array('nama_tempat'=>$nama_tempat,
					'isi'=>$isi,
					'status'=>$status,
					'tanggal'=>date('Y-m-d'),
					'id_kategori'=>$kategori
					);
		$this->db->where('id',$id);
		$this->db->update('keterangan',$data);
	}
	
	function deleteberita($id){
		 $this->db->delete('keterangan',array('id'=>$id));
	}
	


}
?>