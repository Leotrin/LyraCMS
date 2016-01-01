<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('session');
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
        $this->load->model('backend_model');
        if (!$this->ion_auth->is_admin()) {
            redirect('auth/login');
        }
    }
	public function index()
	{
		$data['select'] = 'dashboard';
		$data['page'] = 'dashboard.php';
		$data['posts'] = $this->backend_model->select_all('posts');
		$this->load->view('admin/index', $data);
	}
	function blog($method=null, $val=null){
		if($method=="edit"):
			$where = "id = ".$val;
			$data['editPost'] = $this->backend_model->select_where('posts', $where);

			if(isset($_POST['submitPost'])):
				$title = mysql_real_escape_string($_POST['title']);
				$content = (string)$_POST['content'];
				$editPost = array(
					"title" => $title,
					"content" => $content
				);
				$postEdit = $this->backend_model->update_table('posts', $editPost, $where);
				if($postEdit):
					redirect('admin/blog');
				endif;
			endif;
		elseif($method=="delete"):
			$where = "id = ".$val;
			$editPost = array(
				"active" => 0
			);
			$postEdit = $this->backend_model->update_table('posts', $editPost, $where);
			if($postEdit):
				redirect('admin/blog');
			endif;
		elseif($method=="active"):
			$where = "id = ".$val;
			$editPost = array(
				"active" => 1
			);
			$postEdit = $this->backend_model->update_table('posts', $editPost, $where);
			if($postEdit):
				redirect('admin/blog');
			endif;
		else:
			//New blog post
			if(isset($_POST['submitPost'])):
				$title = mysql_real_escape_string($_POST['title']);
				$content = (string)$_POST['content'];
				$newPost = array(
					"title" => $title,
					"content" => $content,
					"active" => 1
				);
				$postRegistered = $this->backend_model->insert_new('posts', $newPost);
			endif;
			//End new blog post
		endif;
		$data['posts'] = $this->backend_model->select_all('posts');

		$data['select'] = 'blog';
		$data['page'] = 'blog.php';
		$this->load->view('admin/index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */