<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->db->order_by("gread asc,mark desc");
		$data = $this->db->get_where('user')->result();
		$this->load->view('welcome_message',['table_row'=>$data]);
	}
	public function insert_data()
	{

		for($i = 0; $i<=10; $i++){
			$user_data = [
				'name'=>'user'.$i,
				'mark'=>rand(1,10),
				'gread'=>'A'.$i,

			];
			//$this->db->insert('user',$user_data);
		}
	}
}
