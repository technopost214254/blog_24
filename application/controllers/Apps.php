<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('action');
    }
    /*controller dynamic function hear down*/
    public function flashdata($name , $msg){
    	return $this->session->set_flashdata($name,$msg);
    }
    function login_session()
	{
		if($this->session->userdata('admin_login') == NULL)
			return redirect('Apps/login');
	}
	public function delete($table='', $config_id = '')
	{
		return $this->action->del($table,$config_id);
	}


	/*controller static function hear down*/
	public function login($value='')
	{
		$this->load->view('Apps/login');
	}
	public function login_action()
	{
		$username = $this->input->post('admin_username');
		$pass = $this->input->post('admin_password');
		if($username != NULL AND $pass != NULL)
		{
			$login = $this->db->get_where('admin',['username'=>$username, 'password'=>$pass])->num_rows();
			if($login > 0){
				$this->session->set_userdata('admin_login',$login);
				return redirect('Apps/index');
			}else{
				$this->session->set_flashdata('loginerror','enter username and password is incorrect');
				return redirect('Apps/login');
			}
		}else{
			$this->session->set_flashdata('loginerror','enter username and password');
			return redirect('Apps/login');
		}
	}
	public function logout_admin()
	{
		$this->session->unset_userdata('admin_login');
		$this->session->set_flashdata('loginerror','your session is logout');
		return redirect('Apps/login');
	}
	
	public function index()
	{
		$this->login_session();
		$page_data = [
			'title'=>'admin index',
			'page_name'=>'dashboard',
		];
		$this->load->view('Apps/index.php',$page_data);
	}
		public function user()
	{
		$page_data = [
			'title'=>'admin user',
			'page_name'=>'user',
		];
		$this->load->view('Apps/index.php',$page_data);
	}
		public function add_post($id ='')
	{
		$page_data = [
			'title'=>'admin post',
			'page_name'=>'add_post',
			'type' =>$this->action->select('type'),
		];
		if($id != NULL)
		{
			$page_data['blog_edit'] = $this->action->get_where_condition('blog',['Sr_no'=>$id]);
		}
		$this->load->view('Apps/index.php',$page_data);
	}

	public function Add_post_action()
	{
		$data = [
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'user'=>'admin',
			'type'=>$this->input->post('type')

		];
		if(isset($_FILES['file'])){ 
	 	$files = $_FILES['file'];
        $this->load->library('upload');
        $config['upload_path']   =  './uploads';
        $config['allowed_types'] =  '*';
        $_FILES['file']['name']     = $files['name'];
        $_FILES['file']['type']     = $files['type'];
        $_FILES['file']['tmp_name'] = $files['tmp_name'];
        $_FILES['file']['size']     = $files['size'];
        $this->upload->initialize($config);
        $this->upload->do_upload('file');

        $data['file'] = $_FILES['file']['name'];
    	}else{
    		$this->flashdata('msg' , 'you con not select file');
    		return redirect('Apps/add_post');
    	}
    	if($this->action->insert('blog',$data))
    	{
    		$this->flashdata('msg' , 'blog post done!');
    		return redirect('Apps/add_post');
    	}else{
    		$this->flashdata('msg' , 'blog not post.');
    		return redirect('Apps/add_post');
    	}
	}

	public function edit_post_action($id= '')
	{
		$data = [
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'user'=>'admin',
			'type'=>$this->input->post('type')

		];
		if(isset($_FILES['file'])){ 
	 	$files = $_FILES['file'];
        $this->load->library('upload');
        $config['upload_path']   =  './uploads';
        $config['allowed_types'] =  '*';
        $_FILES['file']['name']     = $files['name'];
        $_FILES['file']['type']     = $files['type'];
        $_FILES['file']['tmp_name'] = $files['tmp_name'];
        $_FILES['file']['size']     = $files['size'];
        $this->upload->initialize($config);
        $this->upload->do_upload('file');

        $data['file'] = $_FILES['file']['name'];
    	}else{
    		$this->flashdata('msg' , 'you con not select file');
    		return redirect('Apps/add_post');
    	}
    	if($this->action->update('blog',$id,$data))
    	{
    		$this->flashdata('msg' , 'blog update done!');
    		return redirect('Apps/add_post');
    	}else{
    		$this->flashdata('msg' , 'blog not update.');
    		return redirect('Apps/add_post');
    	}
	}
	public function Post_list()
		{
		$page_data = [
			'title'=>'admin list',
			'page_name'=>'Post_list',
			'blog'=>$this->action->select('blog'),
		];

		$this->load->view('Apps/index.php',$page_data);
	}
	public function delete_post($id, $file_name ='')
	{

		$config_id = ['Sr_no'=>$id];
		if($this->delete('blog',$config_id)){
			unlink('./uploads/'.$file_name); 
			$this->flashdata('msg','delete done!');
			return redirect('Apps/Post_list');
		}
	}

	public function comment_list()
		{
		$page_data = [
			'title'=>'admin Comment',
			'page_name'=>'comment_list',
		];
		$this->load->view('Apps/index.php',$page_data);
	}

}