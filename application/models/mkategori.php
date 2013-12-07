<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Mkategori extends CI_Model
{
         
    function __construct()
	{
		parent::__construct();
	}
	
	function getkategori(){
		return $this->db->get('kategori');
	}	
	

}

?>