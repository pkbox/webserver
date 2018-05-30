<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * upload file class
 */
class Upload extends CI_Controller {
	private $file_size;
	private $not_allowed;
	private $filedir;
	function __construct() {
		parent::__construct();
		$this->file_size = FILE_UPLOAD_SIZE;
		$this->not_allowed = array('jpg','jpeg','png','gif','svg');//允许上传文件类型
//		$this->filedir = "./data/picture/";
		$this->filedir = "data/picture/";
		$this->load->database();
		$this->load->library('session');
	}
	/*
	 * 上传图片首页
	 */
	public function index(){
		if(empty($_SESSION["user"])){
			echo "<script>alert('Please sign in')</script>";
			$this->load->view("login");
			return ;
		}
		$pid = $this->input->post("pid");
		if(isset($pid)){
			//编辑图片页
			//查找图片信息
			$condition = array(
				"id" => $pid
			);
			$data["info"] = $this->db->get_where("picture",$condition);//二维数组
			$this->load->view("upload",$data);
		}else{
			//添加图片页
			$this->load->view("upload");
		}
	}
	/*
	 * 提交图片信息
	 */
	public function do_upload()
	{
		if(isset($_SESSION["user"])) {
			$pid = $this->input->post("pid");
			$file = $_FILES["file"];
			$this->fileError($file);
			$this->is_fileType($file);
			$this->is_fileSize($file);
			$this->with_length_limit($file);
			$file_tmp_name = $file["tmp_name"];
			$file_name = time() . rand(1, 1000) . substr($file["name"], strrpos($file["name"], "."));
			if (!move_uploaded_file($file_tmp_name, $this->filedir . $file_name)) {
				$return["success"] = 4;
				$return["message"] = "File upload failed";
				echo "<script>alert('File upload failed')</script>";
				$this->load->view("upload");
			}
			$data = array(
				"url" => $this->filedir . $file_name,
				"size" => $file["size"],
				"tag" => 1,
				"name"=>$this->input->post("name"),
				"tagname" => $this->input->post("tagname"),
				"authorid" => $_SESSION["user"]["id"],
				"author" => $_SESSION["user"]["username"],
			);
			if (isset($pid)) {
				//更新图片信息
				$condition = array(
					"id" => $pid
				);
				$this->db->update("picture", $data, $condition);
				$return["success"] = 1;
				$return["message"] = "Picture update successfully";
//			echo json_encode($return,1);
				echo "<script>alert('Picture update successfully')</script>";
				$this->load->view("upload");
			} else {
				//新增图片信息
				$data["date"] = time();
				$this->db->insert('picture', $data);
				$return["success"] = 1;
				$return["message"] = "Picture upload successfully";
//			echo json_encode($return,1);
				echo "<script>alert('Picture upload successfully')</script>";
				$this->load->view("upload");
			}
		}else{
			echo "<script>alert('Please sign in')</script>";
			$this->load->view("login");
		}
	}
	/*
 	* 文件上传错误
 	*/
	public function fileError($file){
		if($file["error"]!=0){
			$return["success"] = 0;
			$return["message"] = "File error";
			echo "<script>alert('File error')</script>";
			$this->load->view("upload");
//			echo json_encode($return,1);
//			exit;
		}
	}
	/*
     * 判断文件类型是否符合
     */
	public function is_fileType($file){
		$type = pathinfo($file["name"],PATHINFO_EXTENSION );
		if (!in_array($type,$this->not_allowed)) {
			$return["message"] = "File type does not match";
			$return["success"] = 2;
			echo "<script>alert('File type does not match')</script>";
			$this->load->view("upload");
//			echo json_encode($return,1);
//			exit;
		}
	}
	/*
     * 文件大小判断
     */
	public function is_fileSize($file){
		if($file["size"] > $this->file_size){
			$return["message"] = "File size exceeds limit";
			$return["success"] = 3;
			echo "<script>alert('File size exceeds limit')</script>";
			$this->load->view("upload");
//			echo json_encode($return,1);
//			exit;
		}
	}
	/*
	 * 图片的宽度和高度限制
	 */
	public function with_length_limit($file){
		$fileinfo = getimagesize($file["tmp_name"]);
		if($fileinfo["0"]>PICTURE_LENGTH || $fileinfo["0"]>PICTURE_WIDTH){
			$return["message"] = "Image length and height restrictions";
			$return["success"] = 5;
			echo "<script>alert('Image length and height restrictions')</script>";
			$this->load->view("upload");
//			echo json_encode($return,1);
//			exit;
		}
	}
}
