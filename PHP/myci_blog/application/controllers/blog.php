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

    public function show_changeblogTypeName(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $content=$this->input->get("content");
        $title=$this->input->get("title");
        $type_name=$this->input->get("type_name");
        $row=$this->blog_model->getChangeblogTypeName($content,$title,$type_name);
        if($row){
            $rows=$this->blog_model->getblogTypeName($userid);
            foreach($row as $value){
                $this->load->view("changeBlog",array(
                    "blogTypeNames"=>$value,
                    "blogTypeName"=>$rows
                ));
            }
        }
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

    public function deleteBlogs(){
        $blogId=$this->input->get("blogId");
        $row=$this->blog_model->deleteBlogs($blogId);
        if($row){
            echo "success";
        }else{
            echo "fail";
        }
    }


    public function deleteBlogType(){
        $typeId=$this->input->get("typeId");
        $row=$this->blog_model->deleteBlogType($typeId);
        if($row){
            echo "success";
        }else{
            echo "fail";
        }
    }


    public function changeBlogType(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $typename=$this->input->get("typename");
        $typeId=$this->input->get("typeId");
        $row=$this->blog_model->checkTypeName($typename,$userid);
//        var_dump($row);
//        die();
        if($row){
            echo "fail";
        }else{
            $rows=$this->blog_model->change_BlogType($typename,$typeId);
//            var_dump($typeId);
//            die;
            if($rows){
                echo "success";
            }else{
                echo "fail";
            }
        }
    }


    public function blogComments(){
        $this->load->view("blogComments");

    }

    public function showBlogsOnComments(){
//        $userid=$this->session->userdata("userinfo")->user_id;
        $row=$this->blog_model->showBlogsOnComments();
//        var_dump($row);
//        die();
        if($row){
            $this->load->view("blogComments",array(
                "blogs"=>$row
            ));
        }
    }

    public function deleteBlogComment(){
        $commentId=$this->input->get("commentId");
        $row=$this->blog_model->deleteBlogComment($commentId);
        if($row){
            redirect("blog/showBlogsOnComments");
        }else{
            echo "删除失败";
        }
    }

    public function deleteAllBlogCommentByUserId(){
        $userId=$this->input->get("userId");
        $row=$this->blog_model->deleteAllBlogCommentByUserId($userId);
        if($row){
            redirect("blog/showBlogsOnComments");
        }else{
            echo "删除失败";
        }
    }


    public function indexShowBlogs(){
//        $userid=$this->session->userdata("userinfo")->user_id;
//        $mood=$this->session->userdata("userinfo")->mood;
        $row=$this->blog_model->indexShowBlogs();
//        var_dump($row);
//        die();
        if($row){
            $rerow=$this->blog_model->indexShowComments();
//            var_dump($rerow);
//            die();
            $this->load->view("index_logined",array(
                "blogs"=>$row,
                "comment"=>$rerow
            ));
        }
    }


    public function updateblogs(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $blogtitle=$this->input->post("blogtitle");
        $blogTypeid=$this->input->post("blogTypeid");
        $content=$this->input->post("content");
        $blogId=$this->input->post("blogId");
        $row=$this->blog_model->updateblogs($userid,$blogtitle,$blogTypeid,$content,$blogId);
        if($row){
            redirect("blog/showBlogs");
        }else{
            echo "fail";
        }
    }

    public function deleteIndexBlogs(){
        $blog_id=$this->input->get("blog_id");
        $row=$this->blog_model->deleteIndexBlogs($blog_id);
//        var_dump($row);
//        die();
        if($row){
            redirect("blog/indexShowBlogs");
        }else{
            echo "fail";
        }
    }

//    public function viewPost_logined(){
//    $this->load->view("viewPost_logined");
//}

    public function viewPost_logined(){
//        $userid=$this->session->userdata("userinfo")->user_id;
        $title=$this->input->get("title");
        $createtime=$this->input->get("createtime");
        $username=$this->input->get("username");
        $content=$this->input->get("content");
        $blogId=$this->input->get("blogId");
        $row=$this->blog_model->indexShowBlogs();
        if($row){
            $rerow=$this->blog_model->indexShowComments();
            if($rerow){
                $num=$this->blog_model->indexShowCommentsNum($blogId);
                foreach($num as $realNum){
                    $this->load->view("viewPost_logined",array(
                        "blogs"=>$row,
                        "comment"=>$rerow,
                        "title"=>$title,
                        "createtime"=>$createtime,
                        "username"=>$username,
                        "content"=>$content,
                        "num"=>$realNum
                    ));
                }

            }



        }
    }

}