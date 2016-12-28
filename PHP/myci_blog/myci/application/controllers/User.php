<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()  //写这个构造函数就是为了少些第10行代码。
	{
		parent::__construct();
		$this -> load -> model("user_model");
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$login=$this->input->post("login");
		$register=$this->input->post("register");
		if($login){
			$username = $this -> input -> post("username");
			$password = $this -> input -> post("password");
			$this->load->model("user_model");
			$row=$this->user_model->getusersByUsernameandPwd($username,$password);
			if($row){
				$this->session->set_userdata(array(
					"userinfo"=>$row
				));
				redirect("user/list_user");
			}else{
				echo "fail";
			}
		}else{
			$this->load->view("regist");
//			redirect("user/regist");
		}
	}

	public function regist(){
		$this->load->view("regist");
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$this->load->model("user_model");
		$row=$this->user_model->saveUser($username,$password);
		if($row){
			redirect("user/index");
		}else{
			echo "fail";
		}
	}

	public function checkUsername(){
		$username=$this->input->get("username");
		$this->load->model("user_model");
		$row=$this->user_model->getByUsername($username);
		if($row){
			echo "fail";
		}else{
			echo "success";
		}
	}

	public function list_user(){
		$this->load->model("user_model");
		$allUser=$this->user_model->getAllUser();
		$this->load->view("list",array("list"=>$allUser));   //list返回的是数组，然后在页面用的时候要用foreach循环。
	}

	public function delete(){
		$userid=$this->input->get("userid");
		$this->load->model("user_model");
		$row=$this->user_model->deleteUser($userid);
		if($row>0){
			redirect("user/list_user");
		}else{
			echo "fail";
		}
	}

	public function change(){
		$userid=$this->input->get("userid");
		$this->load->model("user_model");
		$user=$this->user_model->getuserByid($userid);
		$this->load->view("change",array(
			"user"=>$user
		));
	}

	public function update(){
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$userid=$this->input->post("userid");
		$this->load->model("user_model");
		$row=$this->user_model->updateUser($username,$password,$userid);
		echo "wwwww";
		if($row){
			redirect("user/index");
		}else{
			echo "fail";
		}
	}
}


