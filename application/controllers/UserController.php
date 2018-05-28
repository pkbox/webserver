<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	/*
	 * 注册，登录，登出页面
	 * action: register 注册
	 * 		   login    登录
	 * 		   logout   登出
	 * method: get
	 */
	public function index(){
		$status = $this->input->get("status");
		if($status == LOGIN || empty($status)){
			//登录界面
			$this->load->view("login.php");
		}elseif ($status == LOGOUT){
			//登出界面
			$this->load->view("logout.php");
		}elseif ($status == REGISTER){
			//注册界面
			$this->load->view("regist.php");
		}
	}
	/*
	 * 注册
	 * method:   post
	 */
	public function register(){
		//获取注册信息
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$email = $this->input->post("email");
		$name = $this->input->post("name");
		if(empty($username)){
			$return  = array(
				"status" => 2,
				"message" => "Username is null",
			);
			echo json_encode($return,1);
			exit;
		}
		if(empty($password)){
			$return  = array(
				"status" => 3,
				"message" => "Password is null",
			);
			echo json_encode($return,1);
			exit;
		}
		if(empty($email)){
			$return  = array(
				"status" => 4,
				"message" => "Email is null",
			);
			echo json_encode($return,1);
			exit;
		}
		if(empty($name)){
			$return  = array(
				"status" => 5,
				"message" => "Name is null",
			);
			echo json_encode($return,1);
			exit;
		}
		$is_repeat = $this->is_username_repeat($username);
		if($is_repeat){
			$return  = array(
				"status" => 6,
				"message" => "Username has been repeated",
			);
			echo json_encode($return,1);
			exit;
		}
		$data = array(
			"username" => $username,
			"password" => $this->encrypt($password),
			"email" => $email,
			"name" => $name,
			"date" => time(),
		);
		if($this->db->insert("user",$data)){
			$return  = array(
				"status" => 1,
				"message" => "Registered successfully",
			);
			echo json_encode($return,1);
			exit;
		}else{
			$return  = array(
				"status" => 0,
				"message" => "Registered failed",
			);
			echo json_encode($return,1);
			exit;
		}
	}
	/*
	 * 登录
	 */
	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if(empty($username)){
			$return  = array(
				"status" => 2,
				"message" => "Username is null",
			);
			echo json_encode($return,1);
			exit;
		}
		if(empty($password)){
			$return  = array(
				"status" => 3,
				"message" => "Password is null",
			);
			echo json_encode($return,1);
			exit;
		}
		$condition = array(
			"username" => $username,
			"password" => $this->encrypt($password)
		);
		$user_info = $this->db->get_where("user",$condition)->result_array();
		if($user_info){

			$_SESSION["user"]["id"] = $user_info[0]["id"];
			$_SESSION["user"]["username"] = $username;
			$_SESSION["user"]["email"] = $user_info[0]["email"];
			$_SESSION["user"]["name"] = $user_info[0]["name"];
			$return  = array(
				"status" => 1,
				"message" => "success",
			);
			echo json_encode($return,1);
			exit;
		}else{
			$return  = array(
				"status" => 0,
				"message" => "Username or password is not true",
			);
			echo json_encode($return,1);
			exit;
		}
	}
	/*
	 * 登出
	 */
	public function logout(){
		if(isset($_SESSION["user"])){
			unset($_SESSION["user"]);
			$return  = array(
				"status" => 1,
				"message" => "success",
			);
//			echo json_encode($return,1);
//			exit;
			echo "<script>alert('successfully')</script>";
			header("Location: /index.php/home/home");
		}
	}
	/*
	 * 密码加密
	 */
	public function encrypt($password){
		return md5($password);
	}
	/*
	 * 用户名判断重复
	 */
	public function is_username_repeat($username){
		$condition=array(
			"username" =>$username
		);
		$result = $this->db->get_where("user",$condition);
		return $result->result_array();
	}
	/*
	 * 获取用户所有图片
	 */
	public function get_user_pictures($authorid){
		if(empty($authorid)){
			return array();
			exit;
		}
		$condition = array(
			'authorid' =>$authorid
		);
		$list = $this->db->get_where("picture",$condition);
		return $list->result_array();
	}
	/*
	 * 个人中心
	 */
	public function personal(){
		$data["list"] = array();
		if(isset($_SESSION["user"])){
			$condition = array(
				"authorid" => $_SESSION["user"]["id"],
			);
			$data["list"] = $this->db->get_where("picture",$condition)->result_array();
		}
		$this->load->view("personal",$data);
	}
	/*
	 * 删除图片
	 */
	public function delete(){
		$uid = $this->input->post("uid");
		$pid = $this->input->post("pid");
		if(isset($_SESSION["user"]) && $uid==$_SESSION["user"]["id"]){
			$condition = array(
				"id"=>$pid
			);
			if($this->db->delete("picture",$condition)){
				$return["message"] = "successful";
				$return["success"] = 1;
				echo json_encode($return);
				exit;
			}else{
				$return["message"] = "error";
				$return["success"] = 3;
				echo json_encode($return);
				exit;
			}
		}else{
			$return["message"] = "you can not delete";
			$return["success"] = 2;
			echo json_encode($return);
			exit;
		}
	}
}
