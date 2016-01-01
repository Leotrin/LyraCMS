<?php
class backend_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	function insert_new($table,$data){
      $q = $this->db->insert($table, $data);
      if($q==true){
          $id = $this->db->insert_id();
          return $id;
      }
      return false;
    }
    function update_table($table, $data, $kushti){
		$this->db->where($kushti);
		$q = $this->db->update($table, $data);
		if($q==true){
			return true;
        }
		return false;
	}
    function delete_tb($table, $id){
        $this->db->where("id" , $id);
		$q = $this->db->delete($table);
		if($q==true){
			return true;
		}
		return false;
    }
    function select_all($table){
        $this->db->select('*')->from($table)->order_by("id desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    function select_single($table,$val){
        $this->db->select('*')->from($table)->where("id",$val)->order_by("id desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    function select_where($table,$where){
        $this->db->select('*')->from($table)->where($where)->order_by("id desc");
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
