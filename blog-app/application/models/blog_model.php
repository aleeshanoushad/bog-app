<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public $_table = 'blog';
    public $protected_attributes = array('blog_id');
    protected $primary_key = 'blog_id';

	public function lastaddedblogs($cn=NULL)
	{
		if($cn){

			$this->db->order_by('blog_time', 'desc');
			$query = $this->db->get('blog', $cn);
			return $query->result();


			// $this->db->select('');
			// $this->db->from('');
			
		}
	}

}

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */