<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()  //写这个构造函数就是为了少些第9行代码。
	{
		parent::__construct();
		$this -> load -> model("user_model");
	}

	public function index()
	{
		$this->session->unset_userdata("userinfo");   //删除session
		$this->load->view('index');
	}

	public  function login(){
		$this->load->view("login");
	}
	public function adminIndex(){
		$this->load->view("adminIndex");
	}
	public function index_logined(){
		$this->load->view("index_logined");
	}

	public function checkLogin(){
		$name=$this->input->post("name");
		$pwd=$this->input->post("pwd");
		$row=$this->user_model->getusersByUsernameandPwd($name,$pwd);
		if($row){
			$this->session->set_userdata(array(
				"userinfo"=>$row
			));
//			redirect("user/adminIndex");
//			redirect("user/index_logined");
			redirect("blog/indexShowBlogs");
		}else{
			redirect("user/login");
		}
	}

	public function register(){
		$this->load->view("reg");
	}

	public function checkUser(){
		$username=$this->input->get("username");
		$row=$this->user_model->getAllUser($username);
		if($row){
			echo "fail";
		}else{
			echo "success";
		}
	}

	public function saveUser(){
		$username=$this->input->post("username");
		$pwd1=$this->input->post("pwd1");
		$pwd2=$this->input->post("pwd2");
		$row=$this->user_model->saveUser($pwd1,$pwd2,$username);
		if($row){
			redirect("user/index");
//			echo "success";
		}else{
			redirect("user/register");
//			echo "fail";
		}
	}

	public function chpwd(){
		$this->load->view("chpwd");
	}

	public function checkOldPwd(){
		$userid=$this->session->userdata("userinfo")->user_id;
		$oldpwd=$this->input->get("oldpwd");
		$row=$this->user_model->checkOldPwd($userid,$oldpwd);
		if($row){
			echo "success";
		}else{
			echo "fail";

		}
	}

	public function changePassword(){
		$userid=$this->session->userdata("userinfo")->user_id;
//		$oldpwd=$this->input->post("oldpwd");
		$newpwd=$this->input->post("newpwd");
		$newpwd2=$this->input->post("newpwd2");
		$row=$this->user_model->changePassword($userid,$newpwd,$newpwd2);
		if($row){
			redirect("user/index");
		}else{
			redirect("user/chpwd");
		}
	}
	public function userSettings(){
		$mood=$this->session->userdata("userinfo")->mood;
		$this->load->view("userSettings",array(
			"mood"=>$mood
		));
	}

	public function moodSetting(){
		$userId=$this->session->userdata("userinfo")->user_id;
		$mood=$this->input->post("mood");
//		echo "$userId";
//		die();
		$row=$this->user_model->moodSetting($userId,$mood);
//		var_dump($row);
//		die();
		if($row){
//			redirect("user/userSettings");
			redirect("blog/indexShowBlogs");
		}else{
			echo "fail";
		}
	}


}


