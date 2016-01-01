<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('backend_model');
    }
	public function index(){

		$where = "active = 1";
		$data['posts'] = $this->backend_model->select_where('posts', $where);
		$data['select'] = 'blog';
		$data['page'] = 'blog.php';
		$this->load->view('website/index', $data);
	}
}
