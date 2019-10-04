<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	// add blog and display last added 5 blog with date and time.
	// login for multiple users and add edit blog and display with images.
	// display all blogs last added from blog table
	 function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model','blg');
	}
	

	public function index()
	{
	
		$data['results'] =$this->blg->lastaddedblogs(5); 
		$this->load->view('blog_view', $data, FALSE);
	}
	public function login($value=1)
	{
		$data['type']=$value;
		$this->load->view('loginview',$data);
	}
	public function dashboard($value='')
	{
		$data=NULL;
		$this->load->view('dashboard', $data);
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */