<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$page_data = ['title'=>'home page'];
		$this->load->view('front/index.php',$page_data);
	}
	public function contact()
	{
		$page_data = ['title'=>'contact us'];
		$this->load->view('front/contact.php',$page_data);
	}	
	public function post()
	{
		$page_data = ['title'=>'post'];
		$this->load->view('front/post.php',$page_data);
	}
	public function category()
	{
		$page_data = ['title'=>'category'];
		$this->load->view('front/category.php',$page_data);
	}
	public function regular()
	{
		$page_data = ['title'=>'regular'];
		$this->load->view('front/regular.php',$page_data);
	}
}
