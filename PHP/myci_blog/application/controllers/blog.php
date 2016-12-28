<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class blog extends CI_Controller{

    public function __construct()  //写这个构造函数就是为了少些第8行代码。
    {
        parent::__construct();
        $this -> load -> model("blog_model");
    }
    public function blogCatalogs(){
        $this->load->view("blogCatalogs");
    }

    public function addBlogCatalog(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $blogTypeName=$this->input->post("blogTypeName");
        $row=$this->blog_model->saveblogTypeName($blogTypeName,$userid);
        if($row){
            redirect("blog/showblogTypeName");
        }else{
            echo "fail";
        }
    }
    public function showblogTypeName(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $row=$this->blog_model->getblogTypeName($userid);
//        var_dump($row);
//        die();
//        if($row){
            $this->load->view("blogCatalogs",array(
                "blogTypeName"=>$row
            ));
//        }else{
////            echo "fail";
//            redirect("blog/blogCatalogs");
//        }
    }

    public function show_blogTypeName(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $row=$this->blog_model->getblogTypeName($userid);
        $this->load->view("newBlog",array(
            "blogTypeName"=>$row
        ));
    }
    public function newBlog(){
        $this->load->view("newBlog");
    }

    public function saveblogs(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $blogtitle=$this->input->post("blogtitle");
        $blogTypeid=$this->input->post("blogTypeid");
        $content=$this->input->post("content");
        $row=$this->blog_model->saveBlogs($userid,$blogtitle,$blogTypeid,$content);
        if($row){
            redirect("blog/showBlogs");
        }
        echo "fail";
    }

    public function showBlogs(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $row=$this->blog_model->showBlogs($userid);
        if($row){
            $this->load->view("blogs",array(
                "blogs"=>$row
            ));
        }
    }

    public function blogs(){
        $this->load->view("blogs");
    }


}