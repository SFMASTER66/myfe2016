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
		$this->session->unset_userdata("userinfo");   //删除session
		$this->load->view('index');
	}

	public  function login(){
		$this->load->view("login");
	}
	public function adminIndex(){
		$this->load->view("adminIndex");
	}

	public function checkLogin(){
		$name=$this->input->post("name");
		$pwd=$this->input->post("pwd");
		$row=$this->user_model->getusersByUsernameandPwd($name,$pwd);
		if($row){
			$this->session->set_userdata(array(
				"userinfo"=>$row
			));
			redirect("user/adminIndex");
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



}


