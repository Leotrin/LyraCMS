<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About extends CI_Controller {
	public function index(){
		$data['select'] = 'about';
		$data['page'] = 'about.php';
		$this->load->view('website/index', $data);
	}
}
