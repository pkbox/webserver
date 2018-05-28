<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function do_comment(){
		if(isset($_SESSION["user"])) {
			$data = array(
				"pid" => $this->input->post("pid"),
				"uid" => $this->input->post("uid"),
				"content" => $this->input->post("content"),
				"date" => time(),
			);
			if(empty($data["content"])){
				$return["message"] = "content is null";
				$return["success"] = 2;
				echo json_encode($return);
				exit;
			}
			if(count($data["content"])>200){
				$return["message"] = "your comment is too long!";
				$return["success"] = 3;
				echo json_encode($return);
				exit;
			}
			if($this->db->insert("comment",$data)){
				$return["message"] = "success";
				$return["success"] = 1;
				echo json_encode($return);
			}
		}else{
			$return["message"] = "please sign in";
			$return["success"] = 4;
			echo json_encode($return);
		}
	}
}
