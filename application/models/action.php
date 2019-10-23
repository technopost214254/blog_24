<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Model {

	public function insert($table ='' , $data='')
	{
		return $this->db->insert($table , $data);
	}
	public function select($table = '')
	{
		return $this->db->select('*')->get($table)->result();
	}
	public function get_where_condition($table ='', $config ='')
	{
		return $this->db->get_where($table , $config)->result();
	}
	public function del($table='', $config_id='')
	{
		return $this->db->delete($table , $config_id);
	}
	public function update($table='' , $id = '', $data = '')
	{
		$this->db->where('Sr_no',$id);
		return $this->db->update($table , $data);
	}
}