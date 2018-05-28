<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function home($action=null)
	{
		if ($action == "search") {
			$condition = array(
				"tagname" => $this->input->get("tagname"),
			);
			$data["list"] = $this->db->get_where("picture",$condition)->result_array();
			$this->load->view("home.php", $data);
		} else {
			$sql = "select * from picture ORDER BY id DESC LIMIT 8";
			$data["list"] = $this->db->query($sql)->result_array();
			$this->load->view("home.php", $data);
		}
	}

	public function about_us()
	{
		$this->load->view("generic.php");
	}

	public function get_pdf(){
		$filename ="ZimageDisclaimer.pdf";
		$filepath ="./data/ZimageDisclaimer.pdf";
		header("Content-type:application/pdf");
		header("Content-Disposition:attachment;filename='".$filename."'");
		readfile($filepath);
	}
}
