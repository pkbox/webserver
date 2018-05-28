<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture  extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function gallery($tagname=null){
		$condition = array();
		if($tagname){
			$condition = array(
				"tagname"=>$tagname,
			);
		}
		$data["list"] = $this->db->get_where("picture",$condition)->result_array();
		$this->load->view("gallery",$data);
	}
	public function detail($id){
		$condition = array(
			"id" => $id,
		);
		$list = $this->db->get_where("picture",$condition)->result_array();
		$data["list"] = $list[0];
		$this->load->view("detail",$data);
	}
}
