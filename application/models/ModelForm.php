<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *Deklarasi class 
 */
class ModelForm extends CI_Model
{
	public $table = 'form';
	public $id = 'id_form';

	function __construct()
	{
		parent::__construct();
	}

	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}
	function cek_data($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function get(){
		return $this->db->get($this->table)->result(); 
	}
}