<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct(){
        parent::__construct();
    }
	public function index(){
		$data['select'] = 'home';
		$data['page'] = 'home.php';
		$this->load->view('website/index', $data);
	}
	function error404(){
		$data['page'] = 'error404.php';
		$this->load->view('website/index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */