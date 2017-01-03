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
		$this->session->unset_userdata("messageNum");
		$this->session->unset_userdata("usermood");
		$this->session->unset_userdata("NewProfile");
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
		$row=$this->user_model->moodSetting($userId,$mood);    //改完之后，下面重新取session
//		var_dump($row);
//		die();
		if($row){
			$mood=$this->user_model->queryMood($userId);
			if($mood){
				$this->session->set_userdata(array(     //再次存一次session，假如不写这个，修改完了不会马上显示，要推出才能显示修改后的内容，但是再次session之后，就可以立马显示了
					"usermood"=>$mood
				));
				redirect("blog/indexShowBlogs");
			}

		}else{
			echo "fail";
		}
	}


	public function profile(){
		$this->load->view("profile");
	}


	public function editProfile(){
		$userId=$this->session->userdata("userinfo")->user_id;
		$realName=$this->input->post("realName");
		$gender=$this->input->post("gender");
//		var_dump($realName);
//		var_dump($gender);
//		die();

		$row=$this->user_model->updateProfile($userId,$realName,$gender);
//		var_dump($row);
//		die();
		if($row){
			$NewProfile=$this->user_model->queryNewProfile($userId);
//			var_dump($NewProfile);
//			die();
			if($NewProfile){
				$this->session->set_userdata(array(
					"NewProfile"=>$NewProfile
				));
				redirect("blog/indexShowBlogs");
			}
		}else{
			echo "fail";
		}
	}


}


