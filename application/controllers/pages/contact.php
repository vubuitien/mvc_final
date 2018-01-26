<?php 
	class Contact extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('pages_model');
		}
		function index()
		{
			$input = array();
			$data['list'] = $this->db->select('*')->where('id','1')->get('contact')->result();
			$data['temp'] = 'admin/menu/index' ;
			$this->load->view('user/pages/contact',$data);
		}
	}	
?>